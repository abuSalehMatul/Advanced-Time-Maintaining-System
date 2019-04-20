<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
use App\User;
use App\Task;

use App\Role;
use App\User_Image;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        $role=Session::get('role');
        $user=Session::get('user');
        if($role->role==1){
            $this->validate($request, [
                'record_name' => 'required',
                
                'access' => 'required',
                'description' => 'required',
                'active_when' => 'required',
                'category' => 'required',
            ]);
            $task = new Task;
            $task->creator = $user->id;
            $task->description = $request->description;
            $task->name = $request->record_name;
            $task->status = $request->active_when;
            $task->category_id = $request->category;
            $task->type_id = $request->access;
            $task->save();
            $record = new Record;
            $record->task_id = $task->id;
            $record->manager_id = $task->creator;
            $record->admin = $task->creator;
            $record->accessibility = $request->access;
            $record->status = $request->active_when;
            if ($request->tag) {
                $record->tag = $request->tag;
            }

            $record->save();
            return Redirect::to('/dashboard');

        }
        if($role->role==2){
            $this->validate($request, [
                'record_name' => 'required',
                'admin_email' => 'required|email',              
               
                'access' => 'required',
                'description' => 'required',
                'active_when' => 'required',
                'category' => 'required',
            ]);
            $task=new Task;
            $task->creator=$user->id;
            $task->description=$request->description;
            $task->name=$request->record_name;
            $task->status=$request->active_when;
            $task->category_id=$request->category;
            $task->type_id=$request->access;
            $task->save();
            $record = new Record;
            $record->task_id=$task->id;
            $record->manager_id=$task->creator;
            $admin=User::where('email',$request->admin_email)->get();
            $id;
            foreach ($admin as $user) {
                $role = Role::where('user_id', $user->id)->first();
                if ($role->role == 3) {
                    $id = $user->id;
                    break;
                }
            }
            $admin=User::find($id);
            $record->admin = $admin->id;
            $record->accessibility=$request->access;
            $record->status=$request->active_when;
            if($request->tag){
                $record->tag = $request->tag;
            }
           
            $record->save();
            return Redirect::to( '/dashboard');
        }
        if($role->role==3){
            $this->validate($request, [
                'record_name' => 'required',                
                'manager_email' => 'required|email',
                
                'access' => 'required',
                'description' => 'required',
                'active_when' => 'required',
                'category' => 'required',
            ]);
            $task = new Task;
            $task->creator = $user->id;
            $task->description = $request->description;
            $task->name = $request->record_name;
            $task->status = $request->active_when;
            $task->category_id = $request->category;
            $task->type_id = $request->access;
            $task->save();
            $record = new Record;
            $record->task_id = $task->id;
            $record->admin = $task->creator;
            $manager = User::where('email', $request->manager_email)->get();
            $id;
            foreach ($manager as $user) {
                $role = Role::where('user_id', $user->id)->first();
                if ($role->role == 3) {
                    $id = $user->id;
                    break;
                }
            }
            $manager = User::find($id);
            $record->manager_id = $manager->id;
            $record->accessibility = $request->access;
            $record->status = $request->active_when;
            if ($request->tag) {
                $record->tag = $request->tag;
            }

            $record->save();
            return Redirect::to('/dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }
    public function form(){
        $user = Session::get('user');
        $role = Session::get('role');
        return view('back.record.form')->with('user', $user)->with('role', $role);
    }
    public function destroy(Record $record)
    {
        //
    }
}
