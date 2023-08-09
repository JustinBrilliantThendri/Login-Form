show_password = document.querySelector(".container .show-password input");
password = document.querySelector(".container .password input");

show_password.addEventListener("change", () => {
    if(show_password.checked){
        password.type = "text";
    }else{
        password.type = "password";
    }
});

show_confirm_password = document.querySelector(".container .show-confirm-password input");
confirm_password = document.querySelector(".container .confirm-password input");

show_confirm_password.addEventListener("change", () => {
    if(show_confirm_password.checked){
        confirm_password.type = "text";
    }else{
        confirm_password.type = "password";
    }
});

email = document.querySelector(".container .email input");

function do_submit(){
    if(email.value != "" && password.value != "" && confirm_password.value != ""){
        check_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(check_email.test(email.value)){
            if(password.value == confirm_password.value){
                return true;
            }else{
                alert("Your password is invalid!");
                return false;
            }
        }else{
            alert("Your email is invalid!");
            return false;
        }
    }else{
        alert("Please fill this form!");
        return false;
    }
}