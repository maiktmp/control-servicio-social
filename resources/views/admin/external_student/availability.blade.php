@extends("template.main")

@push("css")
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endpush
@push("scripts")
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script>
        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '7',
            maxTime: '10:00pm',
            defaultTime: '7',
            startTime: '10:00',
            dynamic: true,
            dropdown: true,
            scrollbar: true
        });
    </script>
@endpush

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Disponibilidad de {{$student->user->nombre}} {{$student->user->ap_p}} {{$student->user->ap_m}}</h2>
        </div>
    </div>

    <form action="" autocomplete="off" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class=" col-12 col-sm-4">
                <div class="form-group">

                    <label>Día</label>
                    <select class="form-control" name="dia">
                        <option>Lunes</option>
                        <option>Martes</option>
                        <option>Miércoles</option>
                        <option>Jueves</option>
                        <option>Viernes</option>
                    </select>

                </div>
            </div>

            <div class=" col-12 col-sm-4">
                <div class="form-group">

                    <label>Entrada</label>
                    <input type="text"
                           name="hr_ent"
                           readonly
                           class="form-control timepicker"
                           required>
                    <small class="form-text text-muted">
                        Haga click en la hora para cambiar
                    </small>

                </div>
            </div>

            <div class=" col-12 col-sm-4">
                <div class="form-group">

                    <label>Salida</label>
                    <input type="text"
                           name="hr_sal"
                           readonly
                           class="form-control timepicker"
                           required>
                    <small class="form-text text-muted">
                        Haga click en la hora para cambiar
                    </small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Agregar</button>
            </div>
        </div>
    </form>

    <div class="row mt-2">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Día</td>
                    <td>Entrada</td>
                    <td>Salida</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @forelse($disponibilidad as $disp)
                    <tr>
                        <td>{{$disp->dia}}</td>
                        <td>{{$disp->hr_ent}}</td>
                        <td>{{$disp->hr_sal}}</td>
                        <td style="width: 5%">

                            <a href="{{route("admin_external_delete_availability",["availabilityId"=>$disp->id])}}"
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
                        <td colspan="4" class="text-center">No hay datos registrados</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
