let a = prompt("Enter username")
let b = prompt("Enter password")

let c = "admin"
let d = "admin123"

function validuser(){
    if(a===c && b===d){
        alert("Login Successful")
    }
    else{
        alert("Login Failed")
    }
}