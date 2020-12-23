@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Alumnos Internos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-right">
            <a href="{{route("admin_internal_student_create")}}"
               class="btn btn-outline-success"
               role="button"
               aria-pressed="true">Crear alumno</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">No. Control</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Folio de servicio social</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{$student->user->nombre}} {{$student->user->ap_p}} {{$student->user->ap_m}}</td>
                            <td>{{$student->no_ctl}}</td>
                            <td>{{$student->carrera->nombre}}</td>
                            <td>{{$student->semestre}}</td>
                            <td>{{$student->no_of}}</td>
                            <td class="text-center d-flex justify-content-center">

                                <a href="{{route("admin_internal_student_update",["studentId"=>$student->id])}}"
                                   class="btn btn-outline-success text-center d-flex justify-content-center m-1"
                                   role="button"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Editar"
                                   aria-pressed="true"> <i class="material-icons md-18">create</i> </a>

                                <a href="{{route("admin_internal_student_delete",["studentId"=>$student->id])}}"
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
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
