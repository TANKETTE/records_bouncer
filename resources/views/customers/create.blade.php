@extends('layouts.app')
@section('content')
<h3 class="page-title">Create New Customer</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['customers.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            New Customer
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'required' => '']) !!}
                    <br>
                    {!! Form::label('ic', 'Ic Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ic', '', ['class' => 'form-control', 'placeholder' => 'Ic Number']) !!}
                    <br>
                    {!! Form::label('phone1', 'Phone Number 1 (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 1', 'required' => '']) !!}
                    <br>
                    {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 2']) !!}
                    <br>
                    {!! Form::label('phone3', 'Phone Number 3', ['class' => 'control-label']) !!}
                    {!! Form::text('phone3', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 3']) !!}
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    
    
    
@endsection