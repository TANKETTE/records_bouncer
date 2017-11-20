@can('records_manage')
<a href="/sclrecords/create/{{$customer->id}}" class="btn btn-warning btn-lg">Create New Scl Record</a> 
@endcan
<hr>
<div class="panel panel-default">
        <div class = "table-bordered ">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Visit Date</th>
                            <th>History</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>               
            @if(count($customer->sclrecords)>0)
                @foreach($customer->sclrecords as $sclrecord)          
                    <tbody>
                        <tr>                   
                            <td><a href="/sclrecords/{{$sclrecord->id}}">View</a></td>
                            <td>{{$sclrecord->visit_date}}</td>
                            <td>{{$sclrecord->history}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>                
                @endforeach            
                @else
                 <p>No Record Found</p>              
            @endif
                </table> 
        </div>
</div> 

