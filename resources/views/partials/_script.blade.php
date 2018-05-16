<script>

	/*####################################
	#	MENU SCRIPTI					#
	#####################################*/

	$(".menuToggle").on("click",function() {
		$(".sidebar").toggleClass('menuAcik');
		$(".main-panel").toggleClass('menuAcikPanel');
	})

	function pencereBoyutu() {
		if($(window).width() < 1200) {
			$(".sidebar").removeClass("menuAcik");
			$(".main-panel").addClass("menuAcikPanel");
		} else {
			$(".sidebar").addClass("menuAcik");
			$(".main-panel").removeClass("menuAcikPanel");
		}
	}

//	$(window).resize(pencereBoyutu);

	pencereBoyutu();

	/*####################################
	#	SİLME İŞLEMİ İÇİN ONAY KUTUSU      	 #
	#####################################*/

	$(".sil_btn").on("click",function(e) {
		e.preventDefault();
		var form = $(this).parents('form:first');
		 if(confirm("Bu Kaydı Silmek İstediğinize Emin misiniz?")) {
			 form.submit();
		 }
	})

	/*####################################
	#	DATATABLES DEFAULT OPTIONS      	 #
	#####################################*/

	$.extend( true, $.fn.dataTable.defaults, {
			lengthChange: false,
			'dom': '<"dataTables_wrapper"f<t><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
			pageLength:50,
			"language": { "url": "{{ url('addons/datatables') }}/turkce.json"},
	} );



	$(document).ready(function() {

	/*####################################
	#	MASK AYARLARI			#
	#####################################*/

		$('.para').mask('##0.00',{reverse:true});
		$(document).on("keypress change keyup focus",".para",function() {
			$(this).mask('##0.00',{reverse:true});
		});
		$(document).on("keypress change keyup focus",".telefon_numarasi",function() {
			$(this).mask('(000) 000 00 00');
		});

	/*####################################
	#	FancyBox Ayarları			#
	#####################################*/

		$('[data-fancybox]').fancybox({
			iframe : {
				preload : true
			}
		});

	})

</script>
