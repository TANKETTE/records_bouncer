@extends('layouts.app')

@section('content')
    <h3 class="page-title">All Customers</h3>
    <hr>
            <div class = "table-bordered ">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Customer Name</th>
                            <th>Visit Date:</th>
                            <th>History</th>
                            <th>Created at:</th>
                            <th>Updated at:</th>
                        </tr>
                    </thead>               
            @if(count($sclrecords) > 0)
                @foreach($sclrecords as $sclrecord)           
                    <tbody>
                        <tr>                                              
                            <td><a href="/sclrecords/{{$sclrecord->id}}">View</a></td>
                            <td>{{$sclrecord->customer->name}}</td>
                            <td>{{$sclrecord->visit_date}}</td>
                            <td>{{$sclrecord->history}}</td>
                            <td>{{$sclrecord->created_at}}</td>
                            <td>{{$sclrecord->updated_at}}</td>
                        </tr>
                    </tbody>                
                @endforeach          
                </table>   
                @else
                 <p>No Records Found</p>
            @endif
            </div>
@endsection
