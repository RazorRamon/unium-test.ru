<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!-- Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>

		<!-- Cycle2 - Слайдер -->
		<script type="text/javascript" src="/js/jquery.cycle2.js"></script>
		
		<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
		<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
		
		<!-- Карусель Сегодня в продаже на главной -->
		<script src="/js/jcarousellite.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  $("a.new_window").attr("target", "_blank");
			  
			  //carousel
			  $(".carousel").jCarouselLite({
				  btnNext: ".next2",
				  btnPrev: ".prev2"
			  });
			});
		</script>
		
		<!-- Телефоны различных городов -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('footer .click1').click(function(){
					$('footer .phone_back').html('<sup>8 (111)</sup> 111-11-11<br /><sup>8 (111)</sup> 111-11-11');
			    });
				$('footer .click2').click(function(){
					$('footer .phone_back').html('<sup>8 (222)</sup> 222-22-22<br /><sup>8 (222)</sup> 222-22-22');
			    });
				$('footer .click3').click(function(){
					$('footer .phone_back').html('<sup>8 (333)</sup> 333-33-33<br /><sup>8 (333)</sup> 333-33-33');
			    });
				$('footer .click4').click(function(){
					$('footer .phone_back').html('<sup>8 (444)</sup> 444-44-44<br /><sup>8 (444)</sup> 444-44-44');
			    });
				$('footer .click5').click(function(){
					$('footer .phone_back').html('<sup>8 (555)</sup> 555-55-55<br /><sup>8 (555)</sup> 555-55-55');
			    });
				$('footer .click6').click(function(){
					$('footer .phone_back').html('<sup>8 (666)</sup> 666-66-66<br /><sup>8 (666)</sup> 666-66-66');
			    });
				$('footer .click7').click(function(){
					$('footer .phone_back').html('<sup>8 (777)</sup> 777-77-77<br /><sup>8 (777)</sup> 777-77-77');
			    });
				$('footer .click8').click(function(){
					$('footer .phone_back').html('<sup>8 (888)</sup> 888-88-88<br /><sup>8 (888)</sup> 888-88-88');
			    });
				$('footer .click9').click(function(){
					$('footer .phone_back').html('<sup>8 (999)</sup> 999-99-99<br /><sup>8 (999)</sup> 999-99-99');
			    });
			 });
		</script>
	</head>
	<body>
		<header>
			<div class="top_menu">
				<div class="width_screen">
					<ul>
						<li class="active">Преимущества</li>
						<li>Отзывы</li>
						<li>Расположение</li>
						<li>Контакты</li>
						<li>Оставить заявку</li>
					</ul>
				</div>
			</div>
			<div class="wrap_block_info">
				<div class="block_info">

				</div>
			</div>
			<div class="header_info">
				<div class="slideshow" 
					data-cycle-fx=carousel
				    data-cycle-timeout=3000
					data-cycle-slides="> div"
				    data-cycle-carousel-visible=3
				    >
					<div>
						<img src="/images/1slide-1.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-2.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и<br />это могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-3.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-4.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-5.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-6.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-7.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
					<div>
						<img src="/images/1slide-8.png">
						<h2>Эффективное обучение</h2>
						<p>Качество всегда было нашим приоритетом, и это<br />могут подтвердить тысячи школьников, прошедших<br />у нас обучение. 95% учащихся достигают поставленных<br />целей уже в первом полугодии. Выпускники курсов Юниум<br />получают на 17 баллов больше, чем в среднем по России.</p>
					</div>
				</div>
			</div>
		</header>
		
		<main>
			<div class="main_menu">
				<div class="width_screen">
					<ul>
						<li>Преимущества</li>
						<li class="active">Отзывы</li>
						<li>Расположение</li>
						<li>Контакты</li>
						<li>Оставить заявку</li>
					</ul>
				</div>
			</div>
			<div class="wrap_block_info">
				<div class="block_info">

				</div>
			</div>
			<div class="main_info">
				<div class="slideshow" 
					data-cycle-fx=carousel
				    data-cycle-timeout=3000
					data-cycle-slides="> div"
				    data-cycle-carousel-visible=2
				    >
					<div>
						<div class="description">
							<h2>Jekyll & Hyde<br />
								<span>by Nicole</span>
							</h2>
							<p>Jekyll & Hyde is a bespoke coctail<br />experience. The friendly mixologists craft<br />your coctails according to your palate or<br />your mood. If you're in the neighbourhood a<br />little early, have manicure - it doubles as a<br />manicure studio by day!</p>
							<div class="address">
								<div class="adr1">49 Tras Sreet, 078988<br />
									<a class="address_link" href="#">Show on map</a>
								</div>
								<div class="adr2"><a class="address_link" href="#">49tras.st</a></div>
								<div class="adr3">Open Monday to Thursday 18:00-00:00,<br />Friday and Saturday 18:00-01:00.</div>
							</div>
						</div>
						<img src="/images/2slide-1.png">
						<h2 class="name">Сергей Алилуев<br />15 лет</h2>
					</div>
					<div>
						<div class="description">
							<h2>Public & Garden<br />
								<span>by Marilyn</span>
							</h2>
							<p>Jekyll & Hyde is a bespoke coctail<br />experience. The friendly mixologists craft<br />your coctails according to your palate or<br />your mood. If you're in the neighbourhood a<br />little early, have manicure - it doubles as a<br />manicure studio by day!</p>
							<div class="address">
								<div class="adr1">49 Tras Sreet, 078988<br />
									<a class="address_link" href="#">Show on map</a>
								</div>
								<div class="adr2"><a class="address_link" href="#">49tras.st</a></div>
								<!--<div class="adr3">Open Monday to Thursday 18:00-00:00,<br />Friday and Saturday 18:00-01:00.</div>-->
							</div>
						</div>
						<img src="/images/2slide-2.png">
						<h2 class="name">Илья Алейников<br />16 лет</h2>
					</div>
					<div>
						<div class="description">
							<h2>Public & Garden<br />
								<span>by Marilyn</span>
							</h2>
							<p>Jekyll & Hyde is a bespoke coctail<br />experience. The friendly mixologists craft<br />your coctails according to your palate or<br />your mood. If you're in the neighbourhood a<br />little early, have manicure - it doubles as a<br />manicure studio by day!</p>
							<div class="address">
								<div class="adr1">49 Tras Sreet, 078988<br />
									<a class="address_link" href="#">Show on map</a>
								</div>
								<div class="adr2"><a class="address_link" href="#">49tras.st</a></div>
								<!--<div class="adr3">Open Monday to Thursday 18:00-00:00,<br />Friday and Saturday 18:00-01:00.</div>-->
							</div>
						</div>
						<img src="/images/2slide-2.png">
						<h2 class="name">Илья Алейников<br />16 лет</h2>
					</div>
				</div>
				<div class="text_block"><b>Качество</b> всегда было нашим приоритетом, и это могут подтвердить тысячи школьников, прошедших у нас обучение. 95% учащихся достигают поставленных целей уже в первом полугодии.<br /><br />
				Выпускники курсов Юниум получают на <b>17 баллов</b> больше, чем в среднем по России.</div>
			</div>
		</main>
		
		<footer>
			<div class="footer_menu">
				<div class="width_screen">
					<ul>
						<li>Преимущества</li>
						<li>Отзывы</li>
						<li class="active">Расположение</li>
						<li>Контакты</li>
						<li>Оставить заявку</li>
					</ul>
				</div>
			</div>
			<div class="block_info">

			</div>
			<div class="footer_info">
				<div class="phone_back">
					<sup>8 (495)</sup> 640-07-20<br /><sup>8 (551)</sup> 640-71-17
				</div>
				<div id="city">
					<div class="carousel-box">
						<div class="prev2">
							<a href="#" class="prev">
								<img src="/images/prev.png" alt="Prev" />
							</a>
						</div>
						<div class="carousel">
							<ul class="city">
								<li style="overflow: hidden;">
									<a class="click1" href="javascript:void(0)">Москва</a>
									<a class="click2" href="javascript:void(0)">Санкт-Петербург</a>
									<a class="click3" href="javascript:void(0)">Екатеринбург</a>
								</li>
								<li style="overflow: hidden;">
									<a class="click4" href="javascript:void(0)">Челябинск</a>
									<a class="click5" href="javascript:void(0)">Нижний Новгород</a>
									<a class="click6" href="javascript:void(0)">Самара</a>
								</li>
								<li style="overflow: hidden;">
									<a class="click7" href="javascript:void(0)">Киров</a>
									<a class="click8" href="javascript:void(0)">Белая Холуница</a>
									<a class="click9" href="javascript:void(0)">Омутнинск</a>
								</li>
							</ul>
						</div>
						<div class="next2">
							<a href="#" class="next">
								<img src="/images/next.png" alt="Next" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>