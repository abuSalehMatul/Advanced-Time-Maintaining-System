@extends('back.master')
@section('content')
    <div class="az-content-label mg-b-5"></div>
          <p class="mg-b-20">Please Fill the fields to create a new Record/Projects</p>

          <form action="{{url('store_record')}}" method="POST" data-parsley-validate>
            @csrf
                <div class="d-md-flex mg-b-35 ">
                    <div class="form-group mg-b-5 ">
                        <label class="form-label">Record Name: <span class="tx-danger">*</span></label>
                        <input type="text" name="record_name" class="form-control wd-250" placeholder="Enter Record Name" required>
                    </div>
                    @if($role->role==2)
                    <div class="form-group mg-b-5 ">
                        <label class="form-label">Admin Email: <span class="tx-danger">*</span></label>
                        <input type="email" name="admin_email" class="form-control wd-250" placeholder="Enter Record Name" required>
                    </div>
                    @endif
                    @if($role->role==3)
                    <div class="form-group mg-b-5 ">
                        <label class="form-label">Manager Email: <span class="tx-danger">*</span></label>
                        <input type="email" name="manager_email" class="form-control wd-250" placeholder="Enter Record Name" required>
                    </div>
                    @endif
                    <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                        <label class="form-label">Add a Tag</label>
                        <input type="text" name="tag" class="form-control wd-250" placeholder="Enter tag(Optional)" required>
                    </div>
                    <div class="form-group offset-1">
                        <label class="ckbox mg-b-7">
                            <input type="checkbox" name="access" value="0"><span>Private Project</span>
                        </label>
                        <label class="ckbox mg-b-7">
                            <input type="checkbox" name="access" value="1"><span>Public Project</span>
                        </label>
                    </div>
                </div><!-- d-flex -->
                <div class="d-md-flex mg-b-35 ">
                    <div class="form-group mg-b-5 ">
                        <label class="form-label">Description <span class="tx-danger">*</span></label>
                         <textarea name="description" id="" cols="90" rows="3" required>

                         </textarea>
                    </div>
                   
                </div><!-- d-flex -->
             
            <div class="d-sm-flex wd-sm-450">
              
                <label class="ckbox " style="display:inline-block">
                    <input type="checkbox" name="active_when" value="1"><span>Active it Now</span>
                </label>
                <label class="ckbox offset-2" style="display:inline-block">
                    <input type="checkbox" name="active_when" value="0"><span>Active it later</span>
                </label>
               <div class="form-group row col-md-8 offset-6">
                <label for="exampleFormControlSelect1 col-md-7 ">Project Category</label>
                <select class="form-control float-right" id="exampleFormControlSelect1" name="category">
                
                <option value="-1">Select a catergory</option>
                    @php
                        $category=App\Category::all();
                    @endphp
                    @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
            
                
                </select>
                </div>
              
            </div>
            <div class="">
                <input type="submit" style="width:100%;padding:4px;color:darkblue;background:honeydew;font-weight:800;font-size:1.2rem;" class="" name="" id="" value="Create the record">
            </div>
           
          </form>


@endsection