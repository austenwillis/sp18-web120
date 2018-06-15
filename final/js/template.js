let ul=document.getElementById('ul');
let navbarToggle=document.getElementById('navbar-toggle');

navbarToggle.addEventListener('click',function(){

    if(this.classList.contains('active')){
        ul.style.display="none";
        this.classList.remove('active');
    }
    else{
        ul.style.display="flex";
        this.classList.add('active');

    }
});