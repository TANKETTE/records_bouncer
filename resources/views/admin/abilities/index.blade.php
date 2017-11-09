@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.abilities.title')</h3>
    <hr>
    <p>
        <a href="{{ route('admin.abilities.create') }}" class="btn btn-success">Create New Ability</a>
    </p>
    <hr>

    <div class="panel panel-default">
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>                       
                        <th><h3>Abilitiy Name</h3></th>
                        
                    </tr>
                </thead>            
                <tbody>
                    @if (count($abilities) > 0)
                        @foreach ($abilities as $ability)
                            <tr data-entry-id="{{ $ability->id }}">                           
                                <td>{{ $ability->name }}</td>
                                <td>
                                    <a href="{{ route('admin.abilities.edit',[$ability->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.abilities.destroy', $ability->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

