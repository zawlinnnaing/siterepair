<?php

namespace App\Http\Controllers\Admin\Api;

use App\General\Common;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use URL;

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
        $this->validate($request, [
            'image' => 'required'
        ]);
        $image = $this->decodeImage($request->input('image'));
        $imageName = rand(0, 100000);
        $path = $this->uploadImage($image, $directoryName, $imageName);
        if ($path) {
            $imgUrl = URL::to('/');
            $imgUrl = $imgUrl . '/uploads/' . $directoryName . '/' . $path;
            return response()->json(['imgUrl' => $imgUrl], 200);
        }

    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchPost()
    {
        $keyword = Input::get('query');

        $result = Post::with('category')->where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('content', 'LIKE', '%' . $keyword . '%')->get();

        if ($result->count() > 0) {
            return response()->json($result, 200);
        } else {
            return response()->json('no search found');
        }

    }
}
