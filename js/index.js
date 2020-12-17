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

const menu = document.querySelector(".context");
const menuOption = document.querySelector(".context-option");
let menuVisible = false;

const toggleMenu = command => {
    menu.style.display = command === "show" ? "block" : "none";
    menuVisible = !menuVisible;
};

const setPosition = ({ top, left }) => {
    menu.style.left = `${left}px`;
    menu.style.top = `${top}px`;
    toggleMenu("show");
};

window.addEventListener("click", e => {
    if (menuVisible) toggleMenu("hide");
});

menuOption.addEventListener("click", e => {
    console.log("mouse-option", e.target.innerHTML);
});

window.addEventListener("contextmenu", e => {
    e.preventDefault();
    const origin = {
        left: e.pageX,
        top: e.pageY
    };
    setPosition(origin);
    return false;
});

function fecharLicao() {
    document.querySelector('.calendario .content .aula').style.display = "none"
}

function desinscrever() {
    location.href = "./include/desinscrever.php"
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