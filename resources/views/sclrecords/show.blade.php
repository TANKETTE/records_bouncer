@extends('layouts.app')
@section('content')



    
    {!! Form::model($sclrecord, ['method' => 'GET', 'route' => ['sclrecords.show', $sclrecord->id]]) !!}
<h3 class="page-title">{{$sclrecord->customer->name}}</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
           Customer Informations
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
                    {!! Form::textarea('history', old('title'), ['class' => 'form-control', 'placeholder' => '','disabled']) !!}   
                    {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                    {!! Form::date('visit_date', old('title'), ['class' => 'form-control', 'disabled']) !!} 
                </div>

                
            </div>
            
        </div>
    </div>  

    <a href="/sclrecords/{{$sclrecord->id}}/edit" class="btn btn-success">Edit Scl Record</a> 
    
@stop