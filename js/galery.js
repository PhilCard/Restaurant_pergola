$('.galeria').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: false,
    nextArrow: false
  });

  //início botão abrir menu e fechar menu//
  
  document.querySelector(".abrir-menu").onclick = function(){
    console.log("ABRIR MENU");
    document.documentElement.classList.add("menu-ativo");
  }
  
  document.querySelector(".fechar-menu").onclick = function(){
    console.log("FECHAR MENU");
    document.documentElement.classList.remove("menu-ativo");
  //fim botão abrir e fechar menu//
  }
  
