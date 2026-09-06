<x-button onclick="toggleOption(event, this) ">
    {{ $slot }}
    <span class="checkbox block mt-2">
        ☐
    </span>
    <span class="checkmark hidden block mt-2">
        ✅
    </span>
</x-button>