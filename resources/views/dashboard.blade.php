<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center gap-4">
                <select
                    class="text-sm border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    <option>Últimos 7 días</option>
                    <option>Últimos 30 días</option>
                    <option>Este año</option>
                </select>
                <button
                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Exportar Datos
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <x-stat-card title="Total Usuarios" value="12,345" change="+5.2%" type="increase">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </x-slot>
                </x-stat-card>

                <x-stat-card title="Ventas Mensuales" value="$45,678" change="-2.3%" type="decrease" />

                <x-stat-card title="Tasa de Conversión" value="8.5%" change="+1.2%" type="increase" />

                <x-stat-card title="Tiempo Promedio" value="2.4m" change="-0.3%" type="decrease" />
            </div>

            <!-- Charts Grid -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <div class="bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="p-6">
                        <h3 class="mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            Ventas por Mes
                        </h3>
                        <div class="h-80">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="p-6">
                        <h3 class="mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            Usuarios Activos
                        </h3>
                        <div class="h-80">
                            <canvas id="usersChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity & Tasks Grid -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="p-6">
                        <h3 class="mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            Actividad Reciente
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <span class="font-medium text-gray-900 dark:text-white">Juan Pérez</span>
                                        completó su perfil
                                    </p>
                                    <span class="text-sm text-gray-500">Hace 2 horas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tasks -->
                <div class="bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="p-6">
                        <h3 class="mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            Tareas Pendientes
                        </h3>
                        <div class="space-y-4">
                            <label class="flex items-center justify-between group">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <span class="ml-3 text-sm text-gray-600 dark:text-gray-400">Revisar reportes
                                        mensuales</span>
                                </div>
                                <span class="text-sm text-gray-500">Mañana</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions Table  -->
            <div class="bg-white rounded-lg shadow-sm dark:bg-gray-800">
                <div class="p-6">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        Transacciones Recientes
                    </h3>
                    <div class="mt-6">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="col" class="pb-3.5 text-left text-sm font-normal text-gray-500 dark:text-gray-400">
                                        ID
                                    </th>
                                    <th scope="col" class="pb-3.5 text-left text-sm font-normal text-gray-500 dark:text-gray-400">
                                        CLIENTE
                                    </th>
                                    <th scope="col" class="pb-3.5 text-left text-sm font-normal text-gray-500 dark:text-gray-400">
                                        MONTO
                                    </th>
                                    <th scope="col" class="pb-3.5 text-left text-sm font-normal text-gray-500 dark:text-gray-400">
                                        ESTADO
                                    </th>
                                    <th scope="col" class="pb-3.5 text-left text-sm font-normal text-gray-500 dark:text-gray-400">
                                        FECHA
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                                <tr>
                                    <td class="py-4 text-sm font-medium text-gray-900 dark:text-white">
                                        #1234
                                    </td>
                                    <td class="py-4 text-sm text-gray-500 dark:text-gray-400">
                                        Juan Pérez
                                    </td>
                                    <td class="py-4 text-sm text-gray-500 dark:text-gray-400">
                                        $100.00
                                    </td>
                                    <td class="py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100">
                                            Completado
                                        </span>
                                    </td>
                                    <td class="py-4 text-sm text-gray-500 dark:text-gray-400">
                                        2024-02-05
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Sales Chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Ventas',
                        data: [30000, 35000, 32000, 40000, 45000, 42000],
                        borderColor: 'rgb(79, 70, 229)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Users Chart
            const usersCtx = document.getElementById('usersChart').getContext('2d');
            new Chart(usersCtx, {
                type: 'bar',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Usuarios Activos',
                        data: [1200, 1300, 1400, 1350, 1500, 1600],
                        backgroundColor: 'rgba(79, 70, 229, 0.2)',
                        borderColor: 'rgb(79, 70, 229)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(156, 163, 175, 0.1)'
                            },
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString()
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(156, 163, 175, 0.1)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });

            function updateChartsTheme(darkMode) {
                const textColor = darkMode ? '#E5E7EB' : '#374151';
                const gridColor = darkMode ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)';

                Chart.defaults.color = textColor;
                Chart.defaults.scale.grid.color = gridColor;

                salesChart.options.scales.x.grid.color = gridColor;
                salesChart.options.scales.y.grid.color = gridColor;
                salesChart.update();

                usersChart.options.scales.x.grid.color = gridColor;
                usersChart.options.scales.y.grid.color = gridColor;
                usersChart.update();
            }

            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.target.classList.contains('dark')) {
                        updateChartsTheme(true);
                    } else {
                        updateChartsTheme(false);
                    }
                });
            });

            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });

            updateChartsTheme(document.documentElement.classList.contains('dark'));
        </script>
    @endpush
</x-app-layout>
