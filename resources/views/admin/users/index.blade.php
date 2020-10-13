@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Usuarios</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-right">
            <a href="{{route("admin_users_create")}}"
               class="btn btn-outline-success"
               role="button"
               aria-pressed="true">Crear usuario</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo de usuario</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Usuario</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{$user->nombre}} {{$user->ap_p}} {{$user->ap_m}}</td>
                            <td>{{$user->tipo_usr}}</td>
                            <td>{{$user->departamento->nombre}}</td>
                            <td>{{$user->username}}</td>
                            <td class="text-center d-flex justify-content-center">

                                <a href="{{route("admin_users_update",["userId"=>$user->id])}}"
                                   class="btn btn-outline-success text-center d-flex justify-content-center m-1"
                                   role="button"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Editar"
                                   aria-pressed="true"> <i class="material-icons md-18">create</i> </a>

                                <a href="{{route("admin_users_delete",["userId"=>$user->id])}}"
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
