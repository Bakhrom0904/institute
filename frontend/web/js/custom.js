 // $('.owl-carousel').owlCarousel({
 //        loop:true,
 //        margin:10,
 //        nav:true,
 //        responsive:{
 //            0:{
 //                items:1
 //            },
 //            600:{
 //                items:3
 //            },
 //            1000:{
 //                items:5
 //            }
 //        }
 //    })
	

$(document).ready(function(){
    $('.venobox').venobox(); 
});

AOS.init({
  duration: 1200,
})
$(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});
$('.scrollup').click(function (){
    $("html,body").animate({
        scrollTop: 0
    }, 1000);
    return false;
});

// $('.counter').counterUp({
//     delay: 10,
//     time: 1000
// });


  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(1000).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

  /*
  ICON AUTO PLAYS
  HOVER OVER ICON
  TO MAKE IT INTERACTIVE
*/

upInteractive = false;

function autoToggle() {
  $('.arrow').toggleClass('auto');
}

$('.arrow').hover(function() {
  upInteractive = true;
  $('.arrow').removeClass('auto');
});

setInterval(function(){ 
  
  console.log(upInteractive);
  
  if(upInteractive === false) {
    autoToggle();
  }

},2000);
// let snowmax = 30,
//     snowcolor = new Array("rgba(220,220,220,1)", "rgba(220,220,220,1)", "rgba(220,220,220,1)", "rgba(220,220,220,1)", "rgba(220,220,220,1)"),
//     snowletter = new Array("*","❆","❅","❄"),
//     sinkspeed = 0.6,
//     snowmaxsize = 30,
//     snowminsize = 8,
//     snow = new Array,
//     marginbottom,
//     marginright,
//     timer,
//     i_snow = 0,
//     x_mv = new Array,
//     crds = new Array,
//     lftrght = new Array;

// for (i = 0; i <= snowmax; i++)
//   document.write("<span id='s" + i
//     + "' class='snowflake' style='pointer-events:none;z-index:9999;position:fixed;top:-"
//     + snowmaxsize
//     + "'>"
//     + snowletter[randommaker(snowletter.length)]
//     + "</span>");

// window.onload = initsnow;

// function randommaker(o) {
//   return rand = Math.floor(o * Math.random()), rand
// };

// function initsnow() {
//   marginbottom = window.innerHeight, marginright = window.innerWidth - 15;
//   var o = snowmaxsize - snowminsize;
//   for (i = 0; i <= snowmax; i++) crds[i] = 0, lftrght[i] = 15 * Math.random(), x_mv[i] = 0.03 + Math.random() / 10, snow[i] = document.getElementById("s" + i), snow[i].size = randommaker(o) + snowminsize, snow[i].style.fontSize = snow[i].size + "px", snow[i].style.color = snowcolor[randommaker(snowcolor.length)], snow[i].sink = sinkspeed * snow[i].size / 5, snow[i].posx = randommaker(marginright - snow[i].size), snow[i].posy = randommaker(2 * marginbottom - marginbottom - 2 * snow[i].size), snow[i].style.left = snow[i].posx + "px", snow[i].style.top = snow[i].posy + "px";
//   movesnow()
// };

// function movesnow() {
//   for (i = 0; i <= snowmax; i++) crds[i]
//     += x_mv[i], snow[i].posy
//     += snow[i].sink, snow[i].style.left = snow[i].posx
//     + lftrght[i] * Math.sin(crds[i])
//     + "px", snow[i].style.top = snow[i].posy
//     + "px", (snow[i].posy >= marginbottom - 2 * snow[i].size || parseInt(snow[i].style.left) > marginright - 3 * lftrght[i]) && (snow[i].posx = randommaker(marginright - snow[i].size), snow[i].posy = 0);

//   setTimeout("movesnow()", 30)
// };

// $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').trigger('focus')
// })

  $(document).ready(function() {
    $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"grey",boxzoom:true}); // First scrollable DIV
  });