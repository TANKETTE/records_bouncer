@extends('layouts.app')
@section('content')


<hr>
    {!! Form::open(['method' => 'POST', 'route' => ['sclrecords.store']]) !!}
    {!!Form::hidden('customer_id', $customer_id)!!}
<div class="row">
    <div class="col-md-8 form-group">
        <h2>Create New Scl Record</h2>
    </div>
    <div class="col-md-1 form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-success btn-lg']) !!}
    </div>
    <div class="col-md-1 form-group">
        {!! Form::submit('Cancel', ['class' => 'btn btn-danger btn-lg']) !!}
    </div>
</div>
    <hr>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3 form-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!} 
                </div>
                <div class="col-md-3 form-group">
                    {!! Form::label('ic', 'IC Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ic', old('title'), ['class' => 'form-control', 'placeholder' => '', 'readonly']) !!}   
                </div>
                <div class="col-md-3 form-group">
                    {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                    {!! Form::date('visit_date', '', ['class' => 'form-control']) !!} 
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    {!! Form::label('phone1', 'Phone Number 1', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>
                <div class="col-md-3 form-group">
                    {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>
                <div class="col-md-3 form-group">
                    <div class="col-xs-12 form-group">
                    {!! Form::label('phone3', 'Phone Number 3', ['class' => 'control-label']) !!}
                    {!! Form::text('phone3', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>
            </div>
                
            </div>
            <div class="row">
                <div class="col-md-10 form-group">
                    {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
                    {!! Form::textarea('history', '', ['class' => 'form-control', 'placeholder' => 'History']) !!}
                </div> 
            </div>                          
                    
        </div>
    </div>

    
    {!! Form::close() !!}

    
    
    
@endsection