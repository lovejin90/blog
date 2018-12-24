<div class="wrap" id="main">
	<section id="intro" class="scroll">
		<a><span></span>Scroll</a>
		<div class="intro-text">
			<div class="s_text" id="s_text">
				<h1>HELLO WORLD</h1>
				<h1>HELLO WORLD</h1>
				<h1>HELLO WORLD</h1>
			</div>
		</div>
	</section>
	<section id="text-area-1" class="text-area ws">
		<div class="flexslider">
			<ul class="slides">
				<li>1
				</li>
				<li>2
				</li>
				<li>3
				</li>
			</ul>
		</div>
	</section>
	<section id="content-area" class="bs">
		<div class="content">
			<h1>SAMPLE</h1>
			<span>sample page</span>
			<ul class="cards">
				<li class="card"></li>
				<li class="card"></li>
				<li class="card"></li>
			</ul>
		</div>
	</section>
	<section id="text-area-2" class="text-area ws">
		<div class="text-box">
			<h1>Context</h1>
			<h2>jun2642@gmail.com</h2>
		</div>
	</section>
</div>


<script>
	$(function(){

		$('.flexslider').flexslider({
			animation: "slide",
			slideshow: true,
			touch: true,
			keyboard: true,
			controlNav: false,
			pauseOnHover: true,
			start: function(){
				//
			},
			after: function(item){
				//
			}
		});

		// var bs = new Array();
		// var ws = new Array();
		// $(".ws").each(function(){
		// 	ws.push($(this).offset());
		// });
		// $(".bs").each(function(){
		// 	bs.push($(this).offset());
		// });

		$(window).scroll( function() {
			var ns = $(".top-area").offset();
			// if (ns.top >= ws[0].top) {
			// 	$('.top-area a').css("color","#000");
			// }
			// if (ns.top >= ws[1].top) {
			// 	$('.top-area a').css("color","#000");
			// }
			// if ( ns.top >= bs[0].top && ns.top < ws[1].top) {
			// 	$('.top-area a').css("color","#fff");
			// }
			if ($( this ).scrollTop() > 200 ) {
				$('.top-area').fadeIn();
			} else {
				$('.top-area').fadeOut();
			}
		});

		$( '.top' ).click( function() {
			$("body,html").animate( { scrollTop : 0 }, 400 );
			return false;
		});
		$("#s_text").addClass("active");
	});
</script>