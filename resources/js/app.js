require('./bootstrap');

   
// var $simpleCarousel = document.querySelector(".js-carousel--simple");

// new Glider($simpleCarousel, {
//   slidesToShow: 2,
//   slidesToScroll: 2,
//   draggable: true,
//   dots: ".js-carousel--simple-dots",
//   arrows: {
//     prev: ".js-carousel--simple-prev",
//     next: ".js-carousel--simple-next",
//   },
// });
    
document.addEventListener('DOMContentLoaded',function(){

    //var n = document.getElementById('countanimation').value;
    
    var options = {
      useEasing : true,
      useGrouping : true,
      separator : '.',
      decimal : ',',
      prefix : '',
      suffix : ''
    };

    var im = new CountUp("imoveis", 0, 6792, 0, 5, options);
    var ap = new CountUp("apartamento", 0, 500, 0, 5, options);
    var ho = new CountUp("hotel", 0, 300, 0, 5, options);

    im.start();
    ap.start();
    ho.start();

})

document.addEventListener('DOMContentLoaded', function(){
    AOS.init();
})