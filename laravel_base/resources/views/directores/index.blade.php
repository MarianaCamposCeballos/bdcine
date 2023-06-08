@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Nombre</td>
                    <td>Apellido paterno</td>
                    <td>Apellido materno</td>
                </tr>
                </thead>
                <tbody>
                @foreach($directores as $director)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$director->nom_d}}</td>
                        <td>{{$director->ap_d}}</td>
                        <td>{{$director->am_d}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
