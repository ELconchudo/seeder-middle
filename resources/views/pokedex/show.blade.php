@extends('layouts.app')

@section('template_title')
    {{ $pokedex->name ?? "{{ __('Show') Pokedex" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pokedex</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pokedexes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pokedex->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $pokedex->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Tamaño:</strong>
                            {{ $pokedex->Tamaño }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $pokedex->Peso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
