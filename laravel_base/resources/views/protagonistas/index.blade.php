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
                @foreach($protagonistas as $protagonista)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$protagonista->nom_p}}</td>
                        <td>{{$protagonista->ap_p}}</td>
                        <td>{{$protagonista->am_p}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
