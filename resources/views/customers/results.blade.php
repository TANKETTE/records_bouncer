@extends('layouts.app')
@section('content')

@include('inc.search')
<hr>

<div class="well">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Ic Number:</th>
                            <th>Customer Name:</th>
                            <th>Phone Number1:</th>
                            <th>Phone Number2:</th>
                            <th>Phone Number3:</th>
                        </tr>
                    </thead>

                    <tbody> 
                        @if(count($customers) === 0 )
                            <h3>No Customer Found</h3>
                            <hr>
                                @elseif(count($customers) >= 1) 
                            <h3>Search Results</h3>
                            <hr>
                                @foreach($customers as $customer)           
                                    <tr>              
                                        <td><a href="/customers/{{$customer->id}}">View</a></td>
                                        <td>{{$customer->ic}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->phone1}}</td>
                                        <td>{{$customer->phone2}}</td>
                                        <td>{{$customer->phone3}}</td></a> 
                                    </tr>
                    </tbody>                                  
                @endforeach          
                </table>                    
     @else
     <h3>No Customer Found</h3>        
        <hr>
    @endif      
</div>     
@stop