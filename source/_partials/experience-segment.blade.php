<?php
use Carbon\Carbon;
?>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

    @includeWhen($block_title, '_partials.title', ['block_title' => $block_title])

    <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-4">
        @foreach ($experience as $exp)
            @php
                $perc = ($exp->length/$page->start->diffInYears(Carbon::now())) * 100;

                if ($perc < 33) :
                    $colour = 'red';
                elseif ($perc > 66) :
                    $colour = 'green';
                else:
                    $colour = 'yellow';
                endif
            @endphp
            <div>
                <div class="bg-white rounded-lg w-4/5 shadow block p-4 m-auto">
                    <div>
                        {{ $exp->title }}
                        @if(!$exp->in_use)
                            <span class="italic text-xs">(Not in use currently)</span>
                        @endif
                    </div>
                    <div class="w-full h-6 bg-gray-400 rounded-full mt-3">
                        <div class="h-full text-center text-s text-white bg-{{$colour}}-500 rounded-full" style="width: {{ $perc }}%">
                            {{ $exp->length }} Years
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>