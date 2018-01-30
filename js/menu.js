$(document).ready(main);

var contador = 1;

function main(){
	$('#header__icon').click(function(){

		if(contador == 1){
			$('nav').animate({
				marginLeft: '0px',
				height:'100%'
				// display: 'block'
			},500);

			$('#close').animate({
				marginLeft: '0px',
			},500);


			$('#open').animate({
				marginLeft: '-300px',
			},500);
			// $('.menu .close').removeClass('none');
			// $('.menu .close').addClass('inline-block');
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				marginLeft: '-300%',
				height:'0px'
				// display: 'none'
			},500);

			$('#close').animate({
				marginLeft: '-300px',
			},500);


			$('#open').animate({
				marginLeft: '0px',
			},500);
			// $('.banner').css('marginTop:0px');
		}

	});

};
