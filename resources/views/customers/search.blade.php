@extends('layouts.app')
@section('content')
<div>
  <h2>Search Customers</h2>
</div>
<form action="#">
    <div class="input-group col-sm-6">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i>Search</button>
      </div>
    </div>
</form>
    

 
@stop