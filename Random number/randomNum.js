const number = document.getElementById("number");
const RandomButton = document.getElementById("RandomButton");

const buttonMax = document.getElementById("buttonMax");
const buttonMin = document.getElementById("buttonMin");

const maxInput = document.getElementById("Max");
const minInput = document.getElementById("min");
const countLabel = document.getElementById("countLabel");

let max = 100;
let min = 0;

function updateLabel(){
    countLabel.textContent = `Range: ${min} - ${max}`;
}

buttonMax.onclick = function(){
    const val = Number(maxInput.value);
    if (!Number.isNaN(val)) {
        max = Math.floor(val);
        if (max < min) {
            const tmp = max;
            max = min;
            min = tmp;
        }
        updateLabel();
    } else {
        alert("Ange ett giltigt tal för maximum.")
    }
}

buttonMin.onclick = function(){
    const val = Number(minInput.value);
    if (!Number.isNaN(val)) {
        min = Math.floor(val);
        if (min > max) {
            const tmp = min;
            min = max;
            max = tmp;
        }
        updateLabel();
    } else {
        alert("Ange ett giltigt tal för minimum.")
    }
}

RandomButton.onclick = function(){
    const range = max - min + 1;
    if (range <= 0) {
        alert("Ogilitigt intervall. Kontroller min och max.");
        return;
    }

    let randomNumber = Math.floor(Math.random() * (max - min)) + min;
    number.textContent = randomNumber;
}

