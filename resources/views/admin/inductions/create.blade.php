@extends('adminlte::page')
@section('title', 'Coders Free')
@section('content_header')
<h1>Coders Free</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.roles.store'] !!)}
                <div class="form-group">
                    {!! Form::label('name', 'nombre') !!}
                    {!! form::text('name', null, [ class => 'form-control' ]) !!}

                </div>
                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

