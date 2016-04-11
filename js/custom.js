function listing_destination(){
	$('.outbound_city').hide();
	$('#select_destination').on('change', function(){		
		if($(this).val() == 'inbound'){		
			$('.inbound_city').show();
			$('.outbound_city').hide();
		}
		else{
			$('.inbound_city').hide();
			$('.outbound_city').show();
		}
	});
}
jQuery(document).ready(function(){
	listing_destination();

	$('#yercaud,#pondicherry,#valparai,#bangalore,#mysore,#shimoga,#ooty,#thiruvandrum,#hyderabad,#amristar,#manali,#shimla,#dubai,#bangkok,#malasia,#combodia,#srilanka,#maldives,#shanghai,#singapore,#seychelles,#ladakh,#amsterdam,#paris,#glimpse,#myanmar,#china,#kuwait,#athens,#korea,#swiss,#japan,#cyprus,#russia,#syria,#bhutan,#vietnam,#kenya,#hongkong,#Hongkong,#italy,#newzealand,#australia,#america,#moroco,#philipines, #poland, #egypt, #tebet, #turkey, #kilimanjaro, #mangolia, #uganda, #southafrica, #isrel').on('click', function(){
		//document.body.style.overflow = 'hidden';
		$('body').css('overflow', 'hidden');
		var name = $(this).attr('id');
		$('.popup_background').show();
		$('.'+name+'_popup').show();
	});
	$('.popup_background,.close').click(function() {
		// $(body).removeClass('.modal-open');
		$('body').css('overflow', 'auto');
		$('.popup_background').hide();
		$('.popup').hide();
		$('.popup_in').hide();
	});
	$('.cancel_btn').click(function() {
		$('.modal').hide();
  		$('.modal-backdrop').hide();
 		$('body').css('overflow-y','auto');
 		$('body').css('overflow-x','hidden');
 		$('body').css('padding-right','0');
	});
	$('.close').click(function() {
 		$('body').css('overflow-y','auto');
 		$('body').css('overflow-x','hidden');
 		$('body').css('padding-right','0');
	});


});


  // jQuery('.carousel').carousel({
  //   interval: 7000
  // })
// $('.fancybox').click(function(){
//         scrolling   : 'hidden',
//         helpers: {
//             overlay: {
//               locked: true 
//             }
//         });


// $(function () {
//     $(".fancybox").on("click", function () {
//         $.fancybox($(this).data(""));
//     });
// });

 // $(document).mouseup(function (e) {
 //     var popup = $(".oza-modal-feedback-content");
 //     if (!$('#open').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
 //         popup.hide();
 //     }
 // });
// $(document).ready(function(){
//     $(".custom_font").click(function(){
//        $('body').css('overflow', 'hidden');
//     });
  
// });



// $(document).ready(function(){
    
//         $(".image_one_two img").animate({top: '250px'});
    
// });

