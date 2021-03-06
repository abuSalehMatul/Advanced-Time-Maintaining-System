<?php

namespace App\Http\Controllers;

use App\Task_log;
use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect;

class TaskLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.tasklog')->with('user',$user)->with('role',$role);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task_log  $task_log
     * @return \Illuminate\Http\Response
     */
    public function show(Task_log $task_log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task_log  $task_log
     * @return \Illuminate\Http\Response
     */
    public function edit(Task_log $task_log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task_log  $task_log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task_log $task_log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task_log  $task_log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task_log $task_log)
    {
        //
    }
}
