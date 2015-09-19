<!DOCTYPE html>
<html>
	<head>
		<title>Barbershop Borodinski - Каталог</title>
		<meta charset="utf-8" >
	</head>
	<body>
		<!-- Верхнее меню -->
		<div class="header">
			<div class="layout-center-wrapper">
				<ul class="top-menu">
					<li><a href="/" >Главная</a></li>
					<li><a href="#" >Информация</a></li>
					<li><a href="#" >Новости</a></li>
					<li><a href="/pricelist.php" >Прайс-лист</a></li>
					<li><a href="/catalog.php" >Магазин</a></li>
					<li><a href="#" >Контакты</a></li>
				</ul>
				<!-- аккаунт блок -->
				<div class="account-menu">
					<a class="account-menu-enter" href="#"  ></a>
				</div>
			</div>
		</div>
		<!-- Контент блок -->
		<div class="layout-center-wrapper content">
			<!-- Заголовок и хлебные крошки -->
			<h1>Barbershop Borodinski - Магазин</h1>
			
			<ul class="breadcrumbs" >
				<li><a href="/">Главная</a></li>
				<li><a href="/catalog.php">Магазин</a></li>
				<li>Средства для ухода</li>
			</ul>
			
			<!-- Левый сайдбар -->
			<div class="content-left-sidebur" >
				<!-- Фильтр -->
				<div class="filter-block" >
					<form class="filter-block-form" >
						<h3>Производители</h3>
						<ul>
							<li>
								<input type="checkbox" id="prop_1" name="manufacturer" value="1" />
								<label for="prop_1"><span></span>Baxter of California</label>
							</li>
							<li>
								<input type="checkbox" id="prop_2" name="manufacturer" value="2" />
								<label for="prop_2"><span></span>Mr Natty</label>
							</li>
							<li>
								<input type="checkbox" id="prop_3" name="manufacturer" value="3" />
								<label for="prop_3"><span></span>Suavecito</label>
							</li>
							<li>
								<input type="checkbox" id="prop_4" name="manufacturer" value="4" />
								<label for="prop_4"><span></span>Malin+Goetz</label>
							</li>
							<li>
								<input type="checkbox" id="prop_5" name="manufacturer" value="5" />
								<label for="prop_5"><span></span>Murray’s</label>
							</li>
							<li>
								<input type="checkbox" id="prop_6" name="manufacturer" value="6" />
								<label for="prop_6"><span></span>American Crew</label>
							</li>
						</ul>
					</form>	
				</div>
				
				<!-- Левое меню -->
				<div class="left-menu" >
					<h3>Группы товаров:</h3>
					<ul>
						<li class="active"><a href="#" >Бритвенные принадлежности</a></li>
						<li><a href="#" >Средства для ухода</a></li>
						<li><a href="#" >Аксессуары</a></li>
					</ul>
				</div>
				
			</div>
			
			<!-- Список товаров -->
			<div class="content-catalog" >
				<ul class="content-catalog-list" >
					<li class="content-catalog-item">
						<img class="content-catalog-item-img" alt="Набор для путешествий Baxter of California" src="/pictures/product_1.jpg" >
						<span class="content-catalog-item-title" >Набор для путешествий Baxter of California</span>
						<a class="btn buy-btn" >2 900 р.</a>
					</li>
					
					<li class="content-catalog-item">
						<img class="content-catalog-item-img" alt="Увлажняющий кондиционер Baxter of California" src="/pictures/product_2.jpg" >
						<span class="content-catalog-item-title" >Увлажняющий кондиционер Baxter of California</span>
						<a class="btn buy-btn" >750 р.</a>
					</li>
					
					<li class="content-catalog-item">
						<img class="content-catalog-item-img" alt="Гель для волос SAUVECITO" src="/pictures/product_3.jpg" >
						<span class="content-catalog-item-title" >Гель для волос SAUVECITO</span>
						<a class="btn buy-btn" >290 р.</a>
					</li>
					
					<li class="content-catalog-item">
						<img class="content-catalog-item-img" alt="Глина для Укладки Волоc AMERICAN CREW" src="/pictures/product_4.jpg" >
						<span class="content-catalog-item-title" >Глина для Укладки Волоc AMERICAN CREW</span>
						<a class="btn buy-btn" >500 р.</a>
					</li>
					
					<li class="content-catalog-item">
						<img class="content-catalog-item-img" alt="Гель для бритья AMERICAN CREW" src="/pictures/product_5.jpg" >
						<span class="content-catalog-item-title" >Гель для бритья AMERICAN CREW</span>
						<a class="btn buy-btn" >300 р.</a>
					</li>
					
					<li class="content-catalog-item">
						<img class="content-catalog-item-img" alt="Набор для бритья Baxter of California" src="/pictures/product_6.jpg" >
						<span class="content-catalog-item-title" >Набор для бритья Baxter of California</span>
						<a class="btn buy-btn" >3 900 р.</a>
					</li>
				</ul>
				
				<div class="page-nav">
					<ul>
						<li class="active"><a href="#" >1</a></li>
						<li><a href="#" >2</a></li>
						<li><a href="#" >3</a></li>
						<li><a href="#" >4</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="layout-center-wrapper">
				<div class="contacts-adress" >
					<p><strong>Barbershop &laquo;Borodinski	&raquo;</strong></p>
					<p>Адрес: г.Москва, ул. Собаки Павлова, д.13 </p>
					<p>Телефон: +7 (495) 666-02-666</p>
				</div>
				<div class="social-buttons" >
					<strong>Давайте дружить</strong>
					<a href="http://vk.com" class="btn-social btn-social-vk" ></a>
					<a href="http://facebook.com" class="btn-social btn-social-fb" ></a>
					<a href="http://instagram.com" class="btn-social btn-social-inst" ></a>
				</div>
				<div class="copyright" >
					<strong>Дизайн сайта:</strong>
					<a href="#" class="btn">Glukhanko.ru</a>
				</div>
			</div>
		</div>
	</body>
</html>		