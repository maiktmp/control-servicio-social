@extends("template.main")

@section("content")
    <div>
	<br/>
	<br/>
	<br/>
	<h1 align="center">
		Gestión de datos
	</h1>
</div>
<section id="features" class="features">
      <div class="ourstory">

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-users"></i></div>
            <h4 class="title"><a href="{!! asset('admin/users/')!!}">Usuarios</a></h4>
            <p class="description">Vea y administre los usuarios registrados en el sistema</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-group-students"></i></div>
            <h4 class="title"><a href="{!! asset('admin/internal-students/')!!}">Alumnos internos</a></h4>
            <p class="description">Conozca y administre los alumnos INTERNOS registrados, consulte registros, genere reportes y disponibilidad de los alumnos</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-users-alt-1"></i></div>
            <h4 class="title"><a href="{!! asset('admin/external-students/')!!}">Alumnos externos</a></h4>
            <p class="description">Conozca y administre los alumnos EXTERNOS registrados, consulte registros, genere reportes y disponibilidad de los alumnos</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-ui-check"></i></div>
            <h4 class="title"><a href="{!! asset('admin/laboratorista/')!!}">Laboratoristas</a></h4>
            <p class="description">Conozca y administre los encargados quienes verifican la asistencia y actividades de los alumnos.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-institution"></i></div>
            <h4 class="title"><a href="{!! asset('admin/departments/')!!}">Departamentos</a></h4>
            <p class="description">Consulte y administre los departamentos registrados</p>
          </div>
           <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-education"></i></div>
            <h4 class="title"><a href="{!! asset('admin/carreras/')!!}">Oferta educativa</a></h4>
            <p class="description">Consulte las carreras disponibles</p>
          </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="icofont-checked"></i></div>
                <h4 class="title"><a href="{!! route("admin_checks_index",["type"=>"internal"])!!}">Chequeo de registros internos</a></h4>
                <p class="description">Revise los registros realizados por los alumnos internos en sus horas de servicio social</p>
            </div>

            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="icofont-checked"></i></div>
                <h4 class="title"><a href="{!! route("admin_checks_index",["type"=>"external"])!!}">Chequeo de registros externos</a></h4>
                <p class="description">Revise los registros realizados por los alumnos externos en sus horas de servicio social</p>
            </div>

        </div>

      </div>
    </section>
@endsection
