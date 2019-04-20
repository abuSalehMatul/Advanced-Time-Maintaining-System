<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
use App\User;
use App\Role;
use App\User_Image;
use App\Category;
use App\Record;

class TaskController extends Controller
{
    public function details($id){
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.project.details')->with('user', $user)->with('role', $role)->with('id',$id);
    }
    public function index()
    {
        //
    }

    public function search(Request $request){
        $user = Auth::user();
        $data=$request->data;
        if($data== ""){
            return "";
        }
        $task=Task::where('id', 'LIKE', '%' . $data . "%")->get();
        
        if(isset($task)){
         
            $output="";
            foreach($task as $task){
                // return $task;
                $p = array("Private", "Public");
                $cat= Category::find($task->category_id);
                $url=url( '/project_details/'.$task->id);
                    $output .= '<a href="'.$url.'" class="card" style="opacity:4;">' .
                                    '<table class="table card" style="opacity:5">' .
                                        '<tr class="row">' .
                                            '<td style="margin-right:4px;"><i><u>Project Name: </u></i>'. $task->name .
                                                
                                            '<td><i>Project ID: </i>'. $task->id .
                                            
                                            '<td><i>Project Type: </i>'.'<span class="badge badge-danger">'. $p[$task->type_id] .'</span>'.
                                                
                                            '<td><i>Project Category: </i>'. $cat->name .
                                        '</tr>' .
                                    '</table>' .

                                 '</a>';
               
            }
            $task = Task::where('name', 'LIKE', '%' . $data . "%")->get();
           
            if (isset($task)) {
         
                foreach ($task as $task) {
                   
                    $p = array("Private", "Public");
                    $cat = Category::find($task->category_id);
                    $url = url('/project_details/' . $task->id);
                    $output .= '<a href="'.$url.'" class="card" style="opacity:4;">' .
                                    '<table class="table card" style="opacity:5">' .
                                        '<tr class="row">' .
                                            '<td style="margin-right:4px;"><i><u>Project Name: </u></i>'. $task->name .
                                                
                                            '<td><i>Project ID: </i>'. $task->id .
                                            
                                            '<td><i>Project Type: </i>'.'<span class="badge badge-danger">'. $p[$task->type_id] .'</span>'.
                                                
                                            '<td><i>Project Category: </i>'. $cat->name .
                                        '</tr>' .
                                    '</table>' .

                                 '</a>';
                  
                }
            }
            return $output; 

        }
  
    }
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

    public function apply_for_project($id){
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.project.apply')->with('role', $role)->with('user', $user)->with('id',$id);
    }
    public function show(Task $task)
    {
       $user=Session::get('user');
       $role=Session::get('role');
       $task=Task::where('creator',$user->id)->get();
       if($role->role==1){
            $record = Record::where('manager_id', $user->id)->where('admin',$user->id)->get();
            return view('back.project.view')->with('task',$task)->with('record',$record)->with('user',$user)->with('role',$role);
       }elseif($role->role==2){
            $record=Record::where('manager_id',$user->id)->get();
            return view('back.project.view')->with('task',$task)->with('record',$record)->with('role', $role)->with('user', $user);
       }elseif($role->role==3){
           $record=Record::where('admin',$user->id)->get();
            return view('back.project.view')->with('task', $task)->with('record', $record)->with('role',$role)->with('user',$user);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
