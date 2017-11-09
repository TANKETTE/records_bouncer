@extends('layouts.app')
@section('content')
    <h3>{{$customer->name}}</h3>
    <hr>
    <button class="btn btn-primary" route="#">Back</button>
    <h3>Edit Customer Informations</h3>
    <hr>   
    {!! Form::model($customer, ['method' => 'PUT', 'route' => ['customers.update', $customer->id]]) !!}
    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    <hr>
    <div class="panel panel-default">
        

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('ic', 'IC Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ic', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone1', 'Phone Number 1 (required)', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone3', 'Phone Number 3', ['class' => 'control-label']) !!}
                    {!! Form::text('phone3', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}   
                </div>
            </div>
            
        </div>
    </div>

    
    {!! Form::close() !!}
    
@stop