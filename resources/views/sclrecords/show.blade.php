@extends('layouts.app')
@section('content')
{!! Form::model($sclrecord, ['method' => 'GET', 'route' => ['sclrecords.show', $sclrecord->id]]) !!}
    <h3>{{$sclrecord->customer->name}}</h3>
     <hr>
    <h3>Scl Record </h3>
    <hr>
    @can('records_manage')
        <a href="/sclrecords/{{$sclrecord->id}}/edit" class="btn btn-success">Update Scl Record</a> 
    @endcan
     <hr>
    <div class="panel panel-default">
        
           

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
                    {!! Form::textarea('history', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                    {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                    {!! Form::date('visit_date', old('title'), ['class' => 'form-control', 'readonly']) !!} 

                    {!! Form::label('history', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', $sclrecord->customer->name, ['class' => 'form-control', 'placeholder' => 'Visit Date']) !!} 
                </div>

                
            </div>
            
        </div>
    </div>  

    
    
@stop