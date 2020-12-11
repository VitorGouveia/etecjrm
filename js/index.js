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

function audioVideo() {
    location.href = "audioVideo.php"
}

function multimidia() {
    location.href = "multimidia.php"
}

function comunicacaoVisual() {
    location.href = "comunicacaoVisual.php"
}

function tecnicoWeb() {
    location.href = "tecnicoWeb.php"
}

function jogosDigitais() {
    location.href = "jogosDigitais.php"
}

function marketing() {
    location.href = "marketing.php"
}