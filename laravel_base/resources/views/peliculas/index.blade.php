@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Titulo</td>
                    <td>Indice director</td>
                    <td>Indice genero</td>
                    <td>Indice clasificacion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($peliculas as $pelicula)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$pelicula->titulo}}</td>
                        <td>{{$pelicula->id_director}}</td>
                        <td>{{$pelicula->id_genero}}</td>
                        <td>{{$pelicula->id_clas}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
