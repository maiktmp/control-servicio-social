@extends("template.main")


@push("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es-mx.min.js"
            integrity="sha512-Qy4cmZ6v7vnVEc0cn/BIj9q15eB98do4hMvu8xtc/H+v+YYpdpDrB35flHS3NPLbZUpe1npSYY/u+Gi3UB61vw=="
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script>
        $(document).ready(function ($q) {

            $("#btn-register").click(function (e){
                // https://api.jquery.com/jquery.get/
                $.get(' {{route("student_register_hour")}} ', function (response){
                   console.log(response)
                    Swal.fire(
                        'Aviso',
                        response.message,
                        'success'
                    )
                });
            });
            // Establece la fecha de hoy
            $("#current-date").html(moment().format('MMMM Do YYYY'));


            // Establece el reloj
            $("#current-hour").html(moment().format('h:mm:ss a'));
            setInterval(
                function () {
                    $("#current-hour").html(moment().format('h:mm:ss a'));
                },
                1000
            )
        });
    </script>

@endpush
@section("content")

    <div class="row">
        <div class="col-12 text-center">
            <h1>Bienvenido {{Auth::user()->nombre}}</h1>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12 text-center">
            <h2 id="current-date" class="mt-3 text-success"></h2>
            <h3 id="current-hour" class="mt-3 text-success"></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4 text-center">
            <button id="btn-register" class="btn btn-primary">Registrar hora</button>
        </div>
    </div>

@endsection
