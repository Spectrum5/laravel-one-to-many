@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center md-4">
        <div class="col">

            {{-- Aggiungo partials errors --}}
            @include('partials.success')

            <h1>
                {{ $category->name }}
            </h1>

            <h6>
                Slug: {{ $category->slug }}
            </h6>

        </div>
    </div>
@endsection
