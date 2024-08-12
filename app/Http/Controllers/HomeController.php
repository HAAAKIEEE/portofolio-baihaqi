<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::latest()->take(4)->get(); // Limit to 4 projects

        return view('home', [
            "title" => "Home",
            // "posts" =>  Post::all()
             // ini eagel loading untuk efisiansei dan mengatasi n+1 problem
            "projects" =>   $projects
            // "posts" =>  Post::latest()->get()
        
        ]);
    }
}
