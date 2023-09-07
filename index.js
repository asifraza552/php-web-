let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
    
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    navbar.classList.remove('active');
    menu.classList.remove('bx-x');
};
let js = document.querySelectorAll("ul li a");
js.forEach((item) => {
    item.addEventListener("click" , () =>{
        let activeeclass = document.querySelector(".activee");
       activeeclass.className = activeeclass.className.replace("activee","");
       item.className += "activee";
    })

});
