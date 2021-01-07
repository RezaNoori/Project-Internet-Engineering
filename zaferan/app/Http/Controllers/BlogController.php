<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Str;
use Image;
use DB;

function make_slug($string) {
	return preg_replace('/\s+/u', '-', trim($string));
}
class BlogController extends Controller
{
    public function showposts(){
        $allposts = Blog::all();
        return view ('admin.blogposts')-> with("post",$allposts);
    }
    public function showformpost(){
        return view ('admin.blogform');
    }
    public function addblogpost(Request $request){
        $this->validate($request, [
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $originalImage= $request->file('image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(217,163);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());
        $slugUrl  = make_slug( $request->input('title') );
        $blog = New Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->image = time().$originalImage->getClientOriginalName();
        $blog->slug = $slugUrl;
        $blog->author = Auth::user()->name;
        try {
            $blog->save();
            return redirect()->back()->with('success', 'نوشته شما با موفقیت ایجاد شد');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', 'متاسفانه خطایی رخ داده است');
        }
    }
    public function viewblog(){
        $allposts = DB::table('blogs')->simplePaginate(7);
        return view ('client.blog')-> with("post",$allposts);
    }
    public function viewpostblog($slug){
        try {
            $post = Blog::where('slug', $slug)->firstOrFail();
            return view('client.single')->with(['post' => $post]);
        }
        catch(\Exception $e){
            $message = 'متاسفانه خطایی رخ داده است';
            return view('client.home',compact('message'));
        }
    }
}
