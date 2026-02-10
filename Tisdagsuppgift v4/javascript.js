const popup = document.getElementById("popup");
const öppnaPopup = document.getElementById("öppnaPopup");
const stängBtn = document.querySelector(".stäng-btn");
const actionBtn = document.getElementById("popupAction");
const Rejected = document.getElementById("Rejected");

const menuSong = document.getElementById("menusong");
menuSong.currentTime = 0;
menuSong.play().catch(err => console.log("Autoplay blockad", err));

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
    const rejectedImg = Rejected.querySelector('img');
    rejectedImg.src = "rejected.png";
    Rejected.classList.add("fade-out");

    const audio = new Audio("sound.mp3");
    audio.play();

    setTimeout(() => {
        Rejected.remove();
    }, 5100);
});