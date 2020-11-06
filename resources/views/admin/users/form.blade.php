<div class="row">

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Nombre</label>
            <input type="text"
                   name="nombre" value="{{$user->nombre ?? ""}}"
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Apellido Paterno</label>
            <input type="text"
                   name="ap_p" value="{{$user->ap_p ?? ""}}"
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Apellido Materno</label>
            <input type="text"
                   name="ap_m" value="{{$user->ap_m ?? ""}}"
                   class="form-control"
                   required>

        </div>
    </div>


    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Usuario</label>
            <input type="text"
                   name="username" value="{{$user->username ?? ""}}"
                   class="form-control"
                   required>

        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Rol</label>
            <select name="tipo_usr" class="form-control">
                <option value="1">Admin</option>
{{--                <option value="2">Laboratorista</option>--}}
{{--                <option value="3">Interno</option>--}}
{{--                <option value="4">Externo</option>--}}
            </select>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Departamento</label>
            <select name="departamento_id" class="form-control">
                @forelse(\App\Models\Departamentos::mapData() as $deptoId => $deptoName)
                    <option value="{{$deptoId}}">{{$deptoName}}</option>
                @empty
                    <option value="0">Sin departamentos</option>
                @endforelse

            </select>
        </div>
    </div>


    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password"
                   name="password"
                   class="form-control">
            @isset($user)
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Si desea conservar la contraseña, deje en blanco este campo.
                </small>
            @endisset
        </div>
    </div>
</div>
