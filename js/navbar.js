// event pada saat link diklik
$('.page-scroll').on('click',function(e){


	//ambil isi href
	var tujuan = $(this).attr('href');
	//tangkap element yngbersangkutan
	var elementTujuan = $(tujuan);
	
	//pindahkan scroll
	$('html,body').animate({
		scrollTop: elementTujuan.offset().top-60


	}, 1000, 'easeInOutExpo');

	e.preventDefault();
});