@extends('layouts.master')

@section('content')
    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-3 col-12-xsmall">
                <input type="number" name="codigo" id="codigo" value="" placeholder="C&oacute;digo">
            </div>
            <div class="col-12 col-12-xsmall">
                <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre">
            </div>
            <div class="col-3 col-12-xsmall">
                <input type="number" name="especialidad" id="especialidad" value="" placeholder="Especialidad" min="1" max="2">
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Enviar" class="primary"></li>
                    <li><input type="reset" value="Cancelar"></li>
                </ul>
            </div>
        </div>
    </form>
@endsection
