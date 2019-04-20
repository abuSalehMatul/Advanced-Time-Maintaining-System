<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
use App\User;
use App\Team;
use App\Role;
use App\User_Image;
use App\Category;
use App\Proposal;
use App\Task_log;
use App\Record;

class ProposalController extends Controller
{
    public function proposal(Request $request,$id)
    {
        $this->validate($request,[
            'how_many_days'=>'required'
        ]);
        $proposal=new Proposal;
        $proposal->user_id=Auth::user()->id;
        $proposal->record_id=$id;
        $proposal->how_many_days=$request->how_many_days;
        if($request->description){
            $proposal->description=$request->description;
        }
        if($request->when_to_when){
            $proposal->when_to_when=$request->when_to_when;
        }
        $proposal->save();
        $user = Session::get('user');
        $role = Session::get('role');
        Session::flash('message','Your proposal has been sent');
        $team= new Team;
        $team->record_id=$id;
        $team->user_id=$user->id;
        $team->save();
        $task_log=new Task_log;
        $manager_id=Record::where('id',$id)->first();
        $manager_id=$manager_id->manager_id;
        $task_log->record_id=$id;
        $task_log->comment='Proposal sent';
        $task_log->user_id=$manager_id;
        $task_log->save();
        return Redirect::to('/projects');

    }
    public function pro_request(){
        $role = Session::get('role');
        $user = Session::get('user');
        return view('back.pro_request')->with('user',$user)->with('role',$role);
    }
}
