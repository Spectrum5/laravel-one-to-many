@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center md-4">
            <div class="col">
                <h1>
                    Tutte le categorie
                </h1>

                <a href="{{ route('admin.categories.create') }}" class="btn btn-success">
                    Aggiungi categoria
                </a>
            </div>
        </div>

        {{-- Aggiungo partials success --}}
        @include('partials.success')

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Slug</th>
                            <th scope="col">?</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>?</td>
                                <td>
                                    <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-primary">
                                        Dettagli
                                    </a>

                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">
                                        Aggiorna
                                    </a>

                                    <form 
                                        class="d-inline-block" 
                                        action="{{ route('admin.categories.destroy', $category->id) }}" 
                                        method="POST"
                                        onsubmit="return confirm('sei sicuro di voler eliminare questo post?');">
                                        @csrf
                                        @method("DELETE")

                                        <button class="btn btn-danger">
                                            Elimina
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
