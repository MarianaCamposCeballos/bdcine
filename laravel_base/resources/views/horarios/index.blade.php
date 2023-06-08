@extends("layouts.app")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8 bg-white pt-3">
            <table class="table">
                <thead>
                <tr>
                    <td>Indice</td>
                    <td>Indice dia</td>
                    <td>Hora inicio</td>
                    <td>Hora fin</td>
                </tr>
                </thead>
                <tbody>
                @foreach($horarios as $horario)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$horario->id_dia}}</td>
                        <td>{{$horario->hi}}</td>
                        <td>{{$horario->hf}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
