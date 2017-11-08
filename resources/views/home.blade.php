@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <h3>Hello!! {{Auth::user()->name}}</h3>
                    <h3>Wellcome back!!</h3>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
