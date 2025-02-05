<!-- resources/views/components/stats-card.blade.php -->
@props(['title', 'value', 'change', 'type' => 'increase'])
<div class="overflow-hidden bg-white rounded-lg shadow dark:bg-gray-800">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                {{ $icon ?? '' }}
            </div>
            <div class="flex-1 w-0 ml-5">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                        {{ $title }}
                    </dt>
                    <dd class="flex items-baseline">
                        <div class="text-2xl font-semibold text-gray-900 dark:text-white">
                            {{ $value }}
                        </div>
                        <div
                            class="ml-2 flex items-baseline text-sm font-semibold {{ $type === 'increase' ? 'text-green-600' : 'text-red-600' }}">
                            <svg class="self-center flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                aria-hidden="true">
                                @if ($type === 'increase')
                                    <path fill-rule="evenodd"
                                        d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                @else
                                    <path fill-rule="evenodd"
                                        d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                @endif
                            </svg>
                            <span class="sr-only">{{ $type === 'increase' ? 'Increased' : 'Decreased' }} by</span>
                            {{ $change }}
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<!-- resources/views/components/data-table.blade.php -->
@props(['headers', 'rows'])
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow dark:border-gray-700 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            @foreach ($headers as $header)
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                                    {{ $header }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($rows as $row)
                            <tr>
                                @foreach ($row as $cell)
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-300">
                                        {{ $cell }}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- resources/views/components/chart-card.blade.php -->
@props(['title'])
<div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
    <h3 class="mb-4 text-lg font-medium leading-6 text-gray-900 dark:text-white">
        {{ $title }}
    </h3>
    <div class="relative" style="height: 300px;">
        {{ $slot }}
    </div>
</div>

<!-- resources/views/components/alert.blade.php -->
@props(['type' => 'info', 'message'])
@php
    $classes = [
        'info' => 'bg-blue-50 border-blue-500 text-blue-700',
        'success' => 'bg-green-50 border-green-500 text-green-700',
        'warning' => 'bg-yellow-50 border-yellow-500 text-yellow-700',
        'error' => 'bg-red-50 border-red-500 text-red-700',
    ][$type];
@endphp
<div class="rounded-md p-4 border-l-4 {{ $classes }}">
    <div class="flex">
        <div class="flex-shrink-0">
            @if ($type === 'info')
                <svg class="w-5 h-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd" />
                </svg>
            @elseif($type === 'success')
                <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            @elseif($type === 'warning')
                <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                </svg>
            @else
                <svg class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
            @endif
        </div>
        <div class="ml-3">
            <p class="text-sm">{{ $message }}</p>
        </div>
    </div>
</div>
