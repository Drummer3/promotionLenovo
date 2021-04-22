<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <!-- Form -->
                    <form action="{{ route('newItem') }}" method="post">
                        @csrf
                        <div id="form" class="grid gap-4 md:grid-cols-1 sm:grid-cols-1">
                            <div>
                                <x-label for="type" :value="__('Type')" />
                                <select id="type" name="type" class="block w-full rounded-md shadow-sm border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                                    <option selected disabled>-- Select Type --</option>
                                    <option value="notebook">Notebook</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="warranty">Warranty service</option>
                                </select>
                            </div>
                            <x-model class="hidden notebook"/>
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>