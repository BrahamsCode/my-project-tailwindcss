@props(['title', 'value', 'change', 'type' => 'increase'])
<div class="p-6 transition-shadow bg-white rounded-lg dark:bg-gray-800 hover:shadow-lg">
    <div class="flex items-center space-x-4">
        @if(isset($icon))
            <div class="flex-shrink-0">
                {{ $icon }}
            </div>
        @endif
        <div class="flex-1 min-w-0">
            <p class="text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                {{ $title }}
            </p>
            <div class="flex items-baseline">
                <p class="text-2xl font-semibold text-gray-900 dark:text-white">
                    {{ $value }}
                </p>
                <p class="ml-2 flex items-baseline text-sm font-semibold {{ $type === 'increase' ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400' }}">
                    {{ $change }}
                </p>
            </div>
        </div>
    </div>
</div>
