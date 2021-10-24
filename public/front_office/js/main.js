const toggler = document.getElementById("toggler")
const menuMobile = document.getElementById("menu-mobile")

toggler.addEventListener("click", ()=>{
    toggler.classList.toggle("active")
    menuMobile.classList.toggle("active")
})