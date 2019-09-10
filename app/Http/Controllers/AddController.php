<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Task;
use Auth;

class AddController extends Controller
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
            return view('add.index');
        }

        public function create()
        {
            dd("create");
            return view('add.index');
        }

        public function store(Request $request)
        {
            $task = new Task;
            $task->user_id = Auth::user()->id;
            $task->title = $request->input('title');
            $task->content = $request->input('content');
            $task->week = date("W");
            $task->year = date("Y");
            $task->save();

            return Redirect::to('/home');
        }

        public function show($id)
        {
            return view('add.index');
        }

        public function edit($id)
        {
            return view('add.index');
        }

        public function update(Request $request, $id)
        {
            return view('add.index');
        }

        public function destroy(Request $request, $id)
        {
            return Redirect::to('/home');
        }
}
