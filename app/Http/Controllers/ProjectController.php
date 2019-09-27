<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;
use Auth;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
            $projects = Project::where("user_id", Auth::user()->id);
            return view('projects.index')->with("projects", $projects);
        }

        public function create()
        {
            dd("create");
            return view('projects.index');
        }

        public function store(Request $request)
        {
            $project = new Project;
            $project->user_id = Auth::user()->id;
            $project->title = $request->input('title');
            $project->save();

            return Redirect::to('/projects');
        }

        public function show($id)
        {
            return view('projects.index');
        }

        public function edit($id)
        {
            return view('projects.index');
        }

        public function update(Request $request, $id)
        {
            return view('projects.index');
        }

        public function destroy(Request $request, $id)
        {
            return Redirect::to('/projects');
        }
}
