@props([
    'title' => false,
    'pagination' => false,
    'button' => false
])
<div class="container mx-auto px-4 sm:px-8">
    <div class="mt-4">
        @if ($title)
            <div class=" flex items-center justify-between px-5">
                <div>
                    <h2 class="text-2xl font-semibold dark:text-gray-100 leading-tight">{{$title}}</h2>
                </div>

                @if ($button)
                    <div>
                        {{$button}}
                    </div>
                @endif


            </div>
        @endif

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">

                    <thead>
                    <x-Proximity-Table.table-row>
                        {{$thead}}
                    </x-Proximity-Table.table-row>

                    </thead>

                    <tbody>
                    {{$tbody}}
                    </tbody>
                </table>
            </div>
            @if($pagination)

                {{$pagination}}

            @endif

        </div>
    </div>
</div>
