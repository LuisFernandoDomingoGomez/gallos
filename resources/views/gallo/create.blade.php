@extends('layouts.app')

@section('template_title')
    Generar Participante
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
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Gallos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Participantes</li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
        </div>
        <br>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Generar Participante</span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('gallos.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('gallo.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</div>