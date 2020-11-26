@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Alumnos Internos</h2>
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
                        <th scope="col">Número de oficio</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{$student->user->nombre}} {{$student->user->ap_p}} {{$student->user->ap_m}}</td>
                            <td>{{$student->no_ctl}}</td>
                            <td>{{$student->carrera}}</td>
                            <td>{{$student->semestre}}</td>
                            <td>{{$student->no_of}}</td>

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
