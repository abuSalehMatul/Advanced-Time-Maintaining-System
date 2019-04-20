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
          
            <ul style="list-style:none;float-left;margin-left:4px">
                <li>Today is:</li>
                <li id="date" style="float:left;margin-right:2px"></li>
                <li id="month" style="float:left;margin-right:2px"></li>
                <li id="year"></li>
            </ul>
            <div>
                <table class="table  table-hover ">
                    <thead>
                        <tr>
                        <th scope="col">Event name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Description</th>
                        <th scope="col" ></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($event)
                            @foreach($event as $event)
                            <tr onmouseup="showdl()">
                            <th scope="row">{{$event->event_name}}</th>
                            <td>{{$event->start_date}}</td>
                            <td>{{$event->end_date}}</td>
                            <td>{{$event->description}}</td>
                            <td ><a style="color:red"  href="{{url('event_delete/'.$event->id)}}"><i class="fas fa-times"></i></a></td>
                            </tr>
                            
                            @endforeach
                        @endif    
                    </tbody>
            </table>
            </div>
        </div>
    </div>
    <script>
        var d= new Date();
        var year=d.getFullYear();
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var month=months[d.getMonth()];
        var date=d.getDate();
        document.getElementById("date").innerHTML = date;
        document.getElementById("month").innerHTML = month;
        document.getElementById("year").innerHTML = year;
      
      
    </script>
@endsection