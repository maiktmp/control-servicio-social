@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Laboratoristas</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-right">
            <a href="{{route("admin_laboratorista_create")}}"
               class="btn btn-outline-success"
               role="button"
               aria-pressed="true">Crear laboratorista</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($labos as $labo)
                        <tr>
                            <td>{{$labo->user->nombre}} {{$labo->user->ap_p}} {{$labo->user->ap_m}}</td>
                            <td class="text-center d-flex justify-content-center">

                                <a href="{{route("admin_laboratorista_update",["laboId"=>$labo->id])}}"
                                   class="btn btn-outline-success text-center d-flex justify-content-center m-1"
                                   role="button"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Editar"
                                   aria-pressed="true"> <i class="material-icons md-18">create</i> </a>

                                <a href="{{route("admin_laboratorista_delete",["laboId"=>$labo->id])}}"
                                   class="btn btn-outline-danger text-center d-flex justify-content-center m-1"
                                   role="button"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Eliminar"
                                   aria-pressed="true"> <i class="material-icons md-18">delete</i> </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Sin datos disponibles</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $labos->links() }}
            </div>
        </div>
    </div>
@endsection
