<div class='text-gray-700'>
    <x-label for="sn" :value="__('Serial Number (S/N)')" />
    <x-input type="text" name="sn" id="sn" placeholder="e.g. 34543642" required />
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