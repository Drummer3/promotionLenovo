<div class='text-gray-700'>
    <x-label for="family" :value="__('Family')" />
    <select id="family" name="family" required
        class="block w-full rounded-md shadow-sm border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
        <option></option>
        <option value="IdeaPad">IdeaPad</option>
        <option value="Legion">Legion</option>
        <option value="Thinkpad">ThinkPad</option>
        <option value="Tablet">Yoga</option>
        <option value="Accessory">V series</option>
    </select>
</div>

<div class='text-gray-700'>
    <x-label for="sn" :value="__('Serial Number (S/N)')" />
    <x-input type="text" name="sn" id="sn" placeholder="e.g. 34543642" required />
</div>

<div class='text-gray-700'>
    <x-label for="mtm" :value="__('MTM')" />
    <x-input type="text" name="mtm" id="mtm" placeholder="e.g 20TD0047RK" maxlength="10" minlength='10' required />
</div>

<div class='text-gray-700'>
    <x-button type='submit' class='block w-full justify-center'>Submit</x-button>
</div>