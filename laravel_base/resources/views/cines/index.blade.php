@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <a href="{{url("cines/create")}}" class="btn btn-primary">Agregar</a>
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Calle</td>
                    <td>Numero</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                @foreach($cines as $cine)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$cine->calle}}</td>
                        <td>{{$cine->numero}}</td>
                        <td>{{$cine->telefono}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
