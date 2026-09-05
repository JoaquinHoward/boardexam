<x-layout>
    <h1 class="mb-8 text-3xl font-bold text-white">prep: board exam</h1>
    <div class="grid grid-cols-2 gap-4 text-center text-white">
        <a href="{{ route('register.index') }}" class="flex justify-center items-center bg-indigo-700 hover:bg-indigo-600 p-4 h-2 rounded">
            register
        </a>
        <a href="{{ route('login.index') }}" class="flex justify-center items-center bg-indigo-700 hover:bg-indigo-600 p-4 h-2 rounded">
            login
        </a>
    </div>
</x-layout>