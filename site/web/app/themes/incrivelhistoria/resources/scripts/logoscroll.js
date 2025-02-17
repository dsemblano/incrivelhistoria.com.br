document.addEventListener("DOMContentLoaded", function() {
    //hide or show the "back to top" link
    window.onscroll = function() {
        if (window.pageYOffset > 300) {
            document.querySelector('.cd-top').classList.add('cd-is-visible');
            document.querySelector('.cd-top').classList.remove('cd-fade-out');
        } else {
            document.querySelector('.cd-top').classList.remove('cd-is-visible');
        }
        if (window.pageYOffset > 1200) {
            document.querySelector('.cd-top').classList.add('cd-fade-out');
        }
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("header").classList.add("shrink");
            
        } else {
            document.getElementById("header").classList.remove("shrink");
        }
    };
});