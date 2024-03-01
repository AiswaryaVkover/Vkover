@extends('layouts.app')

@section('body')
<div class="row mb-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span style="font-size: large">
                <b>
                @if($leads->count() > 0)
   
   {{ $leads->first()->hospitallist->hospitalname }}

        @endif
                </b>
                   
                </span> 
                
            </div>
        </div>
    </div>
</div>


<hr/>
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Sl No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>DOB</th>
            <th>Stage</th>
            <th>created Date</th>
            
        </tr>
    </thead>
    <tbody>
        @if($leads->count() > 0)
            @foreach($leads as $rs)
                <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$rs->name}}</td>
                    <td class="align-middle">{{$rs->mobile}}</td>
                    <td class="align-middle">{{$rs->dob}}</td>
                    <td class="align-middle">{{$rs->leadstage}}</td>
                    <td class="align-middle"> {{ $rs->created_at->format('d/m/Y') }}
                    </td>
                   
                   
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">No Data Available</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection
