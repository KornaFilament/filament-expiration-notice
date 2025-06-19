<x-filament::modal
    id="session-expired"
    icon="heroicon-o-exclamation-triangle"
    icon-color="danger"
    alignment="center"
    width="sm"
    :close-by-clicking-away="false"
    :close-by-escaping="false"
    :close-button="false"
    footer-actions-alignment="center"
>
    <x-slot name="heading">
        {{ __('Session Expired') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Your page session has expired due to inactivity. Please refresh the page to continue.') }}
    </x-slot>

    <x-slot name="footerActions">
        <x-filament::button
            tag="button"
            onclick="window.location.reload()"
            color="primary"
            class="w-full"
        >
            {{ __('Refresh page') }}
        </x-filament::button>
    </x-slot>
</x-filament::modal>
