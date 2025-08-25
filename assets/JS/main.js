$(window).on("scroll",function(){
		//fadein
	$('[data-fadeIn]').each(function(index,el){
		if($(window).scrollTop()>($(el).offset().top - $(window).height() / 1.25)){
			$(el).addClass('is_over');
		}
	})
})

//page jump
$('.btn_jump').on('click',function(){
  const tojump=$(this).attr('id');
  if(tojump=='c-btn'){
    if(!$('#cuisine').hasClass('is_over')){
      $('html').css('scroll-padding-top','230px');
    }
    else{
      $('html').css('scroll-padding-top','80px');
    }

}
  if(tojump=='r-btn'){
    if(!$('#reason').hasClass('is_over')){
      $('html').css('scroll-padding-top','230px');
    }
    else{
      $('html').css('scroll-padding-top','80px');
    }
  }
  if(tojump=='a-btn'){
    if(!$('#arrange').hasClass('is_over')){
      $('html').css('scroll-padding-top','230px');
    }
    else{
      $('html').css('scroll-padding-top','80px');
    }
  }  
});

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

