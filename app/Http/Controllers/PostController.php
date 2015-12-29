<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        $posts = Post::paginate(5);

        // Implement logic to shorten posts for index
        return view('frontend.blog.index', ['posts' => $posts]);
    }

    public function getPostIndex()
    {
        $posts = Post::paginate(5);
        return view('admin.blog.index', ['posts' => $posts]);
    }

    public function getSinglePost($post_id, $end = 'frontend')
    {
        Session::put('isSinglePost', true);
        $post = $this->retrievePostOrFail($post_id);
        return view($end . '.blog.single_post', ['post' => $post]);
    }

    public function getCreatePost()
    {
        $categories = Category::all();
        return view('admin.blog.create_post', ['categories' => $categories]);
    }

    public function getUpdatePost($post_id)
    {
        $post = $this->retrievePostOrFail($post_id);
        $categories = Category::all();
        $post_categories = $post->categories;
        $post_categories_ids = array();
        $i = 0;
        foreach ($post_categories as $post_category) {
            $post_categories_ids[$i] = $post_category->id;
            $i++;
        }
        return view('admin.blog.edit_post', ['post' => $post, 'categories' => $categories, 'post_categories' => $post_categories, 'post_categories_ids' => $post_categories_ids]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:120|unique:posts',
            'author' => 'required|max:80',
            'body' => 'required'
        ]);

        $post = new Post();
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->save();
        if (strlen($request['categories']) > 0) {
            $categoryIDs = $this->parseCategories($request['categories']);
            foreach ($categoryIDs as $categoryID) {
                $post->categories()->attach($categoryID);
            }
        }

        return redirect()->route('admin.index')->with(['success' => 'Post successfully created!']);
    }

    public function postUpdatePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:120',
            'author' => 'required|max:80',
            'body' => 'required'
        ]);
        $post = Post::find($request['post_id']);
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->update();
        $post->categories()->detach();
        if (strlen($request['categories']) > 0) {
            $categoryIDs = $this->parseCategories($request['categories']);
            foreach ($categoryIDs as $categoryID) {
                $post->categories()->attach($categoryID);
            }
        }
        return redirect()->route('admin.index')->with(['success' => 'Post successfully updated!']);
    }

    public function getDeletePost($post_id)
    {
        $post = $this->retrievePostOrFail($post_id);
        $post->delete();
        if (Session::has('isSinglePost')) {
            return redirect()->route('admin.index')->with(['success' => 'Post deleted!']);
        }
        return redirect()->back()->with(['success' => 'Post deleted!']);
    }

    private function retrievePostOrFail($post_id)
    {
        $post = Post::find($post_id);
        if (!$post) {
            return redirect()->route('admin.index')->with(['fail' => 'Post not found']);
        }
        return $post;
    }

    private function parseCategories($categories_string)
    {
        return explode(',',$categories_string);
    }
}