---
permalink: 404.html
---

@extends('_layouts.main')

@section('body')
    <div class="container m-xs-b-6 documentation-page">
        <div class="row">
            <div class="col-xs-12 p-xs-y-8 text-center">
                <h2>Something went wrong...</h2>
                <h4 class="m-xs-y-2">
                    We couldn't find the page you were looking for.
                    {{ $page->getPath() }}
                </h4>
            </div>
        </div>
    </div>
@endsection