/*const alerta = document.getElementById("Alerta");
const appendAlert= (message,type) => {
    const wrapper = document.createElement("div");
    wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
    ].join("");
    alerta.append(wrapper);
}

const alertTrigger = document.getElementById("Botonalerta");
if(alertTrigger){
    alertTrigger.addEventListener("click", () => {
        appendAlert("¡Hola! Bienvenido a mi perfil de CV :3", "info");
    });
} */

const botonArriba = document.getElementById("botonArriba");

window.onscroll = function () {
    if (window.scrollY > 100) {
        botonArriba.style.display = "block";
    } else {
        botonArriba.style.display = "none";
    }
};

botonArriba.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
btnclick.addEventListener('click', () => {
    Swal.fire({
        title: "Habilidades",
        text: "Habilidades obtenidas.",
        imageUrl: "https://unsplash.it/400/200",
        imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image"
});
});