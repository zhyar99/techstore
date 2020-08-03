$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$('#myCollapsible').collapse({
    toggle: false
})
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if(isMobile.any()) 
{
    $('.filter-toggle').hide();
    $('.side-filter-container').hide();
    $('.sort-container').hide();
    $('.modal-btn').show();
}
else
{
    $('.modal-btn').hide();
}

var sideFilter = false;
$('.filter-toggle').on('click',function(event){
    event.preventDefault();
    if(sideFilter == false)
    {
        $('.side-filter-container').hide("slide", {direction: "left"}, 500); 
        setTimeout(function() {
            $('.page-content-container').addClass('col-md-12').removeClass('col-md-10');
        }, 500);  

        sideFilter = true;
    }
    else if(sideFilter == true)
    {
        $('.side-filter-container').show("slide", {direction: "left"}, 500);
        $('.page-content-container').addClass('col-md-10').removeClass('col-md-12');
        sideFilter = false;
    } 
});

function sidebarResponsive(query) {
  if (query.matches) 
  { 
    $('.side-filter-container').hide();
    $('.page-content-container').addClass('col-md-12').removeClass('col-md-10');
    $('.filter-toggle-mobile').show();
    $('.filter-toggle').hide();
    $('.filter-toggle-mobile').on('click',function(){
        $('.side-filter-container').show("slide", {direction: "left"}, 500);
    });

    $('.close-icon').on('click',function(){
        $('.side-filter-container').hide("slide", {direction: "left"}, 500);
    });
  } 
  else 
  {
    $('.filter-toggle-mobile').hide();
    $('.filter-toggle').show();
    $('.page-content-container').addClass('col-md-10').removeClass('col-md-12');
    $('.side-filter-container').show();
    sideFilter == false;
  }
}

var query = window.matchMedia("(max-width: 1362px)");
sidebarResponsive(query);
query.addListener(sidebarResponsive);

var bio_cont = document.getElementsByClassName("card-product-information");        
for(var i = 0 ; i < bio_cont.length ; i++ ){
    var temp = bio_cont[i].textContent;
    if(temp.length !== 0 && temp.length > 80){
        temp = temp.substring(0,80);
        bio_cont[i].innerHTML = temp + " ....."
    }
    else if(temp.length == 0){
        bio_cont[i].style.height = "18px";
    }
}

$(document).ready(function(){
    $('.main-card-image').hover(
        function(){$(this).attr("src","assets/images/msi2.png")},
        function(){$(this).attr("src","assets/images/msi.png")}
    );
});