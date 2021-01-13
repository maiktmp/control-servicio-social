<div class="row mt-3">
    <div class="col-12">
        <h3>Reporte {{$number}}</h3>
    </div>
    <div class="col-12 text-center">
        <b>Periodo reportado</b>
    </div>
    <div class="col-12 text-center">
        <b>Del</b>
    </div>
    <div class="col-4">
        <input type="text"
               name="from[{{$number}}][day]"
               class="form-control"
               placeholder="Día">
    </div>
    <div class="col-4">
        <select type="text"
                name="from[{{$number}}][month]"
                class="form-control"
                placeholder="Mes">
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
        </select>
    </div>
    <div class="col-4">
        <input type="text"
               class="form-control"
               name="from[{{$number}}][year]"
               value="{{\Carbon\Carbon::now()->format('Y')}}"
               placeholder="Año">
    </div>
    <div class="col-12 text-center">
        <b>Al</b>
    </div>
    <div class="col-4">
        <input type="text"
               name="to[{{$number}}][day]"
               class="form-control"
               placeholder="Día">
    </div>
    <div class="col-4">
        <select type="text"
                name="to[{{$number}}][month]"
                class="form-control"
                placeholder="Mes">
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
        </select>
    </div>
    <div class="col-4">
        <input type="text"
               class="form-control"
               name="to[{{$number}}][year]"
               value="{{\Carbon\Carbon::now()->format('Y')}}"
               placeholder="Año">
    </div>
    <div class="col-12 text-center">
        <b>Horas</b>
    </div>
    <div class="col-6">
        <input type="text"
               name="hours[{{$number}}][report]"
               class="form-control"
               placeholder="Horas del reporte">
    </div>
    <div class="col-6">
        <input type="text"
               name="hours[{{$number}}][total]"
               class="form-control"
               placeholder="Horas Acumuladas">
    </div>
    <div class="col-12 text-center">
        <b>Actividades</b>
    </div>
    <div class="col-12">
        <textarea type="text"
                  rows="4"
                  name="activities[{{$number}}]"
                  class="form-control"
                  placeholder="Actividades realizadas">
        </textarea>
    </div>
    <div class="col-12 text-center">
        <b>Firma</b>
    </div>
    <div class="col-12">
        <input type="text"
               name="person[{{$number}}][name]"
               class="form-control"
               value="{{Auth::user()->nombre}}"
               placeholder="Persona que firma">
    </div>
    <div class="col-12 mt-2">
        <input type="text"
               name="person[{{$number}}][depto]"
               class="form-control"
               placeholder="Cargo">
    </div>
</div>
