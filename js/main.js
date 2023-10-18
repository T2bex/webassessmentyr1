let body = document.querySelector("body");
let nav = document.querySelector("nav");
let displayToggle = document.querySelector(".dark-light");
let searchToggle = document.querySelector(".searchToggle");
let sidebarClose = document.querySelector(".sidebarClose")
let sidebarOpen = document.querySelector(".sidebarOpen")



// dark and light toggle 
displayToggle.addEventListener("click", () =>{
    displayToggle.classList.toggle("active");
    body.classList.toggle("dark");

    if(!body.classList.contains("dark")){
        localStorage.setItem("mode", "light-mode")
    }
    else{
        localStorage.setItem("mode", "dark-mode")
    }
})

//serach toggle
searchToggle.addEventListener("click", () =>{
    searchToggle.classList.toggle("active");
})

//sidebar toggle
sidebarOpen.addEventListener("click", () =>{
    nav.classList.add("active");
})


body.addEventListener("click", e =>{
    let clickedElm = e.target;
    if(!clickedElm.classList.contains("sidebarOpen") && clickedElm.classList.contains("sidebarClose")){
        nav.classList.remove("active");
    }
    // !clickedElm.classList.contains("menu")
})

// carousel slide toggle start
var slides = document.querySelectorAll('.slider');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

var manualNav = function(manual){
slides.forEach((slider) => {
    slider.classList.remove('active');

    btns.forEach((btn) => {
        btn.classList.remove('active');
    })
})

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});
//js autoplay slider
var repeat = function(activeClass){
    let active = document.getElementsByClassName('.active');
    let i = 1;

    var repeater = () => {
        setTimeout(function(){
            [...active].forEach((activeSlider) => {
                activeSlider.classList.remove('active');
            })

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length === i){
                i = 0;
            }
            if(i >= slides.length){
                return;
            }
            repeater();
        }, 10000);
    }
    repeater();
}
repeat();
// carousel slide toggle end

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
   //move top -->