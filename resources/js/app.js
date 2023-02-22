import './bootstrap';



  
    function reveal(){
     window.addEventListener("scroll", reveal);{
      var reveals = document.querySelectorAll('.reveal');
  
      for(var i = 0; i < reveals.length; i++){
      
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;
  
        if(revealtop < windowheight - revealpoint){
          reveals[i].classlist.add("active");
        }
        else{
          reveals[i].classlist.remove("active");
        }
      }
    }
}
