$(function(){
	const page_type=$('body').attr('id');
	const window_width = $(window).width(); 
	

	//menu_button
    $('.m-btn').on('click',function(){
		$(this).toggleClass('is-active');
        $('.cle-btn').toggleClass('is-active');
		$('.menu').toggleClass('is-active');
	});
    $('.cle-btn').on('click',function(){
		$('.menu').toggleClass('is-active');
		setTimeout(function(){
			$('.cle-btn').toggleClass('is-active');
			$('.m-btn').toggleClass('is-active');
		},400);
	});
	
	if(page_type=='work-single'){
		if (!/^[1-4]$/.test(id_value)) {
			location.href = 'error.html';
			return;
		  }
		if(window_width <= 1280){
			$('[data-way="Goal"]').empty();
			$('[data-way="Result"]').empty();
			$('[data-way="Goal"]').append('Enhance<br>User Experience');
			$('[data-way="Result"]').append('Revolutionizing<br>the Digital Landscape')
		}
		$(window).resize(function(){
			if(window.matchMedia("(max-width: 768px)").matches){
				$('[data-way="Goal"]').empty();
				$('[data-way="Result"]').empty();
				$('[data-way="Goal"]').append('Enhance<br>User Experience');
				$('[data-way="Result"]').append('Revolutionizing<br>the Digital Landscape')
			}
			else{
				$('[data-way="Goal"]').empty();
				$('[data-way="Result"]').empty();
				$('[data-way="Goal"]').append('Enhance User Experience');
				$('[data-way="Result"]').append('Revolutionizing the Digital Landscape')
			}
		});
	}
	
});