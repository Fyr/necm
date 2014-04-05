<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
	<?=$this->Html->charset(); ?>
	<title><?=DOMAIN_TITLE?></title>
<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css(array('normalize', 'main'));
	echo $this->Html->script(array(
		'vendor/modernizr-2.6.2.min',
		'vendor/jquery/jquery-1.10.2.min',
		'plugins',
		'main',
	));

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>
</head>
<body>
<div id="page">
	<div id="page_in">
	    <header id="header" class="clearfix">
	    	<div class="head_top">
				<a href="/" class="head_logo"><img src="/img/logo.jpg" alt=""></a>
				<address class="head_address">
					<span class="head_phone">+7 (097) 87 65 43</span>
					<span class="head_street">г. Минск, пр. Независимости, 17</span>
				</address>
	    	</div>
			<nav class="head_navi">
				<div class="head_navi_logo">
					<img src="/img/logo_tdm.png" alt="">
				</div>
				<?=$this->element('/SiteUI/site_menu')?>
			</nav>
		</header>

		<div id="content">
			<?=$this->element('/SiteUI/slider')?>
			<div class="content_2_cols clearfix">
				<div class="side_col">
					<div class="side_block">
						<div class="side_h">
							<div class="side_h_in">Каталог</div>
						</div>
						<div class="side_content">
							<nav class="side_navigation">
								<?=$this->element('/SiteUI/categories')?>
							</nav>
						</div>
					</div>

					<div class="side_block">
						<div class="side_h">
							<div class="side_h_in">поиск</div>
						</div>
						<div class="side_content">
							<?=$this->element('/SiteUI/search')?>
						</div>
					</div>							
					<div class="side_block">
						<div class="side_h">
							<div class="side_h_in">новости</div>
						</div>
						<div class="side_content">
							<?=$this->element('/SiteUI/randomNews')?>
						</div>
					</div>
				</div>

				<div class="main_col">
					<div class="main_col_block">
						<div class="main_col_h">
							<div class="main_col_h_in">
								<h1>Welcome</h1>
							</div>
						</div>
						<div class="main_col_c">
							<div class="main_col_c_in">
								<div class="main_2_cold">
									<div class="main_col_img"><a href=""><img src="/img/_temp/article_img.jpg" alt=""></a></div>
									<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo </p>
									<p>Duis aute irure dolor in reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, <a href="">aspernatur</a> aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam </p>
								</div>
							</div>
						</div>
					</div>
					<div class="main_col_block">
						<div class="main_col_h">
							<div class="main_col_h_in">
								<h2>Новинки</h2>
							</div>
						</div>
						<div class="main_col_c">
							<div class="main_col_c_in">
								<ul class="main_news_list">
									<li class="main_news_li">
										<div class="main_col_img">
											<a href="">
												<span class="img_item_h">Лампы светодиодные LED<br/> Вторая строка</span>
												<span class="img_item_price">1500 руб.</span>
												<img src="/img/_temp/item_img.jpg" alt="">
											</a>
										</div>
									</li>
									<li class="main_news_li">
										<div class="main_col_img">
											<a href="">
												<span class="img_item_h">Лампы светодиодные LED<br/> Вторая строка</span>
												<span class="img_item_price">1500 руб.</span>
												<img src="/img/_temp/item_img.jpg" alt="">
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="main_col_block">
						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>		
</div>
<footer id="footer">
	<div id="footer_in" class="clearfix">
		<div class="width_fix">
			<div class="footer_left">
				<div class="footer_address">
					<address class="footer_phone">+7 (097) 87 65 43</address>
					<address class="footer_street">г. Минск, пр. Независимости, 17</address>
				</div>
			</div>
			<div class="footer_right">
				<div class="footer_navi">
					<?=$this->element('/SiteUI/bottom_links')?>
				</div>
			</div>
		</div>
	</div>
	<div class="cpr">
		<div class="width_fix">Все права защищены, 2012</div>
	</div>
</footer>
</body>
</html>