<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Client;
use App\Models\BlogPost;
use App\Models\Category;
// WIP kstigs XXX
class BlogController extends Controller
{
	public function Create(Request $request) {

		if(!$_POST) {
			return view("admin.blog.new");
		} else {
			$this->validate($request, [
				'title' => 'required',
				'abstract' => 'required',
				'body' => 'required',
				'url' => 'required',
			]);

			$blog = new BlogPost;
			$blog->title = $request->input("title");
			$blog->user_id = $request->input("user_id");
			$blog->abstract = $request->input("abstract");
			$blog->body = $request->input("body");
			$blog->url = $request->input("url");
			$blog->save();
		}
	}

	public function Edit($id) {
		$post = BlogPost::where("id", "=", $id)->first();
		if(!isset($post->url)) return response()->json(['error' => 'Blog post not found.']);
		return view("admin.blog.edit", ["post"=>$post]);
	}

	public function Update(Request $request) {
		$this->validate($request, [
			'title' => 'required',
			'abstract' => 'required',
			'body' => 'required',
			'url' => 'required',
		]);

		$post = BlogPost::find($request->input("blogpost_id"));
		if(!isset($post->url)) return response()->json(['error' => 'Blog post not found.']);

		$post->title = $request->input("title");
		$post->user_id = \Auth::user()->id;
		$post->abstract = $request->input("abstract");
		$post->body = $request->input("body");
		$post->url = $request->input("url");
		$post->save();
	}

    public function viewList(Request $request) {
    	$posts = BlogPost::where("id", ">=", 1)->paginate(15);
		return view("admin.blog.list", ["posts"=>$posts]);
	}
} 
