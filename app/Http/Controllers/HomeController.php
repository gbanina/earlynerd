<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $tasks = Task::where("user_id", Auth::user()->id)->get();
        $weeks = array();


        if($tasks->first() != null){
            $first = ($tasks->first()->week);
            $today = date("W");

            for($i=$first;$i<=$today;$i++){
                $weeks[$i] = null;
            }

            foreach($tasks as $task){
                $weeks[$task->week][] = $task;
            }
        }


        return view('home')->with('weeks', $weeks);
    }
}
