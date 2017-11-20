@extends('layouts.app')
@section('content')
<h3 class="page-title">{{$customer->name}}</h3>

<div class="container-fluid">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active" data-toggle="pill" href="#home">Informations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#SCL" role="tab">SCL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#PCC" role="tab">PCC</a>
        <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#HCV" role="tab">HCV</a></li>
    </ul>  <hr>
            <div class="tab-content">
                <div id="home" class="tab-pane active" role="tabpanel">
                <h3>Customer Informations</h3>
                <hr>
                @include('inc.info') 
                </div>
                
                <div id="SCL" class="tab-pane" role="tabpanel">
                    <h3>SCL Records</h3>
                    <hr>
                @include('inc.scl')     
                </div>
                <div id="PCC" class="tab-pane" role="tabpanel">
                    <h3>PCC Records</h3>
                    <hr>
                @include('inc.pcc')    
                </div>
                <div id="HCV" class="tab-pane" role="tabpanel">
                    <h3>HCV Records</h3>
                    <hr>
                @include('inc.hcv')    
                </div>
            </div>
</div> 
@stop

