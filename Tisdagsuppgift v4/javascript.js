const popup = document.getElementById("popup");
const öppnaPopup = document.getElementById("öppnaPopup");
const stängBtn = document.querySelector(".stäng-btn");
const actionBtn = document.getElementById("popupAction");

const menuSong = document.getElementById("menusong");
menuSong.play();

setTimeout(() => {
    popup.classList.add("show");
}, 3000);

öppnaPopup.addEventListener("click", () => {
    popup.classList.add("show");
});

stängBtn.addEventListener("click", () => {
    popup.classList.remove("show");
    setTimeout(() => {
        popup.classList.add("show");
    }, 1000);
});

actionBtn.addEventListener("click", () => {
    const fullscreenImg = document.createElement("div");
    fullscreenImg.className = "fullscreen-imag8e";
    fullscreenImg.style.backgroundImage = "url(agartha.png)";
    document.body.appendChild(fullscreenImg);

    const audio = new Audio("sound.mp3");
    audio.play();

    setTimeout(() => {
        fullscreenImg.classList.add("fade-out");
    }, 100);

    setTimeout(() => {
        fullscreenImg.remove();
    }, 5100);
});