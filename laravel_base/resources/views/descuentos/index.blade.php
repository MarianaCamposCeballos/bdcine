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
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($descuentos as $descuento)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$descuento->desc_desc}}</td>
                        <td>{{$descuento->porcentaje}}</td>
                        <td style="display: flex">
                            <a data-toggle="tooltip" data-placement="bottom"
                               title="Editar descuento"
                               type="button"
                               href="{{route('descuentos.edit',$descuento->id_descuento)}}"
                               class="btn btn-sm btn-success"><i class="far fa-edit"></i>
                            </a>

                            <form method="POST" action="{{route('descuentos.destroy',$descuento->id_descuento)}}">
                                @csrf
                                @method('delete')
                                <button data-toggle="tooltip" data-placement="left"
                                        title="Eliminar desceunto"
                                        type="submit"
                                        class="btn btn-danger btn-sm" style="margin-left: 10px">
                                    <i class="fas fa-trash-alt">
                                    </i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
