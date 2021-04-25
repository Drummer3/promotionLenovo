<x-app-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200 sm:p-4">
                    <p class="text-2xl text-center py-2">Notebook</p>
                    @if ($notebook)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    Family
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    Serial Number
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    MTM
                                                </th>
                                                <th scope="col" class="relative w-4">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($notebook as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->family }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->sn }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-red-300 sm:rounded-lg ">
                        <p class="text-lg text-center text-gray-50 py-2">Nothing in this category</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200 sm:p-4">
                    <p class="text-2xl text-center py-2">PC</p>
                    @if ($pc)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    Serial Number
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    MTM
                                                </th>
                                                <th scope="col" class="relative w-4">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($pc as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->sn }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-red-300 sm:rounded-lg">
                        <p class="text-base text-center text-gray-50 py-2 ">Nothing in this category</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200 sm:p-4">
                    <p class="text-2xl text-center py-2">Monitor</p>
                    @if ($monitor)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    Serial Number
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    MTM
                                                </th>
                                                <th scope="col" class="relative w-4">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($monitor as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->sn }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-red-300 sm:rounded-lg">
                        <p class="text-base text-center text-gray-50 py-2 ">Nothing in this category</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200 sm:p-4">
                    <p class="text-2xl text-center py-2">Tablet</p>
                    @if ($tablet)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    Serial Number
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    MTM
                                                </th>
                                                <th scope="col" class="relative w-4">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($tablet as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->sn }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-red-300 sm:rounded-lg">
                        <p class="text-base text-center text-gray-50 py-2 ">Nothing in this category</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200 sm:p-4">
                    <p class="text-2xl text-center py-2">Accessory</p>
                    @if ($accessory)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    Type
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    MTM
                                                </th>
                                                <th scope="col" class="relative w-4">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($accessory as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->type }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-red-300 sm:rounded-lg">
                        <p class="text-base text-center text-gray-50 py-2 ">Nothing in this category</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200 sm:p-4">
                    <p class="text-2xl text-center py-2">Warranty service</p>
                    @if ($service)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider">
                                                    MTM
                                                </th>
                                                <th scope="col" class="relative w-4">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($service as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-red-300 sm:rounded-lg">
                        <p class="text-base text-center text-gray-50 py-2 ">Nothing in this category</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>