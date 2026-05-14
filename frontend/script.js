function validatePassword() {
    var password = document.getElementById("password").value;
    var regex = /^(?=.*[a-zA-Z])(?=.*\d).{8,}$/;

    if (!regex.test(password)) {
        alert("كلمة المرور يجب أن تحتوي على حروف وأرقام وأن تكون على الأقل 8 أحرف.");
        return false;
    }
    return true;
}
