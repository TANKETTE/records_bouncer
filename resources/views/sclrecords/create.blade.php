@extends('layouts.app')
@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['sclrecords.store']]) !!}
    {!!Form::hidden('customer_id', $customer->id)!!}

<div class="row">
    <div class="col-md-8 form-group">
        <h3>Create New Scl Record</h3>
    </div>
    <div class="col-sm-2 form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-success btn-lg']) !!}
    </div>
    <div class="col-sm-2 form-group">
        {!! Form::submit('Cancel', ['class' => 'btn btn-danger btn-lg']) !!}
    </div>
</div>
<div class="row">
<ul class="nav nav-pills" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active" data-toggle="pill" href="#history">History + Rx</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#fit1" role="tab">Fitting</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#fit2" role="tab">+ Fitting</a>
        <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#oh" role="tab">Ocular Health</a></li>
    </ul>
</div>

<div class="tab-content">
    <div id="history" class="tab-pane active" role="tabpanel">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 form-group">
                        {!! Form::label('', 'Name', ['class' => 'control-label']) !!}
                        {!! Form::text('', $customer->name, ['class' => 'form-control', 'placeholder' => '','readonly']) !!} 
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('', 'IC Number', ['class' => 'control-label']) !!}
                        {!! Form::text('', $customer->ic, ['class' => 'form-control', 'placeholder' => '', 'readonly']) !!}   
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('visit_date', 'Visit Date', ['class' => 'control-label']) !!}
                        {!! Form::date('visit_date', '', ['class' => 'form-control']) !!} 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        {!! Form::label('', 'Phone Number 1', ['class' => 'control-label']) !!}
                        {!! Form::text('', $customer->phone1, ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                    </div>
                    <div class="col-md-4 form-group">
                        {!! Form::label('', 'Phone Number 2', ['class' => 'control-label']) !!}
                        {!! Form::text('', $customer->phone2, ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                    </div>
                    <div class="col-md-4 form-group">                   
                        {!! Form::label('', 'Phone Number 3', ['class' => 'control-label']) !!}
                        {!! Form::text('', $customer->phone3, ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                    </div>                
                </div>
                <div> @include('sclrecords.inc_scl_create.history')</div>                                            
            </div>
        </div>
    </div>


    <div id="fit1" class="tab-pane" role="tabpanel"> 
        <div class="panel panel-default"> 
            @include('sclrecords.inc_scl_create.fit1')
        </div>
    </div>


    <div id="fit2" class="tab-pane" role="tabpanel">
        <div class="panel panel-default"> 
            @include('sclrecords.inc_scl_create.fit2')
        </div>
    </div>


    <div id="oh" class="tab-pane" role="tabpanel">
        <div class="panel panel-default"> 
            @include('sclrecords.inc_scl_create.oh')
        </div>
    </div>
</div>


   
    





    {!! Form::close() !!}

    
    
    
@endsection