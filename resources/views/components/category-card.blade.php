@if( count($category) )
<div class="max-w-3xl mx-auto pb-4 sm:px-6 lg:px-8">
    <div class="bg-white bg-opacity-90 overflow-hidden shadow-sm">
        <div class="p-0 border-b border-gray-200 sm:p-4 sm:pt-0">
            <p class="text-2xl text-center py-2">
                {{ $name }}
            </p>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-blue-300">
                                    <tr>
                                        {{ $columnNames }}
                                        <th scope="col" class="relative w-4">
                                            <span class="sr-only">D</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-100 divide-y divide-gray-200">
                                        {{ $rows }}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif