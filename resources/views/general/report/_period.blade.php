<div style="margin-top: 5px">
    <b style="text-decoration: underline">II. PERIODO REPORTADO</b>
    <div style="display: flex; flex-direction: row; justify-content: space-between">
        <span style="font-size: 0.9em">Del día: <span
                style="text-decoration: underline">{{$data["from"][$number]["day"]}}</span> </span>
        <span style="font-size: 0.9em">mes: <span
                style="text-decoration: underline">{{$data["from"][$number]["month"]}}</span> </span>
        <span style="font-size: 0.9em">año: <span
                style="text-decoration: underline">{{$data["from"][$number]["year"]}}</span> </span>
        <span style="font-size: 0.9em">al día: <span
                style="text-decoration: underline">{{$data["to"][$number]["day"]}}</span> </span>
        <span style="font-size: 0.9em">mes: <span
                style="text-decoration: underline">{{$data["to"][$number]["month"]}}</span> </span>
        <span style="font-size: 0.9em">año: <span
                style="text-decoration: underline">{{$data["to"][$number]["year"]}}</span> </span>
    </div>
    <div style="display: flex; flex-direction: row; justify-content: space-between">
        <span style="font-size: 0.9em">Reporte número: <span
                style="text-decoration: underline">{{$number}}</span> </span>
        <span style="font-size: 0.9em">Horas de este reporte: <span
                style="text-decoration: underline">{{$data["hours"][$number]["report"]}}</span> </span>
        <span style="font-size: 0.9em">Horas acumuladas: <span
                style="text-decoration: underline">{{$data["hours"][$number]["total"]}}</span> </span>
    </div>
</div>

<div style="margin-top: 5px">
    <b style="text-decoration: underline">III. RESUMEN DE ACTIVIDADES: {{$data["activities"][$number]}}</b>
</div>

<div style="margin-top: 5px">
    <table style="border-spacing: 0">
        <tr>
            <td style="border: 1px solid black; height: 140px; width: 40%">

                <div style="display: flex; flex-direction: column; height: 140px;">
                    <span
                        style="font-size: 0.7em;text-align: center;margin-top: auto;">{{$data["person"][$number]["name"]}}</span>
                    <span
                        style="font-size: 0.7em;text-align: center">{{$data["person"][$number]["depto"]}}</span>
                </div>
            </td>
            <td style="border: 1px solid black; width: 30%">
                <div style="display: flex; height: 140px; justify-content: center; text-align: center">
                    <span style="font-size: 0.7em;margin-top: auto">Sello de la Instancia</span>
                </div>
            </td>
            <td style="border: 1px solid black;">
                <div
                    style="height: 70px; border-bottom: solid black 1px; display: flex; justify-content: center; text-align: center">
                        <span
                            style="font-size: 0.7em;margin-top: auto">Firma del/de la Prestante de Servicio Social</span>
                </div>
                <div style="height: 70px; display: flex">
                        <span style="font-size: 0.7em;margin-top: auto; text-align: center">
                            Vo.Bo. de la Oficina de Servicio Social del ITTOL / Fecha de recepción
                        </span>
                </div>
            </td>
        </tr>
    </table>
</div>
