@extends("template.main")

@push("css")
    <link href="  https://printjs-4de6.kxcdn.com/print.min.css"
          rel="stylesheet">

@endpush
@push("scripts")
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".btn-print").click(function (e) {
                e.preventDefault();
                $('#modal-report').modal('show')
                var url = $(this).attr("href");
                $("#btn-send").click(function (ev) {
                    ev.preventDefault();
                    $("#btn-send").html("Espera...")
                    $.post(url, $("#form-report").serialize(), function (response) {
                        $("#btn-send").html("Generar Reporte")
                        $("#div-print").html(response)
                        printJS('div-print', 'html')
                    });
                });
            });
        })
    </script>
@endpush
@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Alumnos Externos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-right">
            <a href="{{route("admin_external_student_create")}}"
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
                        <th scope="col">Matrícula</th>
                        <th scope="col">Procedencia</th>
                        <th scope="col">Folio de servicio social</th>
                        <th scope="col">Horas totales</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($e_students as $student)
                        <tr>
                            <td>{{$student->user->nombre}} {{$student->user->ap_p}} {{$student->user->ap_m}}</td>
                            <td>{{$student->matricula}}</td>
                            <td>{{$student->procedencia}}</td>
                            <td>{{$student->no_of}}</td>
                            <td>{{$student->total_hours}}</td>
                            <td class="text-center d-flex justify-content-center">

{{--                                <a href="{{route("admin_generate_report",["studentId"=>$student->id,"internal"=>false])}}"--}}
{{--                                   class="btn btn-outline-primary text-center d-flex justify-content-center m-1 btn-print"--}}
{{--                                   role="button"--}}
{{--                                   data-toggle="tooltip"--}}
{{--                                   data-placement="top"--}}
{{--                                   title="Imprimir reporte"--}}
{{--                                   aria-pressed="true"> <i class="material-icons md-18">print</i> </a>--}}

                                <a href="{{route("admin_external_availability",["studentId"=>$student->id])}}"
                                   class="btn btn-outline-info text-center d-flex justify-content-center m-1"
                                   role="button"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Disponibilidad"
                                   aria-pressed="true"> <i class="material-icons md-18">pending_actions</i> </a>

                                <a href="{{route("admin_external_student_update",["studentId"=>$student->id])}}"
                                   class="btn btn-outline-success text-center d-flex justify-content-center m-1"
                                   role="button"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Editar"
                                   aria-pressed="true"> <i class="material-icons md-18">create</i> </a>

                                <a href="{{route("admin_external_student_delete",["studentId"=>$student->id])}}"
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
                {{ $e_students->links() }}
            </div>
        </div>
    </div>


    <div id="div-print" style="position: absolute;z-index: -100">

    </div>


    <div class="modal fade"
         id="modal-report"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos del reporte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="form-report" action="" style="padding: 0 1em">
                            @csrf
                            @include("admin.internal_student._form_report",["number"=>1])
                            @include("admin.internal_student._form_report",["number"=>2])
                            @include("admin.internal_student._form_report",["number"=>3])
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-send" type="button" class="btn btn-primary">Generar reporte</button>
                </div>
            </div>
        </div>
    </div>
@endsection
