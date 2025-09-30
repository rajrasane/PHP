// create a js form validation that ensures the email input contains an "@" symbol before the submission.

let a = prompt("Enter email :")
function validuser(){
if(a.includes("@")){
    console.log("Valid email")
}
else{
    console.log("Invalid email")
}   
}