@extends('layouts.default')
@section('content')
            <div class="form-signin" role="form">
                    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
                    {{ Form::open(array('url' => '/login')) }}
                        <legend>Iniciar sesión</legend>
                        <div class="form-group">
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder'=>'Nombre de Usuario', 'required', 'autofocus')); }}
                        </div>
                        <div class="form-group">
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Contraseña', 'required')); }}
                        </div>
                        <div class="checkbox">
                            <label>
                                Recordar contraseña
                                {{ Form::checkbox('rememberme', true) }}
                            </label>
                        </div>
                        {{ Form::submit('Entrar', array('class' => 'btn btn-lg btn-primary btn-block')) }}
                    {{ Form::close() }}
            </div>
@stop
