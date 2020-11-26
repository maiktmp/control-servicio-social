@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Departamentos</h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Jefe</th>
                        <th scope="col">Grado</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($departamentos as $depto)
                        <tr>
                            <td>{{$depto->nombre}}</td>
                            <td>{{$depto->jefe}}</td>
                            <td>{{$depto->grado}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Sin datos disponibles</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $departamentos->links() }}
            </div>
        </div>
    </div>
@endsection
