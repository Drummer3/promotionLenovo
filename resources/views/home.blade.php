<x-app-layout>
    @if(session()->has('success'))
    <x-success />
    @endif
    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="p-6 pt-4 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <p class="text-center text-xl font-bold">
                            Adding Product
                        </p>
                    </div>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('newItem') }}" method="post">
                        @csrf
                        <div id="form" class="grid gap-4 md:grid-cols-1 sm:grid-cols-1">
                            <div>
                                <x-label for="category" :value="__('Category')" />
                                <select id="category" name="category"
                                    class="block w-full shadow-sm border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                                    <option selected disabled>-- Select Category --</option>
                                    <option value="notebook">Notebook</option>
                                    <option value="pc">PC</option>
                                    <option value="monitor">Monitor</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="accessory">Accessory</option>
                                    <option value="service">Warranty service</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>