// SCRIPT 1

	$(document).ready(function(){$('body').scrollspy({target: ".navbar", offset: 50});$("#homeBranding a").on('click', function(event) {if (this.hash !== "") {event.preventDefault();
	       var hash = this.hash;$('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	        window.location.hash = hash;
	      });
	    }  // End if
	  });
	});

	/*
	Script 2
	 */
	
	$("#submenu").hide();
		var flag = 0;
		$("#menu").click(function(){
			flag = (flag + 1)%2;
			
			if (flag==1) {
				$("#submenu").show(1000);
				$(".txt-menu").text("X CERRAR");
			}else {
				$("#submenu").hide(1000);
				$(".txt-menu").text("☰ MENU");
			}
		});
		function message() {
			var modal = document.getElementById('myModal');
			var btn = document.getElementById("myBtn");
			var span = document.getElementsByClassName("close")[0];
			var span2 = document.getElementsByClassName("close2")[0];
			btn.onclick = function() {
			    modal.style.display = "block";
			}
			span.onclick = function() {
			    modal.style.display = "none";
			}
			span2.onclick = function() {
			    modal.style.display = "none";
			}
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
		}
	}
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtnUp").style.display = "block";
		    } else {
		        document.getElementById("myBtnUp").style.display = "none";
		    }
		}
		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}

		/*
		SCRIPT 3
		 */
		

				$(window).on('load', function () {
		    $(".loader-page").fadeOut("slow");
		});