<?php

namespace App\Http\Controllers\Admin\Api;

use App\General\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostApiController extends Controller
{
    //

    use Common;

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postImage(Request $request)
    {
        $directoryName = 'posts';
        $request->validate([
            'image' => 'required'
        ]);
        return response()->json(['imgUrl' => $request->file('image')],200);
        $image = $this->decodeImage($request->input('image'));
        $imageName = rand(0, 100000);
        $path = $this->uploadImage($image, $directoryName, $imageName);
        if ($path) {
            $imgUrl = URL::to('/');
            $imgUrl = $imgUrl . '/storage/' . $directoryName . '/' . $path;
            return response()->json(['imgUrl' => $imgUrl], 200);
        }
    }
}
