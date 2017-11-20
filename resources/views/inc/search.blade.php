<div class="well">
    <h3>Search Customers</h3>

    {!! Form::open(['action' => 'CustomersController@results', 'method' => 'POST']) !!}
        <div class = "form-group">
        <hr>
             {{Form::text('search', '', ['required', 'class' => 'form-control', 'placeholder' => 'keywords...'])}}
            <br>
                
            {{Form::submit('Search', ['class' => 'btn btn-primary btn-lg'])}}
        
            <a href="/customers/create" class="btn btn-warning btn-lg">Create Customer</a> 
        <div>
    {!! Form::close() !!}
    <hr>
</div>