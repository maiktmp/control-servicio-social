<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    #main-container {
        padding: 0 5em;
    }

</style>
<body>
<div id="main-container">
    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center">
        <img width="60" height="60" src="{{asset("img/logo-tec.png")}}" alt="">
        <h5 style="text-align: center; color: #5a6268">
            INSTITUTO TECNOLÓGICO DE TOLUCA <br>
            DEPARTAMENTO DE GESTIÓN TECNOLÓGICA Y VINCULACIÓN <br>
            OFICINA DE SERVICIO SOCIAL Y DESARROLLO COMUNITARIO <br>
            REPORTE BIMESTRAL
        </h5>
        <img width="60" height="60" src="{{asset("img/logo-sgc.png")}}" alt="">
    </div>

    <div>
        <b style="text-decoration: underline">I. DATOS PERSONALES</b>
        <div style="display: flex; flex-direction: row; justify-content: space-between">
            <span style="font-size: 0.9em">Número de control: {{$user->no_ctl}}</span>
            <span style="font-size: 0.9em">Carrera: {{$user->carrera->nombre}}</span>
            <span
                style="font-size: 0.9em">Nombre: {{$user->user->nombre}} {{$user->user->ap_p}} {{$user->user->ap_m}}</span>
        </div>
    </div>
    @include("general.report._period",["number"=>1])
    @include("general.report._period",["number"=>2])
    @include("general.report._period",["number"=>3])
</div>

<script>
    // printJS('main-container', 'html')
</script>
</body>
</html>
