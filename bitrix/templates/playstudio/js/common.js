
$("#menu-icon").on("click", function(){
  $(".top-menu nav").slideToggle();
  $(this).toggleClass("active");
});

var rev=0; 
function VolChenge(){
  var i = document.getElementById("volume").value * 10;
  if (rev == 4) {
    clearInterval(timer);
    rev=0; 
    return;
  }
  if (i>=100 || i<=0) rev++; 
  if (rev % 2 == 0) i--;
  else i++;
  document.getElementById("volume").value = i/10;
  var dec = (100 - i);
  before.volume = parseFloat(dec / 100);
  after.volume = parseFloat(i / 100);
}
var before = document.getElementById("before");
var after = document.getElementById("after");
$("#volume").mousemove(function(){
  var inc = this.value;
  var dec = (10 - inc);
  before.volume = parseFloat(dec / 10);
  after.volume = parseFloat(inc/ 10);
  $(".fa-arrow-left").css({ opacity : (inc/10) });
  $(".fa-arrow-right").css({ opacity : (dec/10) });
});

var state=true;
$("#volume").focus(function() {
  if(typeof(timer) != "undefined" && timer !== null){clearInterval(timer);}
  $("#hint").fadeOut();
});

$( "#playpause" ).click(function() {
  //console.log("yarr");
  if (state){
    $(this).html('Остановить');
    $("#hint").fadeIn();
    document.getElementById("before").play();
    document.getElementById("after").play();
    timer = setInterval('VolChenge()', 50);
    state=false;
  }else{
    $(this).html('Послушать пример');
    $("#hint").fadeOut();
    $(".fa-arrow-left").css({ opacity : 1});
    $(".fa-arrow-right").css({ opacity : 1});
    document.getElementById("before").pause();
    document.getElementById("after").pause();
    clearInterval(timer);
    state=true;
  }
});

$(document).ready(function(){
 $(".top-menu").sticky({topSpacing:0});
});

$(function(){
 $(".masked-phone").mask("+7(999) 999-99-99");
});

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:false,
    autoWidth   :true,
    nav         : false,
    margin      : 60,
    center      : true,
    singleItem  : true,
    rewindNav   : true,
    dots: true,
    //navText: ['<figure class="larr"></figure>', '<figure class="rarr"></figure>'],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },            
      960:{
        items:1
      },
      1200:{
        items:1
      }
    }
  });
});

$(document).ready(function() {  
    $(".mejs-playlist").niceScroll();
  }
);