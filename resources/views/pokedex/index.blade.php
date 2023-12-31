@extends('layouts.app')

@section('template_title')
    Pokedex
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pokedex') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pokedexes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Tipo</th>
										<th>Tamaño</th>
										<th>Peso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pokedexes as $pokedex)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pokedex->Nombre }}</td>
											<td>{{ $pokedex->Tipo }}</td>
											<td>{{ $pokedex->Tamaño }}</td>
											<td>{{ $pokedex->Peso }}</td>

                                            <td>
                                                <form action="{{ route('pokedexes.destroy',$pokedex->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pokedexes.show',$pokedex->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pokedexes.edit',$pokedex->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pokedexes->links() !!}
            </div>
        </div>
    </div>
@endsection
