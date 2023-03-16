const pass = document.querySelector('#pass');
const show = document.querySelector('.fa-eye');
show.addEventListener('click',()=>{
    if(pass.type === 'password'){
        pass.type = 'text';
        show.classList.add('hide');
    }else{
        pass.type = 'password';
        show.classList.remove('hide');
    }

});