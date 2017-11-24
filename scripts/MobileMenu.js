function showMobileMenu() {
    //alert("You just clicked the menu icon");
    //document.getElementsByClassName('site-header__mobile-menu')[0].style.display = 'block';
    // var el = document.getElementById('MobileMenu');

    // if (el.style.display === 'none'){
    //     el.style.display = "block";
    // } else {
    //     el.style.display = "none";
    // }

    document.getElementById('MobileMenu').classList.toggle("site-header__mobile-menu-visible");
}