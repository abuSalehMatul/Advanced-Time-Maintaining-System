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
.des{
    padding: 11px;
    margin: 39px 89px 20px 92px;
    border: 1px double;
    box-shadow: yellowgreen;
    box-shadow: 1px 1px turquoise;
    color: black;
    font-size: 12px;
    font-weight: 500;
}
.name {
    margin: 17px 179px 25px 10px;
    color: brown;
    font-size: 13px;
}
.mid-writting {
    font-size: 10px;
    margin: 17px 5px 10px 130px;
}
.tag {
    display: block;
    font-size: 10px;
    margin: 17px 9px 14px 112px;
}
@media screen and (max-width: 580px) {
  .des {
   margin: 5px 0pc 7px 35px;
  }
  .name {
    margin: 0;
    color: brown;
    font-size: 11px;
   }
   .b{
       display: none;
   }
   .mid-writting {
    font-size: 10px;
    margin: 17px 5px 10px 10px;
}
.tag{
    display: block;
    font-size: 10px;
    margin: 11px 1px 12px 127px;
}
}
</style>
@php
    $project=App\Task::find($id);
    // print_r($project);
    // exit();
    $cat=App\Category::where('id',$project->category_id)->first();
    if($project->type_id==0){
        $accessibility='Private';
    }else{
        $accessibility='Public';
    }
    $status=['Deactive','Active','Finished'];
    $record=App\Record::where('task_id',$project->id)->first();
    
    $admin=App\User::find($record->admin);
    $manager=App\User::find($record->manager_id);
    
@endphp
    <div class="az-content-label mg-b-5">
        <div class="off-div">
            <div class="card border border-danger">
                <div class="card-header">
                    <ul style="list-style:none">
                        <li style="border:1px dotted #fce72a;padding:4px;display:inline;margin-right:20px">{{$project->name}}</li>
                        <li style="display:inline;padding:2px;color:wheat;float:right">{{$accessibility}}</li>
                        <li style="margin-top:15px;padding:2px">{{$cat->name}}</li>
                        <li style="display:inline;padding:2px;float:right"><span class="badge badge-warning">{{$status[$project->status]}}</span></li>
                    </ul>
                    @if($project->description)
                    <div class="card-body des">
                        {{$project->description}}
                    </div>
                    @endif
                    <table class="row">
                        <tr >
                            @if($admin)
                            <td style="padding:10px" class="float-left"> Admin:<i class="name">{{$admin->name}}</i><br>
                                    <small> {{$admin->email}}</small>
                            </td>
                            @endif
                            @if($manager)
                            <td style="padding:10px">Manager: <i class="name">{{$manager->name}}</i><br>
                                    <small> {{$manager->email}}</small>
                            </td>
                            @endif
                            <td style="padding:10px"><small class="b"> of People 10</small></td>
                        </tr>
                    </table>
                    <div>
                        <table>
                            <tr>
                                <h6 class="mid-writting">Activated at: {{$project->created_at}}</h6>
                            </tr>
                            <hr>
                            <tr>
                                <h6 class="mid-writting">Last Activity</h6>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <small class="tag "><span class="badge badge-success">Your Tag: </span></small>
                        @if($record->tag)
                        <small class="tag"><span class="badge badge-danger">Project creator tag: {{$record->tag}}</span></small>
                        @endif
                    </div>
                    @if($role->role==1)
                    <div>
                        <a href="{{url('apply_for_project/'.$project->id)}}" class="btn btn-success" value="Apply">Apply for this project </a>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection