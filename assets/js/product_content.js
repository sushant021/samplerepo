console.log(elementId);
			document.getElementById(elementId).style.display = "block";

			function showContent(id){
				
				var elements = document.getElementsByClassName("product");

				for(var i =0; i < elements.length;i++){

					elements[i].style.display="none";
				}

				document.getElementById(id).style.display="block";
			}
