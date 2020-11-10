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
          

        </div>

      </div>
    </section>
@endsection
