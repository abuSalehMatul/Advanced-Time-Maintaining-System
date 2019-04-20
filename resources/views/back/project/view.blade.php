@extends('back.master')
@section('content')
<style>
.off-div{
    margin-left:4px;
    padding:5px;
}
.description{
   
    box-shadow: 2px 3px whitesmoke;
    height: 100%;
    padding: 4px;
    overflow: hidden;
}
.td{
    width: 10px;
}
input{
    display: block;
    padding: 6px;
    color: blue;
    font-weight: 600;
    font-size: 16px;
}
</style>

    <div class="az-content-label mg-b-5">
        <div class="off-div">
           @if($role->role==1)
            <div id="user">
                 @if($record)
                    @foreach($record as $record)
                      @php
                          $pro=App\Task::where('id',$record->task_id)->get();
                        //   print($pro);
                        //   exit();
                      @endphp
                      @foreach($pro as $proj)
                        <div class="card record">
                            <table class="table table-borderless table-responsive">
                                <tr class="">
                                    <td colspan="">
                                        <h4 style="border-bottom:1px dotted gold">
                                          <h6>Name of the project</h6>  <strong>{{$proj->name}}</strong>
                                        </h4>
                                    </td>
                                    
                                    
                                    @php
                                        $manager=App\User::where('id',$record->manager_id)->first();
                                        $admin=App\User::where('id',$record->admin)->first();
                                    @endphp
                                    <td>
                                        @if($manager)
                                        <h5>
                                             {{$manager->name}}

                                            <span class="badge badge-success">Manager</span>
                                           
                                        </h5>
                                        <h6>
                                            {{$manager->email}}
                                            @if(Auth::user()==$manager)
                                             <small class="bg-info">(I am)</small>
                                            @endif
                                        </h6>
                                       @endif
                                    </td>
                                    <td class="td"></td>
                                    <td class="td"></td>
                                  
                                    <td >
                                        @if($admin)
                                        <h5>
                                            {{$admin->name}}
                                             <span class="badge badge-success">Admin</span>
                                        </h5>
                                        <h6>
                                            {{$admin->email}}
                                             @if(Auth::user()==$admin)
                                             <small class="bg-info">(I am)</small>
                                            @endif
                                        </h6>
                                        <small class="bg-info text-danger">This is your personal projects</small>
                                        @endif
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="description">
                                            @if($proj->description)
                                            <h6 class="text-center" style="border-bottom:1px dotted blue">Description</h6>
                                              {{$proj->description}}
                                            @endif  
                                        </div>
                                      
                                    </td>
                                    <td>
                                        <div>
                                           
                                            <h6><button disabled="active">See today's log</button></h6>
                                            <a class="btn-info" href="{{url('project_details/'.$proj->id)}}">See details</a>
                                        </div>
                                       
                                    </td>
                                    <td colspan="1">
                                        
                                           <input type="text" placeholder="Enter a tag for this project" >
                                           <input type="submit">
                                       
                                    </td>
                                    <td colspan="2">
                                        <div>
                                            Notes
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td colspan="2">
                                        <a href="" class="btn btn-info">View total log</a>
                                      
                                    </td>
                                  
                                    <td colspan="3">
                                        <h6 class="float-right">Created at modified {{$proj->created_at}} (GMT: 0) </h6>
                                       <h6 class="float-right">Last modified at {{$proj->updated_at}} (GMT: 0 )</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                       @endforeach 
                    @endforeach
                @endif
            </div>
            @endif
            @if($role->role==2)
            <div id="manager">
                 @if($record)
                    @foreach($record as $record)
                      @php
                          $pro=App\Task::where('id',$record->task_id)->get();
                        //   print($pro);
                        //   exit();
                      @endphp
                      @foreach($pro as $proj)
                        <div class="card record">
                            <table class="table table-borderless table-responsive">
                                <tr class="">
                                    <td colspan="">
                                        <h4 style="border-bottom:1px dotted gold">
                                          <h6>Name of the project</h6>  <strong>{{$proj->name}}</strong>
                                        </h4>
                                    </td>
                                    
                                    
                                    @php
                                        $manager=App\User::where('id',$record->manager_id)->first();
                                        $admin=App\User::where('id',$record->admin)->first();
                                    @endphp
                                    @if($manager)
                                    <td>
                                        <h5>
                                             {{$manager->name}}

                                            <span class="badge badge-success">Manager</span>
                                           
                                        </h5>
                                        <h6>
                                            {{$manager->email}}
                                            @if(Auth::user()==$manager)
                                             <small class="bg-info">(I am)</small>
                                            @endif
                                        </h6>
                                       
                                    </td>
                                    @endif
                                    <td class="td"></td>
                                    <td class="td"></td>
                                     @if($admin)
                                    <td >
                                        <h5>
                                            {{$admin->name}}
                                             <span class="badge badge-success">Admin</span>
                                        </h5>
                                        <h6>
                                            {{$admin->email}}
                                             @if(Auth::user()==$admin)
                                             <small class="bg-info">(I am)</small>
                                            @endif
                                        </h6>
                                        
                                    </td>
                                    @endif
                                   
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="description">
                                            @if($proj->description)
                                            <h6 class="text-center" style="border-bottom:1px dotted blue">Description</h6>
                                              {{$proj->description}}
                                            @endif  
                                        </div>
                                      
                                    </td>
                                    <td>
                                        <div>
                                            <h6>numerof association: 30</h6>
                                            <h6><button disabled="active">See today's log</button></h6>
                                            <h6><a href="{{url('project_details/'.$proj->id)}}" class="btn-info">See details</a></h6>
                                        </div>
                                       
                                    </td>
                                    <td colspan="1">
                                        
                                           <input type="text" placeholder="Enter a tag for this project">
                                           <input type="submit">
                                       
                                    </td>
                                    <td colspan="2">
                                        <div>
                                            Notes
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td colspan="2">
                                        <a href="" class="btn btn-info">View total log</a>
                                        <a href="btn btn-info" class="btn btn-info">View request on this project</a>
                                    </td>
                                  
                                    <td colspan="3">
                                        <h6 class="float-right">Created at modified {{$proj->created_at}} (GMT: 0) </h6>
                                       <h6 class="float-right">Last modified at {{$proj->updated_at}} (GMT: 0 )</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                       @endforeach 
                    @endforeach
                @endif
            </div>
            @endif
            @if($role->role==3)
            <div id="admin">
                @if($record)
                    @foreach($record as $record)
                      @php
                          $pro=App\Task::where('id',$record->task_id)->get();
                        //   print($pro);
                        //   exit();
                      @endphp
                      @foreach($pro as $proj)
                        <div class="card record">
                            <table class="table table-borderless table-responsive">
                                <tr class="">
                                    <td colspan="">
                                        <h4 style="border:1px dotted gold">
                                            {{$proj->name}}
                                        </h4>
                                        </td>
                                    
                                    
                                    @php
                                        $manager=App\User::where('id',$record->manager_id)->first();
                                        $admin=App\User::where('id',$record->admin)->first();
                                    @endphp
                                    @if($manager)
                                    <td>
                                        <h5>
                                             {{$manager->name}}

                                            <span class="badge badge-success">Manager</span>
                                        </h5>
                                        <h6>
                                            {{$manager->email}}
                                        </h6>
                                       
                                    </td>
                                    @endif
                                    <td class="td"></td>
                                    @if($admin)
                                    <td >
                                        <h5>
                                            {{$admin->name}}
                                             <span class="badge badge-success">Admin</span>
                                        </h5>
                                        <h6>

                                            {{$admin->email}}
                                        </h6>
                                        
                                    </td>
                                    @endif
                                   
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="description">
                                            @if($proj-description)
                                            <h6 class="text-center" style="border:1px dotted blue">Description</h6>
                                              {{$proj->description}}
                                            @endif  
                                        </div>
                                      
                                    </td>
                                    <td>
                                        <div>
                                            <h6>numerof association</h6>
                                            <h6><button disabled="active">Mark as complete</button></h6>
                                            <h6><a  href="{{url('project_details/'.$proj->id)}}" class="btn-info">See details</a></h6>
                                        </div>
                                        numerof association
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Add note">
                                        <button disabled="">Submit</button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                     <td>
                                        <button disabled="" class="btn btn-info">Edit</button>
                                        <button disabled="" class="btn btn-danger float-right">Delete</button>
                                    </td>
                                    <td>
                                        <h6 class="float-right">last modified 1/2/2010</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                       @endforeach 
                    @endforeach
                @endif
            </div>
            @endif
        </div>
    </div>

@endsection