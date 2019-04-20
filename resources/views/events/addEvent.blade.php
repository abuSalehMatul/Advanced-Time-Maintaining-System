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
.form-control2 {
    display: block;
    /* width: 100%; */
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #596882;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #cdd4e0;
    border-radius: 3px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
</style>
    <div class="az-content-label mg-b-5">
        <div class="off-div">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Event Calender
                </div>
                <hr>
                <div class="panel-body">
                   <form action="{{url('events')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Event Name</label>
                            <input type="text" name="event_name" class="form-control2" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="start">Start Date</label>
                            <input type="date" name="start_date" class="form-control2" id="start" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="end">End date</label>
                            <input type="date" name="end_date" class="form-control2" id="end" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="des">Description (Optional)</label>
                            <input type="text" name="description" class="form-control2" id="des" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Add the Event</label>
                            <input type="submit" class="btn btn-info" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection