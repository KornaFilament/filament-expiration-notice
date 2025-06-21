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
        {{ __(config('filament-expiration-notice.heading')) }}
    </x-slot>

    <x-slot name="description">
        {{ __(config('filament-expiration-notice.description')) }}
    </x-slot>

    <x-slot name="footerActions">
        <x-filament::button
            tag="button"
            onclick="window.location.reload()"
            color="primary"
            class="w-full"
        >
            {{ __(config('filament-expiration-notice.refresh_button')) }}
        </x-filament::button>
    </x-slot>
</x-filament::modal>
