$(document).ready(function () {
  $(window).scroll(function () {
    if (this.scrollY > 20) {
      $('.navbar').addClass('sticky');
    } else {
      $('.navbar').removeClass('sticky');
    }

    if (this.scrollY > 500) {
      $('.scroll-up-btn').addClass('show');
    } else {
      $('.scroll-up-btn').removeClass('show');
    }
  });

  // slide-up script
  $('.scroll-up-btn').click(function () {
    $('html').animate({ scrollTop: 0 });
  });
});

// window.onload = function(){
//   console.log("Dom has loaded");
// }

// var Router = function(name, routes){
//   return{
//     name:name,
//     routes:routes
//   }
// };
// var view = document.getElementById('view');
// var router = new Router('router',[
//   {
//     path:'/',
//     name:'Root'
//   },
//   {
//     path:'/event',
//     name:'event'
//   },
//   {
//     path:'/diengia',
//     name:'diengia'
//   },
//   {
//     path:'/login',
//     name:'login'
//   }
// ]);

// // console.log(router);
// var currentPath = window.location.pathname;
// // console.log(currentPath);

// if(currentPath ==='/'){
//   view.innerHTML = 'You'
// }else{

// }
