@extends("template.main")


@push("scripts")

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script>
        $(document).ready(function ($q) {

            $(".btn-accept").click(function (e) {
                e.preventDefault();
                var url = $(this).attr("href")
                $.post(
                    url,
                    {
                        check: true,
                        "_token": "{{ csrf_token() }}",
                    }).done(function (data) {
                    window.location.reload()
                });
            });

            $(".btn-deny").click(function (e) {
                e.preventDefault();
                var url = $(this).attr("href")
                $.post(
                    url,
                    {
                        check: false,
                        "_token": "{{ csrf_token() }}",
                    }).done(function (data) {
                    window.location.reload()
                });
            });


            $(".btn-comments").click(function (e) {
                e.preventDefault();
                var url = $(this).attr("href")
                $('#modal-comment').modal('show')
                console.log(url)
                $("#btn-send").click(function () {
                    $.post(
                        url,
                        {
                            comment: $("#text-comments").val(),
                            "_token": "{{ csrf_token() }}",
                        }).done(function (data) {
                        window.location.reload()
                    });
                    ;
                });
            });
        });
    </script>

@endpush

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Registros {{ $type==="internal" ? "Internos" : "Externos"  }} </h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Alumno</th>
                        <th scope="col">Hr. Entrada</th>
                        <th scope="col">Hr. Salida</th>
                        <th scope="col">Total horas</th>
                        <th scope="col">Check</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($registers as $register)
                        <tr>
                            <td>{{$register->student->user->nombre}}</td>
                            <td>{{$register->hr_ent->format('h:i:s A')}}</td>
                            <td>{{$register->hr_sal->format('h:i:s A')}}</td>
                            <td>{{$register->hr_totales}}</td>
                            <td>{{$register->check ? "Si" : "No"}}</td>
                            <td>{{$register->comentarios}}</td>
                            <td class="text-center d-flex justify-content-center">
                                <a href="{{route("admin_comment_create", ["registerId" => $register->id, "type"=>$type])}}"
                                   class="btn btn-outline-primary text-center d-flex justify-content-center m-1 btn-comments"
                                   role="button"
                                   data-_token="{{csrf_token()}}"
                                   data-toggle="tooltip"
                                   data-placement="top"
                                   title="Agregar comentario"
                                   aria-pressed="true"> <i class="material-icons md-18">feedback</i> </a>

                                @if($register->check === null)
                                    <a href="{{route("admin_check_register", ["registerId" => $register->id, "type"=>$type])}}"
                                       class="btn btn-outline-success text-center d-flex justify-content-center m-1 btn-accept"
                                       role="button"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Aceptar registro"
                                       aria-pressed="true"> <i class="material-icons md-18">done</i> </a>

                                    <a href="{{route("admin_check_register", ["registerId" => $register->id, "type"=>$type])}}"
                                       class="btn btn-outline-danger text-center d-flex justify-content-center m-1 btn-deny"
                                       role="button"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Rechazar registro"
                                       aria-pressed="true"> <i class="material-icons md-18">clear</i> </a>
                                @endif

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Sin datos disponibles</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $registers->links() }}
            </div>
        </div>
    </div>


    <div class="modal fade"
         id="modal-comment"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Escribe el comentario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label></label>
                                <textarea class="form-control" id="text-comments" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-send" type="button" class="btn btn-primary">Guardar comentario</button>
                </div>
            </div>
        </div>
    </div>
@endsection
