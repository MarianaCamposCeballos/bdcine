@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <a href="{{"descuentos/create"}}" class="btn btn-primary">Agregar</a>
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Descripcion</td>
                    <td>Porcentaje</td>
                </tr>
                </thead>
                <tbody>
                @foreach($descuentos as $descuento)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$descuento->desc_desc}}</td>
                        <td>{{$descuento->porcentaje}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
