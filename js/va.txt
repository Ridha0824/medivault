function validateRegister() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirm = document.getElementById("confirm").value;

    document.getElementById("emailError").innerText = "";
    document.getElementById("passError").innerText = "";

    if (!email.includes("@")) {
        document.getElementById("emailError").innerText = "Invalid email format";
        return false;
    }

    if (password.length < 8) {
        document.getElementById("passError").innerText = "Password must be at least 8 characters";
        return false;
    }

    if (password !== confirm) {
        document.getElementById("passError").innerText = "Passwords do not match";
        return false;
    }

    return true;
}
