@extends('_layouts.main')

@section('body')
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-screen-sm sm:text-center sm:mx-auto">
            <h2 class="mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Website Site and Project Portfolio
            </h2>
            <p class="text-base text-gray-700 md:text-lg sm:px-4">
                Sites I've either built or been responsible for the updates or maintenance of.
            </p>
            @include('_partials.hr')
        </div>
        <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-3 sm:row-gap-6 sm:grid-cols-2">
            @foreach ($portfolio as $site)
                <a href="{{ $site->getPath() }}" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                        @if ($site->github_user)
                            <img class="object-contain w-full h-56 md:h-64 xl:h-80"
                         @else
                            <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                         @endif
                             src="/assets/images/portfolio/{{ $site->image_main }}" alt=""/>
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <p class="mb-4 text-lg font-bold text-gray-100">{{ $site->title }}</p>
                            <p class="text-sm tracking-wide text-gray-300">
                                {{ $site->intro }}
                            </p>
                            @if($site->technologies)
                                <div class="flex flex-wrap justify-starts items-center mt-4">
                                    @foreach($site->technologies as $tech)
                                        <div class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-yellow-400 rounded-2xl mb-1.5">
                                            #{{ $tech }}
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection