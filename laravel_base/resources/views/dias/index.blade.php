@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Descripcion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($dias as $dia)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$dia->descripcion_dia}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
