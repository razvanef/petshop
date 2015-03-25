$(document).ready(function(){
    $(".toggle-footer").click(function(){
        $("#footer-content").slideToggle("slow");
    });
    $(".popup").hide();
    $(".buttonlog").click(function(e) {
        //$("body").append('<div class="overlay"></div>');
		$(".popup").show();
		
		$(".close").click(function(e) {
			$(".popup").hide();
		});
    });
    
});
