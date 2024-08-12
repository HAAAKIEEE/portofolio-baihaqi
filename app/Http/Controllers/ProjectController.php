<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index(){
        return view('projects', [
            "title" => "All Posts",
            // "posts" =>  Post::all()
             // ini eagel loading untuk efisiansei dan mengatasi n+1 problem
            "projects" =>  Project::latest()->get()
            // "posts" =>  Post::latest()->get()
        
        ]);
    }
    public function dashboard(){
        return view('dashboard', [
            "title" => "Dashboard",
            // "posts" =>  Post::all()
             // ini eagel loading untuk efisiansei dan mengatasi n+1 problem
            "projects" =>  Project::latest()->get()
            // "posts" =>  Post::latest()->get()
        
        ]);
    }
    // public function addproject(){
    //     return view('create-project', [
    //         "title" => "Create P",
    //         // "posts" =>  Post::all()
    //          // ini eagel loading untuk efisiansei dan mengatasi n+1 problem
    //         "projects" =>  Project::latest()->get()
    //         // "posts" =>  Post::latest()->get()
        
    //     ]);
    // }

    public function create()
    {
        return view('create-project', ['title' => 'Create Data']);
    }

    public function store(Request $request)
    {
// db transacsion buat ngatasin ada kesalahan
// atau buat try cach
      $data=$request->validate([
            'judul' => 'required|string|max:255',
            'category' => 'required|string',
            'link' => 'required|string',
            'body' => 'required|string',
        ]);

       
         
    // Buat slug dari judul
         $data['slug'] = Str::slug($data['judul']);
        $data['author'] = auth()->user()->name; // Set author ID to 1
        Project::create($data);

        return redirect()->route('dashboard')->with('success', 'Data created successfully!');

     }


     public function edit(Project $project){
          return view('edit-project',
           ['title' => 'Edit Data',
           "projects" => $project
        ]);
   
       }

       public function update(Request $request, Project $project)
       {
           $request->validate([
               'judul' => 'required|string|max:255',
               'category' => 'required|string',
               'link' => 'required|string',
               'body' => 'required|string',
           ]);
       
           // Update project with validated data
           $data = $request->all();
           $data['slug'] = Str::slug($data['judul']);
           $data['author'] = auth()->user()->name;
       
           $project->update($data);
       
           return redirect()->route('dashboard')->with('success', 'Data updated successfully!');
       }

 public function destroy(Project $project){

    Project::destroy($project->id);

    return redirect()->route('dashboard')->with('success', 'Data Deleted successfully!');
}

public function search(Request $request)
{
    $query = $request->input('query');

    // Retrieve projects based on search query
    $projects = Project::where('judul', 'like', "%{$query}%")
                        ->orWhere('category', 'like', "%{$query}%")
                        ->orWhere('body', 'like', "%{$query}%")
                        ->orWhere('link', 'like', "%{$query}%")
                        ->latest()
                        ->get();

    return view('dashboard', [
        "title" => "All Posts",
        "projects" => $projects
    ]);
}

}
