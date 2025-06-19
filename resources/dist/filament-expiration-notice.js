document.addEventListener('livewire:init', () => {
    Livewire.hook('request', ({ fail }) => {
        fail(({ status, preventDefault }) => {
            if (status === 419) {
                confirm('Your custom page expiration behavior...')

                preventDefault()
            }
        })
    })
})
