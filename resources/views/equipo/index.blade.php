@extends('layouts.app')

@section('template_title')
    Equipos
@endsection

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Gallos</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('participantes.index') }}">Clasificacion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Equipos | Inicio</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    <strong> Equipos </strong>
                                    {{ __('| Clasificacion por Puntos: ') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('equipo.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                    <i class="fas fa-file-pdf"></i>{{ __(' PDF') }}
                                    </a>
                                </div>

                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>

                                            <th>No</th>
                                            <th>Nombre</th>
                                            <th>Puntaje</th>
                                            <th>Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($equipos as $equipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $equipo->equipo }}</td>

                                            <td><i class="fas fa-arrow-up text-success mr-3"></i>
                                                {{ $equipo->puntaje_total }}
                                            </td>

                                            <td>
                                                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>