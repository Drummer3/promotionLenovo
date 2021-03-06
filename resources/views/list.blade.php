<x-app-layout>
    <div class="pt-6">
        <div class="max-w-2xl mx-auto pb-4 sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-90 overflow-hidden shadow-sm">
                <p class="text-xl text-center py-2">
                    My tickets: {{ $tickets }}
                </p>
            </div>
        </div>
    </div>

    <div class="py-6">
        <x-category-card :category='$notebook'>
            <x-slot name="name">Notebook</x-slot>
            <x-slot name="columnNames">
                <x-category-col :cat="'Family'" />
                <x-category-col :cat="'Serial Number'" />
                <x-category-col :cat="'MTM'" />
                <x-category-col :cat="'Price'" />
            </x-slot>
            <x-slot name="rows">
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->price }}
                        </td>
                        <x-listing-delete :item="$item" />
                    </tr>
                @endforeach
            </x-slot>
        </x-category-card>

        <x-category-card :category='$pc'>
            <x-slot name="name">PC</x-slot>
            <x-slot name="columnNames">
                <x-category-col :cat="'Serial Number'" />
                <x-category-col :cat="'MTM'" />
                <x-category-col :cat="'Price'" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($pc as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->sn }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->mtm }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->price }}
                        </td>
                        <x-listing-delete :item="$item" />
                    </tr>
                @endforeach
            </x-slot>
        </x-category-card>

        <x-category-card :category='$monitor'>
            <x-slot name="name">Monitor</x-slot>
            <x-slot name="columnNames">
                <x-category-col :cat="'Serial Number'" />
                <x-category-col :cat="'MTM'" />
                <x-category-col :cat="'Price'" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($monitor as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->sn }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->mtm }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->price }}
                        </td>
                        <x-listing-delete :item="$item" />
                    </tr>
                @endforeach
            </x-slot>
        </x-category-card>

        <x-category-card :category='$tablet'>
            <x-slot name="name">Tablet</x-slot>
            <x-slot name="columnNames">
                <x-category-col :cat="'Serial Number'" />
                <x-category-col :cat="'MTM'" />
                <x-category-col :cat="'Price'" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($tablet as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->sn }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->mtm }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->price }}
                        </td>
                        <x-listing-delete :item="$item" />
                    </tr>
                @endforeach
            </x-slot>
        </x-category-card>

        <x-category-card :category='$accessory'>
            <x-slot name="name">Accessory</x-slot>
            <x-slot name="columnNames">
                <x-category-col :cat="'Type'" />
                <x-category-col :cat="'MTM'" />
                <x-category-col :cat="'Price'" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($accessory as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->type }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->mtm }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->price }}
                        </td>
                        <x-listing-delete :item="$item" />
                    </tr>
                @endforeach
            </x-slot>
        </x-category-card>

        <x-category-card :category='$service'>
            <x-slot name="name">Warranty Service</x-slot>
            <x-slot name="columnNames">
                <x-category-col :cat="'MTM'" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($service as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $item->mtm }}
                        </td>
                        <x-listing-delete :item="$item" />
                    </tr>
                @endforeach
            </x-slot>
        </x-category-card>
    </div>
</x-app-layout>
