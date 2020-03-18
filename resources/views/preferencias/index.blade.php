@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        <h2>Estas son sus m&oacute;dulos elegidos en orden de preferencia:</h2>
        <ol>
            @foreach ($preferencias as $preferencia)
                <li><strong>{{ $preferencia->modulo->nombre }}</strong>
                    <form method="POST" action="/preferencias/{{ $preferencia->id }}" class="pull-right" >
                    @csrf
                    @method('DELETE')
                        <input type="submit" value="-" class="btn btn-danger">
                    </form>
                </li>
            @endforeach
        </ol>
    </div>
    <div class="title m-b-md">
        <h2>Puede elegir m&aacute;s módulos de la siguiente lista.</h2>
        <ul>
            @foreach ($ciclos as $ciclo)
                <li><strong>{{ $ciclo->nombre }}</strong>
                    <ul>
                        @foreach ($ciclo->modulos as $modulo)
                            @if(!in_array($modulo->codigo, $misModulosCodigo))
                                <li><strong>{{ $modulo->nombre }}</strong> ({{ $modulo->especialidad->nombre }})
                                    <form method="POST" action="/preferencias" class = "pull-right">
                                        @csrf
                                        <input type="hidden" name="modulo_codigo" value="{{ $modulo->codigo }}">
                                        <input type="submit" value="+" class="btn btn-success">
                                    </form>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </li>
            @endforeach
        </ul>
    </div>
@endsection
