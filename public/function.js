
//show navbar
const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId);

    //validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            //show navbar
            nav.classList.toggle('show');

            //change icon
            toggle.classList.toggle('fa-times');

            //add padding to body
            bodypd.classList.toggle('body-pd');

            //add padding to header
            headerpd.classList.toggle('body-pd');
        });
    }
}

//call function 
showNavbar('header-toggle', 'l-navbar', 'body', 'header');


//link active
const linkColor = document.querySelectorAll('.nav_link');

function colorLink(){
    if(linkColor){
        linkColor.forEach(link => link.classList.remove('active')); 
        this.classList.add('active');
    }
}

linkColor.forEach(link => link.addEventListener('click', colorLink));
