var mywindow = $(window);
var mypos = mywindow.scrollTop();
mywindow.scroll(function() {
    if(mywindow.scrollTop() > mypos)
    {
        $('.menu-dark').fadeOut();  
    }
    else
    {
        $('.menu-dark').fadeIn();
    }
    mypos = mywindow.scrollTop();
 });