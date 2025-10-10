/*
let username;

document.getElementById("mySubmit").onclick = function(){
    username = document.getElementById("myText").value;
    document.getElementById("myH1").textContent = `Hello ${username}`;
}
*/
/*
let age = window.prompt("How old are you?");
age = Number(age);
age += 1;
console.log(age, typeof age);
*/

// type conversion

/*
let x = "pizza";
let y = "pizza";
let z = "pizza";

x = Number(x);
y = String(y);
z = Boolean(z);

console.log(x, typeof x);
console.log(y, typeof y);
console.log(z, typeof z);
*/ 
// const = a variable that can't be changed

const PI = 3.14159;
let radius;
let circumference;

document.getElementById("myButton").onclick = function(){
    radius = document.getElementById("Text").value;
    radius = Number(radius);
    circumference = 2 * PI * radius;
    document.getElementById("H3").textContent = circumference + "cm";
}