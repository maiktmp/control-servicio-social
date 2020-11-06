@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Registrar Alumno Externo</h2>
        </div>
    </div>

    <form action="" autocomplete="off" method="post">
        @csrf
        @include("admin.external_student.form")
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Crear</button>
            </div>
        </div>
    </form>

@endsection
