@extends("template.main")

@section("content")
    <div class="row">
        <div class="col text-center text-center">
            <h2>Oferta educativa</h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Coordinador</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($carreras as $car)
                        <tr>
                            <td>{{$car->nombre}}</td>
                            <td>{{$car->coordinador}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Sin datos disponibles</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $carreras->links() }}
            </div>
        </div>
    </div>
@endsection
