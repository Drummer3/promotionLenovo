<div class='text-gray-700'>
    <x-label for="type" :value="__('Type')" />
    <select id="type" name="type" required
        class="block w-full shadow-sm border-gray-300 focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-50">
        <option></option>
        <option value="mouse">Mouse</option>
        <option value="keyboard">Keyboard</option>
    </select>
</div>

<div class='text-gray-700'>
    <x-label for="mtm" :value="__('MTM')" />
    <x-input type="text" name="mtm" id="mtm" placeholder="e.g 20TD0047RK" maxlength="10" minlength='10' required />
</div>

<div class="text-gray-700">
    <x-label for="price" :value="__('Price')" />
    <x-input type="number" name="price" id="price" placeholder="&#8382;" required />
</div>

<div class='text-gray-700'>
    <x-button class='block w-full justify-center'>Submit</x-button>
</div>