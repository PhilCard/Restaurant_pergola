
  window.onscroll = function(){
    let top = window.pageYOffset || document.documentElement.scrollTop;
    
    if(top > 400){
       
      console.log("chegou a 400")
       document.getElementById("topo-fixo").classList.add("menu-fixo");
       }else{
       document.getElementById("topo-fixo").classList.remove("menu-fixo");
         //console.log(top)
       //fim menu fixo//
       }
  }