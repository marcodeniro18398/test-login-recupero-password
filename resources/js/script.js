const registerBtn = document.getElementById('registrati');
const container = document.getElementById('container');
const loginBtn = document.getElementById('accedi');

registerBtn.addEventListener('click', ()=>{
    container.classList.add("active");
});

loginBtn.addEventListener('click', ()=>{
    container.classList.remove("active");
});

