$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.secciones section').hide();
	$('.secciones section:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones section').hide();

		var activeTab= $(this).attr('href');
		$(activeTab).show();

		return false
	});

	
	$('.secciones section article.descripcionnodulos').hide();
	$('#numeronodulos').change(function(){
		var select = document.getElementById('numeronodulos');
		var value = select.options[select.selectedIndex].value;
		$('.secciones section article.descripcionnodulos').hide();
		//use if and elif to show one by one each possibility
		if (value=='1'){
			$('.secciones section article.descripcionnodulos:first').show();
		}else if(value=='2'){
			$('.secciones section article.descripcionnodulos:first').show();
			$('.secciones section article.descripcionnodulos#2').show();
		}else if(value=='3'){
			$('.secciones section article.descripcionnodulos:first').show();
			$('.secciones section article.descripcionnodulos#2').show();
			$('.secciones section article.descripcionnodulos#3').show();
		}else if(value=='4'){
			$('.secciones section article.descripcionnodulos:first').show();
			$('.secciones section article.descripcionnodulos#2').show();
			$('.secciones section article.descripcionnodulos#3').show();
			$('.secciones section article.descripcionnodulos#4').show();
		}else if(value=='5'){
			$('.secciones section article.descripcionnodulos:first').show();
			$('.secciones section article.descripcionnodulos#2').show();
			$('.secciones section article.descripcionnodulos#3').show();
			$('.secciones section article.descripcionnodulos#4').show();
			$('.secciones section article.descripcionnodulos#5').show();
		}
	});
});
