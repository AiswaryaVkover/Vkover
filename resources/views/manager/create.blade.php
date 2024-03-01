@extends('layouts.app')

@section('body')
<div class="row mb-3">
<div class="card">
    <div class="card-header">
    <h3>Manager/Create</h3>
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

<form action="{{ route('manager.store')}}" method="POST" id="createForm">
    @csrf

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Username/Email Id</label>
            <input type="text" name="mailid" class="form-control" placeholder=" ">

            <span id="mailidError" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label>Mobile Number</label>
            <input type="text" name="mobilenumber" class="form-control" placeholder=" ">
            <span id="mobilenumberError" class="text-danger"></span>
        </div>
       
    </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder=" ">
            <span id="firstnameError" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label>Middle Name</label>
            <input type="text" name="middlename" class="form-control" placeholder=" ">
        </div>
       
  </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder=" ">
            <span id="lastnameError" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label>Pan</label>
            <input type="text" name="pan" class="form-control" placeholder=" ">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label>Aadhar</label>
            <input type="text" name="aadhar" class="form-control" placeholder=" ">
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
        </div>
     </div> 
     
     <div class="row mb-3">
        <div class="d-grid">
            <!-- Add the id "submitButton" to the button element -->
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
        var mailid = document.getElementsByName('mailid')[0].value.trim();
        var mobilenumber = document.getElementsByName('mobilenumber')[0].value.trim();
        var firstname = document.getElementsByName('firstname')[0].value.trim();
        var lastname = document.getElementsByName('lastname')[0].value.trim();

        // Reset previous errors
        document.getElementById('mailidError').textContent = '';
        document.getElementById('mobilenumberError').textContent = '';
        document.getElementById('firstnameError').textContent = '';
        document.getElementById('lastnameError').textContent = '';

        // Check if fields are empty
        if (mailid === '') {
            document.getElementById('mailidError').textContent = 'Field is required';
            return;
        }
        if (mobilenumber === '') {
            document.getElementById('mobilenumberError').textContent = 'Field is required';
            return;
        }
        if (firstname === '') {
            document.getElementById('firstnameError').textContent = 'Field is required';
            return;
        }
        if (lastname === '') {
            document.getElementById('lastnameError').textContent = 'Field is required';
            return;
        }

        // If all validations pass, submit the form
        document.getElementById('createForm').submit();
    });
</script>
@endsection
