@extends('layouts.app')

@section('body')

<div class="row mb-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span style="font-size: large">
                <b>
                    Manager ::
                   @if($manager->count() > 0)
   
                     {{ $manager->first()->firstname }}

                   @endif
                </b>
                   
                </span>
            
                
                
            </div>
        </div>
    </div>
</div>

    <a class=" btn btn-secondary float-right p-2 mr-2" href="{{ route('hospitallist.create',['managerId' => $manager->id])}}" type="button" >Add Hospital</a>
    <a class="btn btn-success float-right p-2 mr-2" href="{{ route('hospital.index' ) }}" type="button">List Hospital</a>

<hr/>
<div class="row mb-3">
        <div class="col-md-6">
            <label>Username/Email Id</label>
            <input type="text" name="mailid" class="form-control" placeholder=" " value="{{$manager->mailid}}" readonly>
        </div>
        <div class="col-md-6">
            <label>Mobile Number</label>
            <input type="text" name="mobilenumber" class="form-control" placeholder=" " value="{{$manager->mobilenumber}}" readonly>
        </div>
       
    </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder=" " value="{{$manager->firstname}}" readonly>
        </div>
        <div class="col-md-6">
            <label>Middle Name</label>
            <input type="text" name="middlename" class="form-control" placeholder=" " value="{{$manager->middlename}}" readonly>
        </div>
       
  </div>
  <div class="row mb-3">
        <div class="col-md-6">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder=" " value="{{$manager->lastname}}" readonly>
        </div>
        <div class="col-md-6">
            <label>Pan</label>
            <input type="text" name="pan" class="form-control" placeholder=" " value="{{$manager->pan}}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label>Aadhar</label>
            <input type="text" name="aadhar" class="form-control" placeholder=" " value="{{$manager->aadhar}}" readonly>
        </div>
        <div class="col-md-6">
            <label>Bank Name</label>
            <input type="text" name="bankname" class="form-control" placeholder=" " value="{{$manager->bankname}}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label>IFSC Code</label>
            <input type="text" name="ifsccode" class="form-control" placeholder=" " value="{{$manager->ifsccode}}" readonly>
        </div>
        <div class="col-md-6">
            <label>Account Number</label>
            <input type="text" name="accountnumber" class="form-control" placeholder=" " value="{{$manager->accountnumber}}" readonly>
        </div>
     </div>
@endsection