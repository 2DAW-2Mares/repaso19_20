@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Estos son sus m&oacute;dulos elegidos en orden de preferencia:</div>

                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Puede elegir m&aacute;s módulos de la siguiente lista.</div>

                    <div class="card-body">
                        <table>
                            <thead>
                            <th>Ciclo / M&oacute;dulo</th><th>Elegir</th><th>NºDocentes</th>
                            </thead>
                            <tbody>
                            @foreach ($ciclos as $ciclo)
                                <tr>
                                    <th colspan="3" style="background-color: #3f9ae5"><strong>{{ $ciclo->nombre }}</strong></th>
                                </tr>
                                @foreach ($ciclo->modulos as $modulo)

                                        <tr>
                                            <td><strong>{{ $modulo->nombre }}</strong> ({{ $modulo->especialidad->nombre }})</td>
                                            <td>
                                                <a href="{{ action('PreferenciaController@usersModulo', ['modulo' => $modulo]) }}">
                                                {{
                                                    array_key_exists($modulo->codigo, $preferenciasPorModulo)
                                                    ? $preferenciasPorModulo[$modulo->codigo]
                                                    : 0
                                                 }}
                                                </a>
                                            </td>
                                            <td>
                                                @if(!in_array($modulo->codigo, $misModulosCodigo))
                                                <form method="POST" action="/preferencias" class = "pull-right">
                                                    @csrf
                                                    <input type="hidden" name="modulo_codigo" value="{{ $modulo->codigo }}">
                                                    <input type="submit" value="+" class="btn btn-success">
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
