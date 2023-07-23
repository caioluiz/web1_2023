let email;
const display = document.querySelector('.container')
const emailEl = document.querySelector('.input-email')
const sendBtn = document.getElementById('send-btn');
const emailsContainer = document.querySelector('.emails-container');

function validaEmail() {
    const email = emailEl.value;
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (regex.test(email)) {
        emailEl.setCustomValidity("");
        return true;
    } else {
        emailEl.setCustomValidity("Email inválido!");
        return false;
    }
}

sendBtn.addEventListener('click', ()=>{
    if(validaEmail()) {
        email = emailEl.value;
    
        const list = document.createElement('section');
        list.classList.add('list');
    
        const seuEmail = document.createElement('input');
        seuEmail.classList.add('input-email');
        seuEmail.value = email;
    
        list.appendChild(seuEmail)
        emailsContainer.appendChild(list);
    
    
        const deleteBtn = document.createElement('button');
        deleteBtn.classList.add('delete-btn');
        deleteBtn.textContent = 'X';
        list.appendChild(deleteBtn);
    
        
        deleteBtn.addEventListener('click', () =>{list.remove()});
    } else {
        alert('Ops, Modelo de email errado ')
    }
}); 