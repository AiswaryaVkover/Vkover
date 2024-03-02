@extends('layouts.app')

@section('body')

<div class="row mb-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span style="font-size: large">
                <b>
                    Hospital ::
                   @if($leadshow->count() > 0)
   
                     {{ $leadshow->first()->hospitallist->hospitalname }}

                   @endif
                </b>
                   
                </span>
            
                
                
            </div>
        </div>
    </div>
</div>

<hr/>


<div class="row mb-3">
        <div class="col-md-6">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder=" " value="{{$leadshow->name}}" readonly>
        </div>   
</div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>DOB</label>
            <input type="text" name="dob" class="form-control" placeholder=" " value="{{$leadshow->dob}}" readonly>
        </div>   
  </div>
<div class="row mb-3">
    <div class="col-md-6">
            <label>Phone</label>
            <input type="text" name="mobile" class="form-control" placeholder=" " value="{{$leadshow->mobile}}" readonly>
    </div>
</div>
</div>
</div>
@endsection