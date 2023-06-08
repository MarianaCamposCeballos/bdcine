@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <a href="{{url("generos/create")}}" class="btn btn-primary">Agregar</a>
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Descripcion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($generos as $genero)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$genero->desc_genero}}</td>
                    </tr>
                    <form action="{{route("generos.destroy",$generos->id_genero)}}" method="POST">
                         @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">
                            Eliminar
                        </button>
                    </form>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
