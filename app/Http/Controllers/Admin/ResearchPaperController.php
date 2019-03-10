<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Http\Requests\ResearchPaperRequest;
use App\ResearchPaper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Session;
use Validator;

class ResearchPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $papers = ResearchPaper::with('department')->get();
        return view('admin.research_papers.index')->with(['papers' => $papers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.research_papers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResearchPaperRequest $request)
    {
        //
        $data = $request->all();
        $dep = Department::where('name', $request->name)->first();
        $paper = $dep->researchPapers()->create($data);
        if ($paper) {
            Session::flash('msg', 'Paper added successfully');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResearchPaper $researchPaper
     * @return \Illuminate\Http\Response
     */
    public function show(ResearchPaper $researchPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paper = ResearchPaper::find($id);
        return view('admin.research_papers.edit')->with(['paper' => $paper]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $validator = Validator::make(Input::all(), (new ResearchPaperRequest())->rules());
        $data = Input::all();
        $paper = ResearchPaper::find($id);
        $updated = $paper->update($data);
        if ($updated) {
            Session::flash('msg', 'Paper updated successfully');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleted = ResearchPaper::find($id)->delete();
        if ($deleted) {
            Session::flash('msg', 'Paper deleted successfully');
            return redirect()->back();
        }
    }
}
