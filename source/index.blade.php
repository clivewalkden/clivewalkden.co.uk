@extends('_layouts.main')

@section('body')
    @include('_partials/tagline')

    @include('_partials/portfolio-segment', ['block_title' => 'My Latest Projects'])

    @include('_partials/blog-segment', ['block_title' => 'My Latest Blog Articles'])
@endsection
