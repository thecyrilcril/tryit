@props([
    'triggerButton' => 'show modal',
])
<div
    x-data="{
        show: false,
        modalReference: null,
        async init() {
            await $nextTick(),
            this.modalReference = $refs.modal
            $watch('show', () => (this.show) ? this.modalReference.showModal() : this.modalReference.close())
        }
    }"
    x-on:open.stop="show = true"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
>
    <dialog
        x-ref="modal"
        {{ $attributes->merge(['class' => 'p-10 max-w-2xl z-50 relative rounded-md shadow-sm bg-purple-50 backdrop:bg-gray-900/40']) }}
    >
        {{ $slot }}
        <button x-show="show" @click="$dispatch('close')"
            class="absolute top-3 right-2"
        >
            <x-icons.close class="w-8 h-8 text-purple-200"/>
        </button>
    </dialog>
    @if (isset($trigger))
        {{ $trigger }}
    @else
        <button
            @click="$dispatch('open')"
            type="button"
            class="capitalize outline-none text-purple-500 py-1 px-2"
        >
            {{ $triggerButton }}
        </button>
    @endif
</div>
