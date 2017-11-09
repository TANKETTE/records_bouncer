@extends('layouts.app')
@section('content')
<h3 class="page-title">{{$customer->name}}</h3>
<div class="well">
    <ul class="nav nav-pills nav-justified">
        <li class="active"><a data-toggle="pill" href="#home">Informations</a></li>
        <li><a data-toggle="pill" href="#SCL">SCL</a></li>
        <li><a data-toggle="pill" href="#PCC">PCC</a></li>
        <li><a data-toggle="pill" href="#HCV">HCV</a></li>
    </ul>
    <hr>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <h3>Customer Informations</h3>
                <hr>
                    @include('inc.info')
                </div>
                
                <div id="SCL" class="tab-pane fade">
                    <h3>SCL Records</h3>
                    <hr>
                    @include('inc.sclrecords')
                </div>
                <div id="PCC" class="tab-pane fade">
                    <h3>PCC Records</h3>
                    <hr>
                    @include('inc.pcc')
                </div>
                <div id="HCV" class="tab-pane fade">
                    <h3>HCV Records</h3>
                    <hr>
                    @include('inc.hcv')
                </div>
            </div>   
</div>   
@stop