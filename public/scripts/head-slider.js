$(document).ready(function(){
  $('.header-slider').slick({
  infinite: false,
  arrows:false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
    autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1245,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 999,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 825,
      settings: {
		arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 355,
      settings: {
      }
    }
  ]
  });
});
