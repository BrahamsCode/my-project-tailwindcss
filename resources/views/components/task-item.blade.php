@props(['task', 'date'])
<div class="flex items-center justify-between py-3">
    <div class="flex items-start space-x-3">
        <input type="checkbox" class="mt-1 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700">
        <div>
            <p class="text-sm font-medium text-gray-900 dark:text-white">
                {{ $task }}
            </p>
            <p class="text-xs text-gray-500 dark:text-gray-400">
                {{ $date }}
            </p>
        </div>
    </div>
</div>
