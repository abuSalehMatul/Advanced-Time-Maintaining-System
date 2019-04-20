<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
use Validator;
use App\Event;
use Calendar;
class EventController extends Controller
{
    public function index(){
        $user = Session::get('user');
        $role = Session::get('role');
        $events=Event::all();
        $event_list=[];
        foreach($events as $key => $event){
            $event_list[] = Calendar::event(
               $event->event_name, 
                true,
                new \DateTime($event->start_date), 
                new \DateTime($event->end_date. ' +1 day')
               
            );
        }
        $calendar= Calendar::addEvents($event_list);
       // return $calendar;
        return view('events.event',compact('calendar'))->with('role',$role)->with('user',$user);
    }
    public function addEventForm(){
        $user = Session::get('user');
        $role = Session::get('role');
        return view('events.addEvent')->with('role', $role)->with('user', $user);
    }
    public function addEvent(Request $request){
        $validator= Validator::make($request->all(),[
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        if($validator->fails()){
            Session::flash('Warning','Please Enter valid input');
            return Redirect::to('events')->withInput()->withErrors($validator);
        }else{
            $event=new Event;
            $event->event_name=$request['event_name'];
            $event->start_date=$request['start_date'];
            $event->end_date=$request['end_date'];
            $event->user_id=Auth::user()->id;
            if($request->description){
                $event->description = $request->description;
            }
           
            $event->save();
            Session::flash('message','Event has benn add successfully');
            return Redirect::to('events');
        }
    }
    public function eventDetails(){
        $user = Session::get('user');
        $role = Session::get('role');
        $event=Event::where('user_id',$user->id)->get();
        return view('events.eventDetails')->with('role', $role)->with('user', $user)->with('event',$event);
    }
    public function delete($id){
        $user = Session::get('user');
        $role = Session::get('role');
        $e=Event::find($id);
        if($e){
            Event::destroy($id);
        }
       
        $event = Event::where('user_id', $user->id)->get();
        return view('events.eventDetails')->with('role', $role)->with('user', $user)->with('event', $event);
    }
}
