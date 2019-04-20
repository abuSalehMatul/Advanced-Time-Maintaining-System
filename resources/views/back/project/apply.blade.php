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
@php
    $project=App\Task::find($id);
    $record=App\Record::where('task_id',$project->id)->first();
    $p = array("Private", "Public");
@endphp
    <div class="az-content-label mg-b-5">
        <div class="off-div">
            <div class="card">
                <li class="card-header text-success text-center">Your are Applying For</li>
                <div class="col-md-7 float-left">
                     <h6><i><u>Project Name: </u></i>{{$project->name}}</h6>
                     <h6><i>Project Id: </i>{{$project->id}}</h6>
                     @if($record->admin!=null)
                         @php
                            $name=App\User::find($record->admin);
                        @endphp
                        <h6>Admin Of this Project: <i><span class="badge badge-warning">{{$name->name}} </span>{{$name->email}}</i></h6>
                     @endif
                     @if($record->manager_id!=null)
                        @php
                            $name=App\User::find($record->manager_id);
                        @endphp
                         <h6>Manager Of this Project: <i><span class="badge badge-info">{{$name->name}}</span>{{$name->email}}</i></h6>
                     @endif
                </div>
                <div class="col-md-3 float-right">
                    @if($project->type_id!=null)
                      <span class="badge badge-secondary"><i>{{$p[$project->type_id]}}</i></span>
                    @endif 
                    @if($record->tag!=null)
                       <h6>Creator Tag: <i>{{$record->tag}}</i></h6>
                    @endif
                </div>

            </div>
            <form action="{{url('/send_proposal/'.$record->id )}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">How many hours I supposed to work for this project </label>
                    <input type="Number" class="form-control" name="how_many_days" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="i.e 4">
                    <small id="emailHelp" class="form-text ">Hours in a normal day (Give the number only).</small>
                </div>
                <div class="form-group">
                    <label for="exampleInput">When to When </label>
                    <input type="text" class="form-control" name="when_to_when" id="exampleInput"  placeholder="i.e 4pm to 7pm">
                    <small id="emailHelp" class="form-text ">From which time to which time(optional).</small>
                </div>
               
                <div class="form-group">
                    <label for="example">Your tag for this project </label>
                    <input type="Text" name="tag" class="form-control" id="example" placeholder="Project K">
                     <small id="emailHelp" class="form-text ">Optional.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description of your apply </label>
                    <textarea rows="4" cols="20" name="description"></textarea>
                     <small id="emailHelp" class="form-text ">Optional.</small>
                </div>

                <input type="submit" class="btn btn-primary" value="Apply">
            </form>
        </div>
    </div>
@endsection