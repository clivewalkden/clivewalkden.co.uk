@extends('_layouts.main')

@section('body')
    <p>Total of {{ $portfolio->count() }} sites</p>

    <ul>
        @foreach ($portfolio as $site)
            <li>
                <a href="{{ $site->getPath() }}">{{ $site->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection