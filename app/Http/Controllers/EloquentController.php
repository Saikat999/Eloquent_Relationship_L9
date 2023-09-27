<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Mechanic;

class EloquentController extends Controller
{

//For One to One relatioship 
    public function onetoone(){

        $phone =User::all();
        $phone = User::find(2)->phone;
     //    return $phone;
     
        $user =Phone::find(2);
        $user = Phone::find(2)->user;
     //    return $user;
     
        $users=User::all();
     //    $phones=Phone::all();
     //    return $users;
     
         return view('onetoone',compact('users'));
    }


//For One to Many relatioship
    public function onetomany(){

        $comments = Post::find(1);
        $comments = Post::find(2)->comments;
        // return $comments;

        $post = Comment::find(1);
        $post = Comment::find(5)->post;
        // return $post;

        $posts = Post::with('comments')->get();
        $comments = Comment::all();
        // return $posts;

        return view('onetomany',compact('posts','comments'));

    }


//For Many to Many relationship
    public function manytomany(){

        $posts = Post::with('categories')->get();
        $categories = Category::with('posts')->get();
        // return $posts;
        
        return view('manytomany',compact('posts','categories'));
    }


// For Has one Through Relationship

    public function hasonethrough(){
        
        $mechanics = Mechanic::with('carOwner')->get();
        // return $mechanics;

        return view('hasonethrough',compact('mechanics'));
    }
}
