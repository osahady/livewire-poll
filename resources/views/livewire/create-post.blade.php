<!-- Todo Form -->
<div>
    <h1 class="text-2xl font-bold text-center mb-4">أسماء الأدوية</h1>
    <div class="mb-4">
        <form wire:submit='add' class="flex flex-col items-center justify-center space-y-4"
          enctype="multipart/form-data">
            <input wire:model="medcine" type="text"
              class="border rounded py-2 px-4 w-2/3 focus:outline-none focus:border-blue-500 placeholder-gray-400">
            @error('medcine')
            <em class="text-red-500 text-xs">{{ $message }}</em>
            @enderror

            <textarea wire:model="description"
              class="border rounded py-2 px-4 w-2/3 focus:outline-none focus:border-blue-500 placeholder-gray-400"
              placeholder="Description"></textarea>
            @error('description')
            <em class="text-red-500 text-xs">{{ $message }}</em>
            @enderror

            <input wire:model="image" type="file"
              class="border rounded py-2 px-4 w-2/3 focus:outline-none focus:border-blue-500 placeholder-gray-400">


            <button type="submit"
              class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Add
            </button>
        </form>
    </div>
    <hr>

    <!-- Todo List -->
    {{-- <ul class="p-8">
        @foreach ($todos as $todo)
        <li class="list-disc ml-4">{{ $todo }}</li>
    @endforeach
    </ul> --}}


    <livewire:show-posts />
</div>
