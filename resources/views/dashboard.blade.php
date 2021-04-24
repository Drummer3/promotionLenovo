<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="flex pb-4">
                                    <div>
                                        <x-input type="text" name="Seach" placeholder="Seach" id="myInputTextField" />
                                    </div>
                                    <div>
                                        <x-button class="h-full" id="clearer"> Reset </x-button>
                                    </div>
                                    <div class='self-center'>
                                        <p id="rowCounter"></p>
                                    </div>
                                </div>
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table id="myTable" class="tablesorter min-w-full divide-y divide-gray-200">
                                        <thead class="bg-red-300">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    UserID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    User Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    Shop
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    Branch
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    Type
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    Model
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    Serial Number
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-wider hover:bg-red-400 focus:bg-red-500">
                                                    MTM
                                                </th>
                                                <th scope="col" class="w-4 relative deleteCol">
                                                    <span class="sr-only">D</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody" class="bg-gray-100 divide-y divide-gray-200">
                                            @foreach ($items as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->userid }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->shop }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->branch }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->type }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->model }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->sn }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $item->mtm }}
                                                </td>
                                                <!-- <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a href="/removeitem/{{$item->userid}}/{{$item->id}}"
                                                        class="text-red-600 hover:text-red-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </a>
                                                </td> -->

                                                <td class="whitespace-nowrap justify-items-center text-sm">
                                                    <a class="deleteButton text-red-600 hover:text-red-900"
                                                        id="{{$item->userid}}/{{$item->id}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <script>
                                        
                                        </script>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal class="hidden" id="modal" />
</x-app-layout>