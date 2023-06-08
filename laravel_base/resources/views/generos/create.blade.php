@extends("layouts.app")
@section("content")
    <div class="container">
        <h2>Crear nuevo descuento</h2>
        <form action="{{url("generos")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" name="desc_desc" id="descripcion" placeholder="Ingresa la descripcion">
            </div>
            <div class="mb-3">
                <label for="descuento" class="form-label">Porcentaje de descuento</label>
                <input type="number" class="form-control" name="porcentaje" id="descuento" placeholder="Ingrese el porcentaje de descuento">
            </div>
            <button type="submit" class=" btn btn-primary">Guardar</button>
            <a href="{{url("generos")}}"class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
