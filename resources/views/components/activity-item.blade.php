@props(['icon', 'title', 'description', 'time', 'type' => 'default'])
<div class="flex items-start py-3 space-x-3">
    <div class="flex-shrink-0">
        <span @class([
            'inline-flex items-center justify-center h-8 w-8 rounded-full',
            'bg-blue-100 text-blue-600' => $type === 'default',
            'bg-green-100 text-green-600' => $type === 'success',
            'bg-yellow-100 text-yellow-600' => $type === 'warning',
        ])>
            {{ $icon }}
        </span>
    </div>
    <div class="flex-1 min-w-0">
        <div class="text-sm font-medium text-gray-900 truncate dark:text-white">
            {{ $title }}
        </div>
        <p class="text-sm text-gray-500 dark:text-gray-400">
            {{ $description }}
        </p>
        <span class="text-xs text-gray-400 dark:text-gray-500">
            {{ $time }}
        </span>
    </div>
</div>
