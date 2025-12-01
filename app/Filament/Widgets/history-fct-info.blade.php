<div class="p-4 bg-gray-100 rounded-xl w-full mb-0">
    <h2 class="font-bold text-lg">FCT Information</h2>
    <p class="text-sm text-gray-700">
        Product Model: {{ $record->product_model ?? '-' }} <br>
        Machine No: {{ $record->registration_no ?? '-' }}
    </p>
</div>
