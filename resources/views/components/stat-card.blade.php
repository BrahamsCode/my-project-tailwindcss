@props(['title', 'value', 'change', 'type' => 'increase'])
<div class="p-6 transition-all bg-white rounded-lg shadow-sm dark:bg-gray-800 hover:shadow-md">
    <div class="flex flex-col">
        <div class="flex items-center justify-between">
            <dt class="text-sm font-normal text-gray-600 dark:text-gray-400">{{ $title }}</dt>
            @if(isset($icon))
                <div class="text-gray-400">{{ $icon }}</div>
            @endif
        </div>
        <div class="flex items-baseline mt-4">
            <dd class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $value }}</dd>
            <span class="ml-2 text-sm font-medium {{ $type === 'increase' ? 'text-green-600' : 'text-red-600' }}">
                {{ $change }}
            </span>
        </div>
    </div>
</div>
