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
                   name="user[nombre]" value='{{$student->user->nombre ?? old("user.nombre")}}'
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Apellido Paterno</label>
            <input type="text"
                   name="user[ap_p]" value='{{$student->user->ap_p ?? old("user.ap_p")}}'
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Apellido Materno</label>
            <input type="text"
                   name="user[ap_m]" value='{{$student->user->ap_m ?? old("user.ap_m")}}'
                   class="form-control"
                   required>

        </div>
    </div>
</div>

<div class="row">

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Matrícula</label>
            <input type="text"
                   name="matricula" value='{{$student->matricula ?? old("student.matricula")}}'
                   class="form-control"
                   required>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Procedencia</label>
            <input type="text"
                   name="procedencia" value='{{$student->procedencia ?? old("student.procedencia")}}'
                   class="form-control"
                   required>
        </div>
    </div>

        <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Departamento asiganado</label>
            <select name="user[departamento_id]" class="form-control">
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

            <label>Periodo escolar</label>
            <select name="periodo" id="pd"
            class="form-control"
            required>
              <option>Enero/Septiembre 2020</option>
              <option>Septiembre/Marzo 2021</option>
            </select>

        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Folio de servicio social</label>
            <input type="text"
                   name="no_of" value='{{$student->no_of ?? old("student.no_of")}}'
                   class="form-control"
                   required>
        </div>
    </div>
    </div>

    <div class="row">
  <div class="col-12 col-md-4">
        <div class="form-group">

            <label>Usuario</label>
            <input type="text"
                   name="user[username]" value='{{$student->user->username ?? old("user.username")}}'
                   class="form-control"
                   required>

        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password"
                   name="user[password]"
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
                   name="user[password_confirmation]"
                   class="form-control">
            @isset($user)
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Si desea conservar la contraseña, deje en blanco este campo.
                </small>
            @endisset
        </div>
    </div>
  </div>

