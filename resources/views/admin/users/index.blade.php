@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.users.title')</h3>
    <hr>
    <p>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Create New User</a>
    </p>
<hr>
    <div class="panel panel-default">
        

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>@lang('global.users.fields.name')</th>
                        <th>@lang('global.users.fields.email')</th>
                        <th>@lang('global.users.fields.roles')</th>
                    </tr>
                </thead>            
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">                              
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles->pluck('name') as $role)
                                        <span class="label label-warning label-many">{{ $role }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop


