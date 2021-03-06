<x-app-layout>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap pb-4 md:justify-start justify-center">
                <div>
                    <x-input type="text" name="Seach" placeholder="Seach" id="myInputTextField" />
                </div>
                <div class='px-4'>
                    <x-button class="h-full" id="clearer"> Reset </x-button>
                </div>
                <div class='self-center text-gray-50'>
                    <p id="rowCounter"></p>
                    <p id="ticketCounter"></p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200">
                                    <x-dashboard-table :items="$items"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>