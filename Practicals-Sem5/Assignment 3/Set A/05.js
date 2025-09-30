let a = prompt("Enter number a : ")
let b = prompt("Enter number b : ")

alert(`Before swapping : a = ${a} and b = ${b}`)

let temp = a;
a = b;
b = temp;

alert(`After swapping : a = ${a} and b = ${b}`)
