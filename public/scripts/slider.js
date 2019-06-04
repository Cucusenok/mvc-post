$(document).ready(function(){
  $('.video-slider').slick({
dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1245,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 999,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
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
		dots: false
      }
    }
  ]
  });
});