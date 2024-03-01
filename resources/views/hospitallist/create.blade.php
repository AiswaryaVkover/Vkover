@extends('layouts.app')

@section('body')

<h3 align="left" class="mt-5">Hospital/Create</h3>
<form action="{{ route('hospital.store') }}" method="POST" id="createForm">
    @csrf

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Username[Email Id]</label>
            <input type="text" name="username" class="form-control" placeholder=" ">
            <span id="usernameError" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label>Hospital Name</label>
            <input type="text" name="hospitalname" class="form-control" placeholder=" ">
            <span id="hospitalnameError" class="text-danger"></span>
        </div>
       
    </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>Pan</label>
            <input type="text" name="pan" class="form-control" placeholder=" ">
        </div>
        <div class="col-md-6">
            <label>Bank Name</label>
            <input type="text" name="bankname" class="form-control" placeholder=" ">
        </div>
       
  </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>IFSC Code</label>
            <input type="text" name="ifsccode" class="form-control" placeholder=" ">
        </div>
        <div class="col-md-6">
            <label>Account Number</label>
            <input type="text" name="accountnumber" class="form-control" placeholder=" ">
            <input type="hidden" name="manager_id"  value="{{$managerId}}">
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
        var username = document.getElementsByName('username')[0].value.trim();
        var hospitalname = document.getElementsByName('hospitalname')[0].value.trim();

        // Reset previous errors
        document.getElementById('usernameError').textContent = '';
        document.getElementById('hospitalnameError').textContent = '';

        // Check if fields are empty
        if (username === '') {
            document.getElementById('usernameError').textContent = 'Field is required';
            return;
        }
        if (hospitalname === '') {
            document.getElementById('hospitalnameError').textContent = 'Field is required';
            return;
        }

        // If all validations pass, submit the form
        document.getElementById('createForm').submit();
    });
</script>

@endsection
