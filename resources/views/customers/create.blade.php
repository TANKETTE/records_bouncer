@extends('layouts.app')
@section('content')
<h3 class="page-title">Create New Customer</h3>
<hr>
    {!! Form::open(['method' => 'POST', 'route' => ['customers.store']]) !!}

<div class="row">
        <div class="col-md-1 form-group">
            <a href="javascript:history.back()" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="col-md-1 form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-success btn-lg']) !!}
        </div>
        <div class="col-md-1 form-group">
            {!! Form::reset('Cancel', ['class' => 'btn btn-danger btn-lg']) !!}
        </div>
    </div>

<div class="panel panel-default">
    <div class="panel-body">
            <div class="row">
                <div class="col-lg-6 form-group">
                    {!! Form::label('name', 'Name (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'required' => '']) !!}
                </div>
                    
                <div class="col-lg-6 form-group">
                    {!! Form::label('ic', 'Ic Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ic', '', ['class' => 'form-control', 'placeholder' => 'Ic Number']) !!}
                </div>

                <div class="col-lg-6 form-group">    
                    {!! Form::label('phone1', 'Phone Number 1 (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 1', 'required' => '']) !!}
                </div>
                <div class="col-lg-6 form-group">    
                    {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 2']) !!}
                </div>

                <div class="col-lg-6 form-group">    
                    {!! Form::label('phone3', 'Phone Number 3', ['class' => 'control-label']) !!}
                    {!! Form::text('phone3', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 3']) !!}
                </div>
            </div>
            
        </div>
    </div>
    
    {!! Form::close() !!}

    
    
    
@endsection