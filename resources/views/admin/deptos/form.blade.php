<div class="row">

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Nombre</label>
            <input type="text"
                   name="nombre" value="{{$departamento->nombre ?? ""}}"
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Jefe</label>
            <input type="text"
                   name="jefe" value="{{$departamento->jefe ?? ""}}"
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Grado</label>
            <input type="text"
                   name="grado" value="{{$departamento->grado ?? ""}}"
                   class="form-control"
                   required>
        </div>
    </div>

</div>
