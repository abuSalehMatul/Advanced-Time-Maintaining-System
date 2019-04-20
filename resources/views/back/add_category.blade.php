@extends('back.master')
@section('content')
    <div class="card" style="margin-left:5px">
        <div class="well"> 
            <form action="{{url('add_category')}}" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="" style="border:1px solid blue; box-shadow:1px 1px orange;font-size:1.2rem;font-weight:600">
                        Name of the category
                    </label>
                    <input type="text" style="display:block;padding:5px" class="" name="category_name" placeholder="ex. IT" required>
                    <input type="submit" class="btn btn-info">

                </div>
            </form>
        </div>

    </div>
@endsection