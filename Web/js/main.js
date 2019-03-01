/*** Contact form validation ***/
	function displayError() {
		var fname = $('#firstname').val();
		var lname = $('#lastname').val();
		var email = $('#email').val();
		var obj = $('#object').val();
		var msg = $('#message').val();
		
		if ((fname == "") && (lname == "") && (email == "") && (obj == "") && (msg == "")) // Every inputs are empty
		{
			$('#firstname').css("border", "2px solid red");
			$('#lastname').css("border", "2px solid red");
			$('#email').css("border", "2px solid red");
			$('#object').css("border", "2px solid red");
			$('#message').css("border", "2px solid red");
			
			$('#errorMessage').css("display", "inline");
			
			return false;
		} else {
			$('#firstname').css("border", "2px solid #12A000");
			$('#lastname').css("border", "2px solid #12A000");
			$('#email').css("border", "2px solid #12A000");
			$('#object').css("border", "2px solid #12A000");
			$('#message').css("border", "2px solid #12A000");
			
			$('#validMsg').css("display", "inline");
			
			return true;
		}
	}
	
/*** Parts transition ***/
	$('a[href^=#]').on("click",function(){
		var t= $(this.hash);
		var t=t.length&&t||$('[name='+this.hash.slice(1)+']');
    
		if(t.length){
			var tOffset=t.offset().top;
			$('html,body').animate({scrollTop:tOffset-20},'slow');
        
			return false;
		}
	});

/*** Display dropdown menu ***/
	$('.bars').click(function() {
		$('#dropdown_menu').slideToggle("slow");
		});
	
/*** Navicon transition ***/
	function naviconTransition(x) {
		x.classList.toggle("change");
	}
	
/*** Modal box age function ***/
	var birthdate = new Date("1997/5/29");
	var now = new Date();
	var diff = now - birthdate;
	var age = Math.floor(diff/31536000000);
	document.getElementById("age").innerHTML = age