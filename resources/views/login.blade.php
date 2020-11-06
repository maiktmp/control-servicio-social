@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Identifícate</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-5 m-auto">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{$errors->first()}}
                </div>
            @endif
        </div>
    </div>

    <form action="" autocomplete="off" method="post">
        @csrf
        <div class="row">
            <div class="col-4 m-auto">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text"
                           name="username"
                           class="form-control"
                           required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4 m-auto">
                <div class="form-group">

                    <label>Contraseña</label>
                    <input type="text"
                           name="password"
                           class="form-control"
                           required>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
            </div>
        </div>
    </form>

@endsection
