function checkPass() {
    var pass = document.getElementById("password");
    var passCheck = document.getElementById("confirm_pass");
    var message = document.getElementById("passCheck");

    var passed = "#66cc66";
    var failed = "#f00000";

    if (pass.value == passCheck.value) {
        passCheck.style.backgroundColor = passed;
        message.style.color = passed;
        message.innerHTML = "Passwords Match";
        document.getElementById("register").disabled = false;

    }else{
        passCheck.style.backgroundColor = failed;
        message.style.color = failed;
        message.innerHTML = "Passwords do not match";
        document.getElementById("register").disabled = true;

    }
}