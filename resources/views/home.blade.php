@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Lista de docentes inscritos:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <ul>
                                <li>
                                    <strong>{{ \Illuminate\Support\Facades\Auth::user()->name }}</strong>
                                    <a href="/preferencias">Cambiar preferencias</a>
                                </li>
                            @foreach ($users as $user)
                                    @if(! (\Illuminate\Support\Facades\Auth::id() == $user->id) )
                                        <li><strong>{{ $user->name }}</strong></li>
                                    @endif
                            @endforeach
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
