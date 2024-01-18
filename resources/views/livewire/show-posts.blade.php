<div class="p-8">
    <h1 class="text-2xl font-bold mb-4">جدول بالأدوية</h1>
    <table class="min-w-full border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">اسم الدواء</th>
                <th class="py-2 px-4 border-b">وصف الدواء</th>
                <th class="py-2 px-4 border-b"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medcines as $medcine)
            <tr wire:key='{{ $medcine->id }}'>
                <td class="py-2 px-4 border-b text-center">{{ $medcine->medcine }} </td>
                <td class="py-2 px-4 border-b text-center">{{ str($medcine->description)->words(5) }} </td>
                <td class="py-2 px-4 border-b text-center">
                    <button wire:click='delete({{ $medcine->id }})'
                      class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                      type="button" wire:confirm='هل أنت متأكد من حذف الدواء ؟'>حذف</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
