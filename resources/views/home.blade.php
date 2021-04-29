<x-app-layout>
    @if(session()->has('success'))
    <x-success />
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pt-4 bg-white border-b border-gray-200">
                    <div class="flex justify-center sm:hidden">
                        <p class="text-center text-xl font-bold">
                            @if(request()->routeIs('home'))
                            Adding Product
                            @endif
                            @if(request()->routeIs('list'))
                            My Product
                            @endif
                        </p>
                    </div>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('newItem') }}" method="post">
                        @csrf
                        <div id="form" class="grid gap-4 md:grid-cols-1 sm:grid-cols-1">
                            <div>
                                <x-label for="category" :value="__('Category')" />
                                <select id="category" name="category"
                                    class="block w-full rounded-md shadow-sm border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
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