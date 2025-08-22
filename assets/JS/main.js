$(window).on("scroll",function(){
		//fadein
	$('[data-fadeIn]').each(function(index,el){
		if($(window).scrollTop()>($(el).offset().top - $(window).height() / 1.65)){
			$(el).addClass('is_over');
		}
	})
})

$(function(){

  $('.other_trigger').on('click',function(){
    $(this).toggleClass('is_active');
    $('.other').toggleClass('is_active');
    $('.other_cover').toggleClass('is_active');
  });
  var width=$(window).width();
  if (width<=769){
    $('.mv').not('.slick-initialized').slick({
		arrows:false,
		autoplay:true,
		dots:true,
		speed:1500,
		easing:'swing',
		centerMode:true,
		centerPadding:'0%',
		prevArrow:'<div class="slide-btn prev-btn"></div>',
		nextArrow:'<div class="slide-btn next-btn"></div>',
    });
  }

})
$(window).resize(function(){
  var width=$(window).width();
  if (width<=769){
    $('.mv').not('.slick-initialized').slick({
		autoplay:true,
		dots:true,
		speed:1500,
		easing:'swing',
		centerMode:true,
		centerPadding:'0%',
		prevArrow:'<div class="slide-btn prev-btn"></div>',
		nextArrow:'<div class="slide-btn next-btn"></div>',
    });
  }
  else{
    $('.mv').remove();
    $('main').prepend(`<div class="mv">
                      <img src="./assets/img/mabo_tofu.JPG" alt="MV">
                      <img src="./assets/img/mabo_nameko.JPG" alt="MV">
                      <img src="./assets/img/mabo_don.JPG" alt="MV">
                    </div>`
    );
  }
})