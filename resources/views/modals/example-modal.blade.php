<div x-data="{ open: false }" x-show="open" @keydown.escape="open = false" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50">
    <div x-show="open" class="flex items-center justify-center min-h-screen">
        <div x-show="open" @click.away="open = false" class="relative w-full max-w-lg p-4 m-4 bg-white rounded-lg shadow-lg">
            <div class="flex justify-between mb-4">
                <h2 class="text-lg font-semibold">Modal Title</h2>
                <button @click="open = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">&times;</button>
            </div>
            <div class="px-4 py-2">
                <!-- Isi konten modal di sini -->
                <p>Modal content goes here...</p>
            </div>
            <div class="flex justify-end mt-4">
                <button @click="open = false" class="px-4 py-2 mr-2 text-sm font-semibold text-gray-500 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none">Close</button>
                <button class="px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none">Save changes</button>
            </div>
        </div>
    </div>
</div>

