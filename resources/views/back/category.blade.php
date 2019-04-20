@extends('back.master')
@section('content')
<div class="card row " style="margin-left:5px">
    <div class="well table-responsive">
        <h3 class="text-justify float-left">Categories</h3>
        <a href="{{url('add_category')}}" class="btn btn-info float-right">Add Category</a>
        <table class="table table-striped">
            <tr>
                <td style="font-weight:700;font-size:1.2rem;">
                    SI
                </td>
                <td style="font-weight:700;font-size:1.2rem;">
                    Category Name
                </td>
            </tr>
            @php
                $category=App\Category::all();
                $i=1;
            @endphp
           @if($category)
           @foreach ($category as $category)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$category->name}}</td>
                </tr>
                @php
                    $i++;
                @endphp
           @endforeach
          
           @endif
        </table>
    </div>

</div>
@endsection