// All Rights Reserved For FARESSOFT.ORG //

$(document).ready(function(){	
		
		var imgHeight = 250;
		var imgWidth = 700;
		var imagesCount = $("#slider img").length;
		var autoSlideShowTime = 5000;
		var correntImg = 0;
				
		var t=setTimeout("$('#sliderNextImg').trigger('click');",autoSlideShowTime);
				
		function showDescription() {
			$("#desContent").html($("#slider ul li").slice(correntImg, correntImg+1).html());
			var descriptionHeight = $("#description").height();
			$('#description').animate({opacity: 0.0, height: '0px'}, 1);
			$('#description').delay(1000).animate({opacity: 1, height: '60px'}, 500);
		}
				
		showDescription();
				
		$("#slider").hover(function() {
			$("#sliderNextImg, #sliderPreviousImg").css("visibility","visible");
		}, function() {
			$("#sliderNextImg, #sliderPreviousImg").css("visibility","hidden");
		})
						
		$("#sliderNextImg").click(function() {	
			clearTimeout(t)		
			if (correntImg != imagesCount-1) {
				correntImg += 1;
				$('#scroll').animate({marginTop: (-(correntImg) * imgHeight) + "px"}, 1000);
				t=setTimeout("$('#sliderNextImg').trigger('click');",autoSlideShowTime);
			} else {
				correntImg = 0;
				$('#scroll').animate({marginTop: "0px"}, 2000);
				t=setTimeout("$('#sliderNextImg').trigger('click');",1000+autoSlideShowTime);
			}	
			showDescription()	
		});
				
		$("#sliderPreviousImg").click(function() {	
			clearTimeout(t)	
			if (correntImg != 0) {
				correntImg -= 1;
				$('#scroll').animate({marginTop: (-(correntImg) * imgHeight) + "px"}, 1000);
			} else {
				correntImg = imagesCount - 1;
				$('#scroll').animate({marginTop: (-(correntImg) * imgHeight) + "px"}, 2000);
			}
			t=setTimeout("$('#sliderNextImg').trigger('click');",autoSlideShowTime);
			showDescription()
		});		
			
});



