@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Actualizar Laboratorista</h2>
        </div>
    </div>

    <form action="" autocomplete="off" method="post">
        @csrf
        @include("admin.laboratorista.form")
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </div>
    </form>

@endsection
