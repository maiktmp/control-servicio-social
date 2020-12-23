<div class="row">
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            {{$errors->first()}}
        </div>
    @endif
</div>

<div class="row">

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Nombre</label>
            <input type="text"
                   name="user[nombre]" value='{{$labo->user->nombre ?? old("user.nombre")}}'
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Apellido Paterno</label>
            <input type="text"
                   name="user[ap_p]" value='{{$labo->user->ap_p ?? old("user.ap_p")}}'
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Apellido Materno</label>
            <input type="text"
                   name="user[ap_m]" value='{{$labo->user->ap_m ?? old("user.ap_m")}}'
                   class="form-control"
                   required>

        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Departamento</label>
            <select name="user[departamento_id]" class="form-control">
                @forelse(\App\Models\Departamentos::mapData() as $deptoId => $deptoName)
                    <option value="{{$deptoId}}">{{$deptoName}}</option>
                @empty
                    <option value="0">Sin departamentos</option>
                @endforelse

            </select>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Usuario</label>
            <input type="text"
                   name="username" value='{{$labo->user->username ?? old("labo.username")}}'
                   class="form-control"
                   required>

        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password"
                   name="password"
                   class="form-control">
            @isset($student)
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Si desea conservar la contraseña, deje en blanco este campo.
                </small>
            @endisset
        </div>
    </div>
    
    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Confirmar Contraseña</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control">
            @isset($user)
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Si desea conservar la contraseña, deje en blanco este campo.
                </small>
            @endisset
        </div>
    </div>
  </div>
