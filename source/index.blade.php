@extends('_layouts.main')

@section('body')
    @include('_partials/tagline')

    @include('_partials/portfolio-segment', ['block_title' => 'Latest Works'])

    @include('_partials/blog-segment', ['block_title' => 'Latest Articles'])
@endsection
