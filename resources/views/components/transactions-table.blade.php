@props(['transactions'])
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead>
            <tr class="bg-gray-50 dark:bg-gray-700">
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                    Cliente
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                    Monto
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-300">
                    Fecha
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
            @foreach($transactions as $transaction)
            <tr class="transition-colors hover:bg-gray-50 dark:hover:bg-gray-700">
                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    #{{ $transaction->id }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                    {{ $transaction->client }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                    ${{ number_format($transaction->amount, 2) }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span @class([
                        'px-2 inline-flex text-xs leading-5 font-semibold rounded-full',
                        'bg-green-100 text-green-800' => $transaction->status === 'completed',
                        'bg-yellow-100 text-yellow-800' => $transaction->status === 'pending',
                        'bg-red-100 text-red-800' => $transaction->status === 'cancelled',
                    ])>
                        {{ $transaction->status }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                    {{ $transaction->date }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
