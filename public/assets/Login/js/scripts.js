$(window).load(function() {

	var windowH = $(window).height();
	$(".overslider").css("margin-top", windowH);
	$(window).trigger('resize');
	initsliderHome();

    /* init Flex Slider Home */
	function initsliderHome()
	{
		/* Bienvenue Slider */
		$(function(){
			$("#maximage").maximage({
	        	cycleOptions: {
	            fx: "fade",
	            timeout:6000,
	        },
	        backgroundSize:"cover",
	        onFirstImageLoaded: function () {
	            $("#maximage").fadeIn("normal");
	            $(".loginBloc").delay(1000).fadeIn("normal");
	            //centerValue();
	        }
	    });
    });
    /*$(".in-slide-content").delay(1200).fadeIn();*/

	}/* end init Flex Slider Home */
	
	/* remove Loder */
	function removeLoader()
	{
		$(".loading").fadeOut();
		
		$(".overslider").fadeIn("normal",function(){
		
			$(".overslider").css("margin-top", windowH);
		});
		
	} /* end remove Loder */
	
	function centerValue() {

	    var e = 0;
	    $(".in-slide-content").each(function () {
	        var t = $(this).width() / 2;
	        e = t > e ? t : e
	    });
	    $(".in-slide-content").css("margin-left", -e);
	}
	
	
	function initBubulle()
	{
		if($("html").hasClass("iphone"))
		{
			$("#bulle-iphone").fadeIn("normal",function(){
					
				$(this).animate({bottom: '0px'},1500);
			});

		}
		
		if($("html").hasClass("ipad"))
		{
			
			$("#bulle-ipad").fadeIn("normal",function(){
				
				$(this).animate({top: '0px'},1500);
			});
			
		}
		
		//Si on clique sur la croix
		$(".bulle-container .close").click(function(){
			killBulle();
			
		});
		//Lance le chrono
		setTimeout(function() {
		
			killBulle();
		     
		}, 10000);
		
		function killBulle()
	    {
	    		
		    if($("#bulle-iphone").css("display") == "block")
		    {
		     	$("#bulle-iphone").fadeOut("normal");
		    }
		     
		    if($("#bulle-ipad").css("display") == "block")
		     {
			    $("#bulle-ipad").fadeOut("normal");
		     }
		     
		     $.cookie('visite', '1');
	    }

	} // End initBubulle

}); // End Load







