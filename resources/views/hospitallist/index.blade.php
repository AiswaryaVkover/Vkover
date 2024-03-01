@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h3 class="mb-0">Hospital List</h3>
</div>
<hr/>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Sl No</th>
            <th>User Name</th>
            <th>Hospital Name</th>
            <th>Manager</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if($hospitallist->count() > 0)
            @foreach($hospitallist as $rs)
                <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$rs->username}}</td>
                    <td class="align-middle">{{$rs->hospitalname}}</td>
                    <td class="align-middle">
                        @if($rs->manager)
                            {{$rs->manager->firstname}}
                        @endif
                    </td>
                    <td class="align-middle">
                        <a href="{{ route('lead.create', ['hospitalId' => $rs->id]) }}" type="button" class="btn btn-success">Create Lead</a>
                        <a href="{{route('lead.index',['hospitalId' => $rs->id]) }}" type="button" class="btn btn-success">List Lead</a>
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
