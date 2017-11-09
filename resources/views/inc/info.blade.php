<a href="/customers/{{$customer->id}}/edit" class="btn btn-success">Edit Customer</a> 
<hr>
{!! Form::model($customer, ['method' => 'GET', 'route' => ['customers.show', $customer->id]]) !!}

    <div class="panel panel-default">
        

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('ic', 'IC Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ic', old('title'), ['class' => 'form-control', 'placeholder' => '', 'readonly']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone1', 'Phone Number 1', ['class' => 'control-label']) !!}
                    {!! Form::text('phone1', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone2', 'Phone Number 2', ['class' => 'control-label']) !!}
                    {!! Form::text('phone2', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>

                <div class="col-xs-12 form-group">
                    {!! Form::label('phone3', 'Phone Number 3', ['class' => 'control-label']) !!}
                    {!! Form::text('phone3', old('title'), ['class' => 'form-control', 'placeholder' => '','readonly']) !!}   
                </div>
            </div>
            
        </div>
    </div> 
    
    