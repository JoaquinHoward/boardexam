<button type="submit" {{ $attributes->merge(['class' => 'w-32 h-10 bg-emerald-600 rounded hover:bg-emerald-700']) }}>
    {{ $slot }}
</button>