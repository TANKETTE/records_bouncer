@extends('layouts.app')
@section('content')
<h3 class="page-title">Create New Scl Record</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['sclrecords.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            New Scl Record
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
                    {!! Form::textarea('history', '', ['class' => 'form-control', 'placeholder' => 'History']) !!}    
                    {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                    {!! Form::date('visit_date', '', ['class' => 'form-control']) !!}    

                    {!!Form::hidden('customer_id', $customer_id)!!}
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    
    
    
@endsection