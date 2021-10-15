// window.onload = loading;

// function loading(){
    
//     const content = document.getElementById('content');
//     const loading = document.getElementById('loadingscreen');
    
//     setTimeout(function(){
//         loading.classList.add('fade-out');
//     }, 3000);

//     setTimeout(function() {
//         content.classList.add('fade-in');
//         loading.style.display = 'none';
//         content.style.display = "block";
//     },4250);
// }

function MenuBurger() {
    const nav_bar = document.getElementById('navbar');
    const burger_btn = document.getElementById('burger');
    const firstLine = document.getElementById('first-line');
    const SecondLine = document.getElementById('second-line');
    const ThirdLine = document.getElementById('third-line');

    if(nav_bar.style.display == 'none' || nav_bar.style.display == "") { 
        nav_bar.style.display = 'block';
    }
    else {
            SecondLine.style.display = "block";
            nav_bar.style.display = 'none';
    }
}

function ScrollTop() {
    window.scrollTo(0,0)
}