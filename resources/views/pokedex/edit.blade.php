@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Pokedex
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Pokedex</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pokedexes.update', $pokedex->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pokedex.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
