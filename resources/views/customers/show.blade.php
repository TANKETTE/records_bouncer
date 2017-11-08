@extends('layouts.app')
@section('content')


<h3 class="page-title">{{$customer->name}}</h3>
    
    {!! Form::model($customer, ['method' => 'GET', 'route' => ['customers.show', $customer->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
           Customer Informations
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '','disabled']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('ic', 'IC Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ic', old('title'), ['class' => 'form-control', 'placeholder' => '', 'disabled']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone1', 'Phone Number 1 (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', old('title'), ['class' => 'form-control', 'placeholder' => '','disabled']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', old('title'), ['class' => 'form-control', 'placeholder' => '','disabled']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone3', 'Phone Number 3', ['class' => 'control-label']) !!}
                    {!! Form::text('phone3', old('title'), ['class' => 'form-control', 'placeholder' => '','disabled']) !!}   
                </div>
            </div>
            
        </div>
    </div>  

    <a href="/customers/{{$customer->id}}/edit" class="btn btn-success">Edit Customer</a> 
    <a href="{{ route('sclrecords.index') }}" class="btn btn-success">All Scl Records</a> 
    <a href="/sclrecords/create/{{$customer->id}}" class="btn btn-success">Create New Scl Record</a> 
    
@stop