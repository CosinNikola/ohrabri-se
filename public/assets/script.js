function showPassword(e){
    let input = document.querySelector('#password');
    if(e.target.textContent === "visibility"){
        e.target.textContent = "visibility_off";
        input.type = "text";
    }
    else{
        e.target.textContent = "visibility";
        input.type = "password";
    }
}

const passwordToggle = document.querySelector('.eye');

passwordToggle.addEventListener('click', showPassword);
