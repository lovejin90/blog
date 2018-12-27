<div class="wrap" id="main">
	<section id="intro" class="scroll">
		<a><span></span>Scroll</a>
		<div class="intro-text">
			<div class="s_text" id="s_text">
				<h1>Welcome</h1>
				<h1>I'm JEON</h1>
			</div>
		</div>
	</section>
	<section id="text-area-1" class="text-area ws">
		<div class="flexslider">
			<ul class="slides">
				<?php foreach($rss as $k=>$v) : ?>
				<li>
				<div class="content">
					<a href="<?=$v['link'];?>" target="_blnak">
					<h1><?=$v['title'];?></h1>
					<span>
					<?=date('Y-m-d',strtotime($v['pubDate']));?>
					</span>
					<span class="goUrl">바로가기</span>
					</a>
				</div>
				
				</li>
				<?php
					endforeach;
				?>
				
			</ul>
		</div>
	</section>
	<section id="content-area" class="bs">
		<div class="content">
			<h1>Who?</h1>
			<span>My hobbies</span>
			<ul class="cards">
				<li class="card"><img src="<?=$lib_dir?>images/hobby-1.jpg" alt=""><span>Development</span></li>
				<li class="card"><img src="<?=$lib_dir?>images/hobby-2.jpg" alt=""><span>Travel</span></li>
				<li class="card"><img src="<?=$lib_dir?>images/hobby-3.jpg" alt=""><span>Camera</span></li>
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

		$("#s_text").addClass("active");
	});
</script>