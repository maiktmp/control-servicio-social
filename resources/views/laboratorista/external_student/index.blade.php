@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Alumnos Externos</h2>
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
                        <th scope="col">Número de oficio</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($e_students as $student)
                        <tr>
                            <td>{{$student->user->nombre}} {{$student->user->ap_p}} {{$student->user->ap_m}}</td>
                            <td>{{$student->matricula}}</td>
                            <td>{{$student->procedencia}}</td>
                            <td>{{$student->no_of}}</td>
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
@endsection
