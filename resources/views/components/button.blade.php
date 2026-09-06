<button type="submit" {{ $attributes->merge(['class' => 'p-2 cursor-pointer w-40 h-10  rounded bg-indigo-500']) }}>
    {{ $slot }}
</button>