@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Indice cine</td>
                </tr>
                </thead>
                <tbody>
                @foreach($salas as $sala)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$sala->desc_sala}}</td>
                        <td>{{$sala->precio}}</td>
                        <td>{{$sala->id_cine}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
