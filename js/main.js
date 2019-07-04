$("#close-sidebar").click(function() {
  $(".page-principal").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-principal").addClass("toggled");
});

$("#hambu").click(function() {
  $(".menuH").toggleClass("clickmenuH");
});

$("#losa").click(function() {
  //$("#losa").html("Salir");
  var tlosa = $("#losa").text();
  if(tlosa =="Salir"){
    $("#losa").html("<b>Login<b>");
  }else{
    $("#losa").html("<b>Salir<b>");
  }
});

  "use strict"

  var init = "0";
  var counter = 0;

  // Initial Cart
  $(".counter").html(init);
  
  // Add Items To Basket
  function addToBasket() {
    counter++;
    $(".counter").html(counter).animate({
      'opacity' : '0'
    },300, function() {
      $(".counter").delay(300).animate({
        'opacity' : '1'
      })
    })
  }

  // Add To Basket Animation
  $(".agregar").on("click", function() {
    addToBasket(); $(this).parent().parent().find(".product_overlay").css({
      'transform': ' translateY(0px)',
      'opacity': '1',
      'transition': 'all ease-in-out .45s'
    }).delay(1500).queue(function() {
      $(this).css({
        'transform': 'translateY(-500px)',
        'opacity': '0',
        'transition': 'all ease-in-out .45s'
      }).dequeue();
    });
  });