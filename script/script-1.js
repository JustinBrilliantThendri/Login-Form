show = document.querySelector(".container .show input");
password = document.querySelector(".container .password input");
email = document.querySelector(".container .email input");

show.addEventListener("change", () => {
    if(show.checked){
        password.type = "text";
    }else{
        password.type = "password";
    }
});

function do_submit(){
    if(password.value != "" && email.value != ""){
        check_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(check_email.test(email.value)){
            return true;
        }else{
            alert("Your email is invalid!");
            return false;
        }
    }else{
        alert("Please fill this form!");
        return false;
    }
}