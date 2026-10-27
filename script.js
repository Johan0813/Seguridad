
const button = document.getElementById("demo-button");
const notice = document.getElementById("notice");

button.addEventListener("click", () => {
  notice.hidden = !notice.hidden;
});

const captcha = document.querySelector(".captcha-demo");

if (captcha) {
    captcha.classList.add("cargando");

    setTimeout(() => {
        captcha.classList.remove("cargando");
        captcha.classList.add("verificado");
    }, 1200);
}
