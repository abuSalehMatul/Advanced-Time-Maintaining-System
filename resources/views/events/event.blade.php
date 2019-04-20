@extends('back.master')
@section('content')
<style>
.off-div{
    margin-left:4px;
    padding:5px;
}
.description{
    border: 1px dotted wheat;
    box-shadow: 2px 3px whitesmoke;
    height: 100px;
   
    overflow: hidden;
}
.td{
    width: 10px;
}
</style>
    <div class="az-content-label mg-b-5">
        <div class="off-div">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Event Calender
                </div>
                <div class="panel-body" id="calendar">
                {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
    </div>
@endsection