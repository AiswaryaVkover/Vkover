@extends('layouts.app')

@section('body')

<div class="row mb-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span style="font-size: large">
                <b> Lead Create::
                @if($leads->count() > 0)
   
   {{ $leads->first()->hospitallist->hospitalname }}

        @endif
                </b>
                   
                </span> 
                
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<ul>
@foreach ($errors->all() as $error)

    <li>{{ $error }}</li>

            @endforeach
</ul>
            </div>
            @endif


<form action="{{ route('lead.store') }}" method="POST" id="createForm">
    @csrf

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder=" ">
            <span id="nameError" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" placeholder=" ">
            <span id="mobileError" class="text-danger"></span>
        </div>
       
    </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>DOB</label>
            <input type="text" name="dob" class="form-control" placeholder=" ">
            <span id="dobError" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label>Remark</label>
            <input type="text" name="remark" class="form-control" placeholder=" ">
            <input type="hidden" name="hospitallist_id" value="{{$hospitalId}}">
            <input type="hidden" name="leadstage" value="Enquiry">
        </div>
       
  </div>

   
     <div class="row mb-3">
        <div class="d-grid">
            <!-- Add id "submitButton" to the button element -->
            <button class="btn btn-primary" id="submitButton">Submit</button>
        </div>
     </div>
  </div>

</form>

<script>
    document.getElementById('submitButton').addEventListener('click', function(event) {
        // Prevent form submission
        event.preventDefault();

        // Validate fields
        var name = document.getElementsByName('name')[0].value.trim();
        var mobile = document.getElementsByName('mobile')[0].value.trim();
        var dob = document.getElementsByName('dob')[0].value.trim();

        // Reset previous errors
        document.getElementById('nameError').textContent = '';
        document.getElementById('mobileError').textContent = '';
        document.getElementById('dobError').textContent = '';

        // Check if fields are empty
        if (name === '') {
            document.getElementById('nameError').textContent = 'Name is required';
            return;
        }
        if (mobile === '') {
            document.getElementById('mobileError').textContent = 'Mobile is required';
            return;
        }
        if (dob === '') {
            document.getElementById('dobError').textContent = 'DOB is required';
            return;
        }

        // If all validations pass, submit the form
        document.getElementById('createForm').submit();
    });
</script>

@endsection
