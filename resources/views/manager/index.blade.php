@extends('layouts.app')

@section('body')

<div class="d-flex align-items-center justify-content-between">
<h1 class="mb-0">Manager List</h1>
<a href="{{ route('manager.create')}}" class="btn btn-primary">Add Manager</a>
</div>
<hr/>

@if(Session::has('success'))
   <div class="alert alert-success" role="alert">
    {{Session::get('success')}}
   </div>

@endif

<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Sl No</th>
            <th>User Name</th>
            <th>First Name</th>
            <th>Middle name</th>
            <th>Last Name</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if($manager->count()>0)
        @foreach($manager as $rs)
        <tr>
            <td class="align-middle">{{$loop->iteration}}</td>
            <td class="align-middle">{{$rs->mailid}}</td>
            <td class="align-middle">{{$rs->firstname}}</td>
            <td class="align-middle">{{$rs->middlename}}</td>
            <td class="align-middle">{{$rs->lastname}}</td>
            <td class="align-middle">
                <div>
                <a href="{{route('manager.show', $rs->id)}}" type="button" class="btn btn-secondary">Details</a>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Not Found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection