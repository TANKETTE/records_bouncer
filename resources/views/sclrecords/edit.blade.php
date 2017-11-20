@extends('layouts.app')
@section('content')
<h3 class="page-title">Edit Scl Record</h3>
<hr>
    {!! Form::model($sclrecord, ['method' => 'PUT', 'route' => ['sclrecords.update', $sclrecord->id]]) !!}

    <div class="panel panel-default">
        
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
                    {!! Form::textarea('history', old('title'), ['class' => 'form-control', 'placeholder' => 'History']) !!} 

                    {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                    {!! Form::date('visit_date', old('title'), ['class' => 'form-control', 'placeholder' => 'Visit Date']) !!}                      
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    
    
    
@endsection