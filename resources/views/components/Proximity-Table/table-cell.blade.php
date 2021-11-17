@props([
    'title' => false
])

<td  {{$attributes->merge(['class' => "px-5 py-5 border-b dark:border-gray-400 dark:bg-gray-300 dark:text-gray-100 border-gray-200 bg-white text-center text-sm"])}}>
    <div class="ml-3">
        <p class="text-gray-900 dark:text-gray-900 w-11/12 truncate overflow-hidden font-medium">
           {{$title}}
        </p>
    </div>
</td>
