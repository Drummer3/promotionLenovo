<table id="myTable" class="tablesorter min-w-full divide-y divide-gray-200">
    <thead class="bg-red-400">
        <tr>
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Userid'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'User Name'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Shop'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Branch'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Category'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Family'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Type'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Serial Number'" />
            <x-category-col class="hover:bg-red-600 cursor-pointer" :cat="'Mtm'" />
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
                {{ $item->category }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                {{ $item->family }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                {{ $item->type }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                {{ $item->sn }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                {{ $item->mtm }}
            </td>
            <td class="whitespace-nowrap justify-items-center text-sm">
                <a class="deleteButton text-red-600 hover:text-red-900" id="{{$item->userid}}/{{$item->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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