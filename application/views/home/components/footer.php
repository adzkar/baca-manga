<script src="<?= base_url() ?>assets/css/owl/docs/assets/vendors/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/css/owl/dist/owl.carousel.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready();
	$('.owl-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		loop:true,
		margin:10,
		nav:true,
		responsive:{
		    0:{
		        items:1
		    },
		    600:{
		        items:3
		    },
		    1000:{
		        items:6
		    }

		}

	});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>