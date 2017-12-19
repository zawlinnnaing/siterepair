<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Degree;
use App\Department;
use App\Research;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function insertDep(Request $request)
    {
        $this->validate($request, $this->depRules());
        $data = $request->all();
        Department::create($data);
        Session::flash('msg', 'Department added successfully');
        return redirect()->route('admin.createDep');


    }

    public function insertDeg(Request $request)
    {
        $this->validate($request, $this->degRules());
        $data = $request->all();
        $dep = Department::where('name', $request->name)->first();
        $dep->degrees()->create($data);
        Session::flash('msg', 'Degree added successfully');
        return redirect()->back();

    }

    public function editDep($keyword)
    {
        if ($keyword) {
            $dep = Department::where('name', $keyword)->with(['research', 'degrees'])->first();
            if (!empty($dep)) {
                return view('admin.edit_dep')->with('dep', $dep);
            }
        }
        return redirect()->back();
    }

    public function updateDep(Request $request, $keyword)
    {
//        $this->validate($request,array_merge($this->depRules(),array_merge($this->degRules(),$this->researchRules())));
        $data = $request->all();
        $dep = Department::where('name', $keyword)->first();
        $dep->update($data);
        if (!empty($request->deg_title)) {
            foreach ($request->deg_title as $key => $value) {
                Degree::find($key)->update([
                    'deg_title' => $value
                ]);
            }
        }
        if (!empty($request->title)) {
            foreach ($request->title as $key => $value) {
                Research::find($key)->update([
                    'title' => $value,
                ]);
            }
        }
        if (!empty($request->year)) {
            foreach ($request->year as $key => $value) {
                Research::find($key)->update([
                    'year' => $value
                ]);
            }
        }
        if (!empty($request->description)) {
            foreach ($request->description as $key => $value) {
                Research::find($key)->update([
                    'description' => $value
                ]);

            }
        }
        Session::flash('msg', 'Department updated successfully');
        return redirect()->back();

    }

    public function deleteDeg($id)
    {
        Degree::find($id)->delete();

    }

    public function deleteResearch($id)
    {
        Research::find($id)->delete();
    }


    public function depRules()
    {
        return $rules = array('history' => 'required|string',
                              'mission' => 'required|string',
                              'vision'  => 'required|string',

        );
    }
    public function insertResearch(Request $request){
        $this->validate($request,$this->researchRules());
        $dep = Department::where('name',$request->name)->first();
        $data = $request->except('img_dir');
        $research = $dep->research()->create($data);
        if($request->has('img_dir')){
            $imageName = $request->img_dir->getClientOriginalName();
            $request->img_dir->move(public_path('uploads'),$imageName);
            $research->update([
                'img_dir' => $imageName
            ]);
        }

        Session::flash('msg','Research added successfully');
        return redirect()->back();
    }

    public function insertAnnouncement(Request $request){
        $this->validate($request,[
            'content'=>'required|string'
        ]);
        $data = $request->all();
        Announcement::create($data);
        Session::flash('msg','Annoucement added successfully');
        return redirect()->back();
    }

    public function annIndex(){
        $announcements = Announcement::all();
        return view('announcements.index',['announcements' => $announcements]);
    }

    public function editAnn($id){
        $announcement=Announcement::find($id)->first();
        return view('announcements.edit',['announcement' => $announcement]);
    }

    public function updateAnn(Request $request,$id){
        $this->validate($request,[
            'content' => 'required|string'
        ]);
        $data = $request->all();
        Announcement::find($id)->update($data);
        Session::flash('msg','updated successfully');
        return redirect()->back();
    }

    public function deleteAnn($id){
        Announcement::find($id)->delete();
        Session::flash('msg','Deleted successfully');
        return redirect()->back();
    }

    public function degRules()
    {
        return ['deg_title' => 'sometimes|required|string'];
    }

    public function researchRules()
    {
        return ['img_dir'     => 'sometimes|mimes:jpeg,bmp,png,gif,jpg|max:2000',
                'title'       => 'sometimes|required|string',
                'description' => 'sometimes|string|nullable',
                'year'        => 'sometimes|digits:4'
        ];
    }

    public function insertStaff(Request $request){
        $this->validate($request,['staff_name' => 'required|string',
                'title' => 'required|string',
            'research_area' => 'string',
            'current_research' => 'string',
            'img_dir' => 'image']);

        $dep = Department::where('name',$request->name)->first();
        $data = $request->except('img_dir');
        $staff = $dep->staff()->create($data);
        if($request->has('img_dir')){
            $imageName = $request->img_dir->getClientOriginalName();
            $request->img_dir->move(public_path('staff_photos'),$imageName);
            $staff->update([
                'img_dir' => $imageName
            ]);
        }
        Session::flash('msg','Staff Added successfully');
        return redirect()->back();
    }
}
