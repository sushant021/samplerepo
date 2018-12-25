
    function showlist(elementId,iconId){
      var x = document.getElementById(elementId);
      x.classList.toggle("show");
      var y = document.getElementById(iconId);
      (y.classList[1]=="fa-plus-square")?y.className="fas fa-minus-square" : y.className="fas fa-plus-square";
    }

    function show_hidemenu(){
      var x= document.getElementById("sideMenu");
      x.classList.toggle("show");
    }

   
  