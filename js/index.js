window.addEventListener('load', () => {
    registerSW()
})

async function registerSW() {
    if ('serviceWorker' in navigator) {
        try {
            await navigator.serviceWorker.register('../serviceWorker.js')
            console.log('ServiceWorker registrado')
        } catch (e) {
            console.log('ServiceWorker falhou')
        }
    }
}