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
.team{
    max-height: 400px;
    overflow-y: scroll;
    font-size: 13px;
}
</style>
@php
    
@endphp
    <div class="az-content-label mg-b-5">
        <div class="off-div">
            @if($role->role==1)
            @php
                $team=App\Team::where('user_id',$user->id)->get();
            @endphp
                @if($team)
                    @foreach($team as $team)
                    @php
                        $record=App\Record::find($team->record_id);
                        $project=App\Task::find($record->task_id);
                    @endphp
                        <div class="col-md-5 col-sm-5 card">
                            <div class="card-title">
                                <p><b><u>Team for Project: </u></b>{{$project->name}}</p>
                                <h6>Record ID: <i>{{$record->id}}</i></h6>
                                <hr>
                            </div>
                            <div class="card-body team">
                                <h6 class="text-center"><u>Members</u></h6>
                                @php
                                    $members=App\Team::where('record_id',$record->id)->get();
                                @endphp
                                @if($members)
                                    @foreach($members as $member)
                                    @php
                                        $u=App\User::find($member->user_id);
                                    @endphp
                                        <table class=" table table-striped">
                                            <tr class="row">
                                                <td>{{$u->name}}</td>
                                            </tr>
                                        </table>
                                    @endforeach    
                                @endif
                            </div>
                        </div>
                    @endforeach    
               @endif
            @endif
        </div>
    </div>
@endsection    