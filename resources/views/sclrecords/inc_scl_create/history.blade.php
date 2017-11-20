<div class="row" id="history">
    <div class="col-md-4 form-group">
            {!! Form::label('history', 'History', ['class' => 'control-label']) !!}
        <div class="well">
            {!! Form::textarea('history', '', ['class' => 'form-control', 'rows="11"', 'placeholder' => 'History']) !!}
        </div>

    </div> 

    <div class="col-md-8 form-group">
        <label for="form-label">Habitual Rx:</label>
        <div class="row">
            <div class="well col-md-6 form-group">
                <div class="row">
                    <div class="form-inline">
                        <div class="col-md-4">
                            {{ Form::select('hab_1_type', ['Spectacle', 'SCL']) }}
                        </div>
                        <div class="input-group col-md-8">
                            <span class="input-group-addon">since</span>
                            {!! Form::text('hab_1_date', '', ['class' => 'form-control']) !!}
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon">R:</span>
                        {!! Form::text('hab_1_rx_od', '', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon">L:</span>
                        {!! Form::text('hab_1_rx_os', '', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    {!! Form::label('remark', 'Remarks', ['class' => 'control-label']) !!}
                    {!! Form::textarea('hab_1_remarks', '', ['class' => 'form-control', 'rows="5"','placeholder' => 'Remarks']) !!}
                </div>
            </div>
            
            <div class="well col-md-6 form-group">
                <div class="row">
                    <div class="form-inline">
                        <div class="col-md-4">
                            {{ Form::select('hab_2_type', ['Spectacle', 'SCL']) }}  
                        </div>
                        <div class="input-group col-md-8">
                            <span class="input-group-addon">since</span>
                            {!! Form::text('hab_2_date', '', ['class' => 'form-control']) !!}
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon" id="hab_2_rx_od">R:</span>
                        {!! Form::text('hab_2_rx_od', '', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon">L:</span>
                        {!! Form::text('hab_2_rx_os', '', ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    {!! Form::label('remark', 'Remarks', ['class' => 'control-label']) !!}
                    {!! Form::textarea('hab_2_remarks', '', ['class' => 'form-control', 'rows="5"','placeholder' => 'Remarks']) !!}
                </div>
            </div>
        </div>
    </div>   
</div>  

<div class="row" id="rx">
    <div class="well col-md-4 form-group">
        <p>Full Rx:</p>
        <div class="row">
            <div class="input-group col-md-8">
                <span class="input-group-addon">Refraction by:</span>
                {!! Form::text('rx_by', '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row form-inline">
            <div class="input-group col-md-9">
                <span class="input-group-addon">R:</span>
                {!! Form::text('full_rx_od', '', ['class' => 'form-control']) !!}
            </div>
            <div class="input-group col-md-2">
                <span class="input-group-addon">VA</span>
                {!! Form::text('full_rx_od_va', '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row form-inline">
            <div class="input-group col-md-9">
                <span class="input-group-addon">L:</span>
                {!! Form::text('full_rx_os', '', ['class' => 'form-control']) !!}
            </div>
            <div class="input-group col-md-2">
                <span class="input-group-addon">VA</span>
                {!! Form::text('full_rx_os_va', '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            {!! Form::label('remark', 'Remarks', ['class' => 'control-label']) !!}
            {!! Form::textarea('full_rx_remarks', '', ['class' => 'form-control', 'rows="5"','placeholder' => 'Remarks']) !!}
        </div>
    </div>

    <div class="well col-md-4 form-group">
        <p>SCL Rx:</p>
        <div class="row">
            <div class="input-group col-md-6">               
                <span class="input-group-addon">Refraction by:</span>
                {!! Form::text('rx_by_2', '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row form-inline">
            <div class="input-group col-md-9">
                <span class="input-group-addon">R:</span>
                {!! Form::text('scl_rx_od', '', ['class' => 'form-control']) !!}
            </div>
            <div class="input-group col-md-2">
                <span class="input-group-addon">VA</span>
                {!! Form::text('scl_rx_od_va', '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row form-inline">
            <div class="input-group col-md-9">
                <span class="input-group-addon">L:</span>
                {!! Form::text('scl_rx_os', '', ['class' => 'form-control']) !!}
            </div>
            <div class="input-group col-md-2">
                <span class="input-group-addon">VA</span>
                {!! Form::text('scl_rx_os_va', '', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            {!! Form::label('remark', 'Remarks', ['class' => 'control-label']) !!}
            {!! Form::textarea('scl_rx_remarks', '', ['class' => 'form-control', 'rows="5"','placeholder' => 'Remarks']) !!}
        </div>
    </div>

    <div class="well col-md-4">
       {!! Form::label('remark', 'Remarks', ['class' => 'control-label']) !!}
            {!! Form::textarea('rx_remarks', '', ['class' => 'form-control', 'rows="11"','placeholder' => 'Remarks']) !!} 
    </div>


</div>

