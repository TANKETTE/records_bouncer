@extends('layouts.app')
@section('content')
{!! Form::model($sclrecord, ['method' => 'GET', 'route' => ['sclrecords.show', $sclrecord->id]]) !!}
    <h3>{{$sclrecord->customer->name}}</h3>
     <hr>
    <h3>Scl Record </h3>
    <hr>
    <a href="/sclrecords/{{$sclrecord->id}}/edit" class="btn btn-success">Update Scl Record</a> 
     <hr>
    <div class="panel panel-default">
        
           

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
                    {!! Form::textarea('history', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                    {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                    {!! Form::date('visit_date', old('title'), ['class' => 'form-control', 'readonly']) !!} 
                </div>

                
            </div>
            
        </div>
    </div>  

    
    
@stop