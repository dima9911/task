@extends('layout')

@section('title', 'Task#1')


@section('content')
	<section id="home" data-speed="4" data-type="background">
		<div class="container-fluid">
			<div class="row-fluid animated fadeInUp">

				 <span class="glyphicon glyphicon-eye-open hidden-sm hidden-md hidden-lg m">Мобильное меню</span>
				<span class="glyphicon glyphicon-eye-open hidden-xs hidden-md hidden-lg s">Планшетное меню</span>
				<span class="glyphicon glyphicon-eye-open hidden-xs hidden-sm hidden-lg ss">Меню стандартных экранов</span>
				<span class="glyphicon glyphicon-eye-open hidden-xs hidden-sm hidden-md sss">Широкоформатное меню</span>

				<button id="but" value="0" class="btn btn-lg btn-warning hvr-pulse  hidden-xs">click me!</button>


			 <nav class="navbar navbar-default g" role="navigation">
            <div class="navbar-header g">
                <button type="button" class="navbar-toggle mybut" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>


                <span class="glyphicon glyphicon-hand-right myclas hvr-pulse hidden-sm hidden-md hidden-lg">click<span class="glyphicon glyphicon-hand-right myclas hvr-pulse"></span></span>

            </div>
            
            <div class="collapse navbar-collapse g" id="navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right g">
                    
                    
                    <li><a href="#" class="hvr-wobble-horizontal"><span class="glyphicon glyphicon-fire"> Новинки</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav g">
                    <li class="dropdown">
	            <a href="#" class="dropdown-toggle hvr-wobble-horizontal " data-toggle="dropdown"><span class="glyphicon glyphicon-book"> Книги</span><b class="caret"></b></a>
	            <ul id="ons" class="dropdown-menu g multi-column columns-3">
		            <div class="row">
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-euro"> Бестселлеры</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Художественные</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"> Научные</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Русские</a></li>
									<li><a href="#">Зарубежные</a></li>
								</ul>
							</li>
									<li><a href="#">Мистические</a></li>
									<li><a href="#">Религиозные</a></li>
								</ul>
							</li>
							 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-gift"> Акции</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Распродажа</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"> Скидки</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Скидка 15%</a></li>
									<li><a href="#">Скидка 20%</a></li>
								</ul>
							</li>
									<li><a href="#">В подарок</a></li>
								</ul>
							</li>
								 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"> Новинки</span></a>
								<ul class="dropdown-menu g">
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-remove"> Новые авторы</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Русские</a></li>
									<li><a href="#">Заруубежные</a></li>
								</ul>
							</li>
									<li><a href="#">Научные труды</a></li>
								</ul>
							</li>
					             <li role="presentation" class="dropdown-header ">Детям и родителям</li>
                            <li><a href="#">Досуг и творчество</a></li>
                            <li><a href="#">Книги для родителей</a></li>
                            <li><a href="#">Познавательная литература</a></li>
                            <li><a href="#">Художественная литература</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header ">Учебная литература</li>
                            <li><a href="#">Дошкольникам</a></li>
                            <li><a href="#">Школьникам и абитуриентам</a></li>
                            <li><a href="#">Студентам и аспирантам</a></li>
                            <li><a href="#">Педагогам</a></li>
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					    
					             <li role="presentation" class="dropdown-header ">Бизнес литература</li>
                            <li><a href="#">Биографии. Мемуары</a></li>
                            <li><a href="#">Детективы.Боевики. Триллеры</a></li>
                            <li><a href="#">Поэзия</a></li>
                            <li><a href="#">Русская и зарубежная проза</a></li>
                            <li><a href="#">Фантастика. Фентези. Мистика</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header "> Нехудожественная литература</li>
                            <li><a href="#">Искусство. Культура</a></li>
                            <li><a href="#">Компьютеры. Интернет</a></li>
                            <li><a href="#">Кулинария. Напитки</a></li>
                            <li><a href="#">Медицина</a></li>
                            <li><a href="#">Общественные и гуманитарные науки</a></li>
                            <li><a href="#">Психология</a></li>
                            <li><a href="#">Публицистика</a></li>
                            <li><a href="#">Путешествия. Хобби. Фото. Спорт</a></li>
                            <li><a href="#">Религии мира</a></li>
                            <li><a href="#">Рукоделие. Творчество</a></li>
                            <li><a href="#">Эзотерика</a></li>
                        
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					             <li role="presentation" class="dropdown-header ">Литература на иностранных языках</li>
                            <li><a href="#">Английский</a></li>
                            <li><a href="#">Французкий</a></li>
                            <li><a href="#">Немецкий</a></li>
                            <li><a href="#">Испанский</a></li>
                             <li><a href="#">Итальянский</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header ">Типы изданий</li>
                            <li><a href="#">Антикварные книги</a></li>
                            <li><a href="#">Аудиокниги</a></li>
                            <li><a href="#">Букинистические издания</a></li>
                            <li><a href="#">Издания 1930-60-х гг</a></li>
                             <li><a href="#">Цифровые аудиокниги</a></li>
                              <li><a href="#">Цифровые книги</a></li>
                               <li><a href="#">Печать по требованию</a></li>
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>


                  <li class="dropdown">
	            <a href="#"  class="dropdown-toggle hvr-wobble-horizontal" data-toggle="dropdown"><span class="glyphicon glyphicon-headphones"> Электроника</span><b class="caret"></b></a>
	            <ul id="tws" class="dropdown-menu g multi-column columns-3">
		            <div class="row">
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					         <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-gift"> Распродажа</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Ликвидация коллекции</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"> Скидки</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Скидка 15%</a></li>
									<li><a href="#">Скидка 20%</a></li>
								</ul>
							</li>
									<li><a href="#">В подарок</a></li>
								</ul>
							</li>
					             
					             <li role="presentation" class="dropdown-header ">ТВ и видеотехника</li>
                            <li><a href="#">Телевизоры</a></li>
                            <li><a href="#">Спутниковое ТВ</a></li>
                            <li><a href="#">Домашние кинотеатры</a></li>
                            <li><a href="#">Проекторы</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header ">Фото и видео</li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-qrcode"> Зеркальные фотоаппараты</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Nicon</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fast-forward"> Panasonic</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Китай</a></li>
									<li><a href="#">Оригинал</a></li>
								</ul>
							</li>
									<li><a href="#">Samsung</a></li>
									<li><a href="#">HP</a></li>
								</ul>
							</li>
                            <li><a href="#">Видеокамеры</a></li>
                            <li><a href="#">Экшн-камеры</a></li>
                            <li><a href="#">Компактные фотокамеры</a></li>
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					    
					             <li role="presentation" class="dropdown-header ">Телефоны</li>
                           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-phone"> Смартфоны</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Android</a></li>
									<li><a href="#">IOS</a></li>
									<li><a href="#">Win PHone</a></li>
								</ul>
							</li>
                            <li><a href="#">Мобильные телефоны</a></li>
                            <li><a href="#">Телефоны для дома</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header "> Наушники и гарнитуры</li>
                            <li><a href="#">Вкладыши. Накладные</a></li>
                            <li><a href="#">Мониторные</a></li>
                            <li><a href="#">Беспроводные</a></li>
                            <li><a href="#">Гарнитура для телефонов</a></li>
                            <li><a href="#">Офисные. Игровые</a></li>
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					             <li role="presentation" class="dropdown-header ">Носители информации</li>
                            <li><a href="#">Внешние HDD</a></li>
                            <li><a href="#">USB накопители</a></li>
                            <li><a href="#">Карты памяти</a></li>
                            <li><a href="#">Сетевые хранилища</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header "><a href="">Сетевое оборудование</a></li>
                       <li class="divider"></li>
                       <li role="presentation" class="dropdown-header ">Периферия и картриджи</li>
                            <li><a href="#">Принтеры и МФУ, Сканеры</a></li>
                            <li><a href="#">Мониторы</a></li>
                            <li><a href="#">Расходники</a></li>
                            <li><a href="#">Мышки</a></li>
                            

				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle hvr-wobble-horizontal" data-toggle="dropdown"><span class="glyphicon glyphicon-off"> Бытовая техника</span><b class="caret"></b></a>
	            <ul  id="thrs" class="dropdown-menu g multi-column columns-3">
		            <div class="row">
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					          <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-gift"> Распродажа</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Ликвидация коллекции</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"> Скидки</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Скидка 15%</a></li>
									<li><a href="#">Скидка 20%</a></li>
								</ul>
							</li>
									<li><a href="#">В подарок</a></li>
								</ul>
							</li>
					         <li><a href="#">Кофе, чай, сиропы</a></li>
					             
					             <li role="presentation" class="dropdown-header ">Кухонная техника</li>
                            <li><a href="#">Мультиварки, Сковородки</a></li>
                            <li><a href="#">Кофеварки, Кофемашины</a></li>
                            <li><a href="#">Чайники и термопосты</a></li>
                            <li><a href="#">Хлебопечки</a></li>
                            <li><a href="#">Мясорубки</a></li>
                            <li><a href="#">СВЧ-печи</a></li>
                            <li><a href="#">Соковыжималки</a></li>
                            <li><a href="#">Комбайны</a></li>
                            <li><a href="#">Йогуртницы</a></li>
                            <li><a href="#">Кухонные весы</a></li>
                            <li><a href="#">Электрогрили</a></li>
                         


                            
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					    <li role="presentation" class="dropdown-header ">Климатическая техника</li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"> Климат-контроль</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Обогреватели</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tower"> Погодные станции</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Русские</a></li>
									<li><a href="#">Зарубежные</a></li>
							
								
								</ul>
							</li>
									<li><a href="#">Воздухоочистители</a></li>
									<li><a href="#">Мобильные кондиционеры</a></li>
									
								</ul>
							</li>
                     <li><a href="#">Увлажнители воздуха</a></li>
                     <li class="divider"></li>
					             <li role="presentation" class="dropdown-header ">Техника для дома</li>
                           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-flash"> Пылесосы</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Полноразмерные</a></li>
									<li><a href="#">Компактные</a></li>
								
								</ul>
							</li>
                            <li><a href="#">Утюги</a></li>
                            <li><a href="#">Отпариватели</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header ">Для красоты и здоровья</li>
                            <li><a href="#">Электробритвы</a></li>
                            <li><a href="#">Эпиляторы</a></li>
                            <li><a href="#">Фены</a></li>
                            <li><a href="#">Стайлеры и щипцы</a></li>
                            <li><a href="#">Напольные весы</a></li>
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					             <li role="presentation" class="dropdown-header ">Крупная бытовая техника</li>
                            <li><a href="#">Холодильники и морозильники</a></li>
                            <li><a href="#">Стиральные машины</a></li>
                            <li><a href="#">Посудомоечные машины</a></li>
                            <li><a href="#">Вытяжки</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header "><a href="">Освещение и электротовары</a></li>
                       <li class="divider"></li>
                       <li role="presentation" class="dropdown-header ">Светильники, Звонки</li>
                            <li><a href="#">Лампочки</a></li>
                           
                            

				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
	        <li class="dropdown">
	            <a href="#" class="dropdown-toggle hvr-wobble-horizontal" data-toggle="dropdown"><span class="glyphicon glyphicon-home"> Дом и сад</span><b class="caret"></b></a>
	            <ul id="fours"  class="dropdown-menu g multi-column columns-3">
		            <div class="row">
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					          <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire">Акции и распродажи</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Новые</a></li>
									<li><a href="#">Архив</a></li>
								
								</ul>
							</li>
					         
					             
					             <li role="presentation" class="dropdown-header ">Рукоделие</li>
                            <li><a href="#">Вышивка, Вязание</a></li>
                            <li><a href="#">Шкатулки и коробки</a></li>
                            <li><a href="#">Живопись, Шитье</a></li>
                            <li><a href="#">Скрапбукинг</a></li> 
							<li class="divider"></li>
                            <li role="presentation" class="dropdown-header ">Кухня</li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-large"> Акции и распродажи</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Классика</a></li>
									 <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-glass"> Хрусталь</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Русские</a></li>
									<li><a href="#">Зарубежные</a></li>
							
								
								</ul>
							</li>
									<li><a href="#">Винтаж</a></li>
									<li><a href="#">Новомодные</a></li>
									
								</ul>
							</li>
                     <li><a href="#">Сковороды, Кострюли</a></li>
                      <li><a href="#">Формы для выпечки</a></li>
                       <li><a href="#">Сервировка стола, Ножи</a></li>
                        <li><a href="#">Аксессуары</a></li>
                         <li><a href="#">Хранение продуктов</a></li>
                          <li><a href="#">Термосы и сифоны</a></li>
                           

				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					    
                     
					             <li role="presentation" class="dropdown-header ">Домашний текстиль</li>
                           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-sound-dolby"> Постельное белье</span></a>
								<ul class="dropdown-menu g">
									<li><a href="#">Русское</a></li>
									<li><a href="#">Зарубежное</a></li>
								
								</ul>
							</li>
                            <li><a href="#">Пледы и покрывала</a></li>
                            <li><a href="#">Подушки и одеяла</a></li>
                            <li class="divider"></li>


                            <li role="presentation" class="dropdown-header ">Электроинструмент</li>
                            <li><a href="#">Дрели и шуруповерты</a></li>
                            <li><a href="#">Шлифовальные машины</a></li>
                            <li><a href="#">Электролобзики</a></li>
                            <li><a href="#">Измерительная техника</a></li>
                            <li class="divider"></li>
                           <li role="presentation" class="dropdown-header ">Товары для хранения</li>
                            <li><a href="#">Кофры, Корзины</a></li>
                            <li><a href="#">Контейнеры, Вешалки</a></li>
                            <li><a href="#">Чехлы для одежды</a></li>
				            </ul>
			            </div>
			            <div class="col-md-4">
				            <ul class="multi-column-dropdown">
					             
                           
                            


                            <li role="presentation" class="dropdown-header "><a href="">Товары для бани</a></li>
                       <li class="divider"></li>
                       <li role="presentation" class="dropdown-header ">Хозяйственные товары</li>
                            <li><a href="#">Уход за обувью</a></li>
                            <li><a href="#">Мающие и чистящие средства</a></li>
                            <li><a href="#">Порошки и отбеливатели</a></li>
                            <li><a href="#">Сушилки и освежители</a></li>
                           
                            

				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
				 
			</div>
	    </div>
	    <div></div>
	  <script type="text/javascript">

	  $(function() {
    	$("#but").click(function() {
   		
    		var val=$("#but").val();
    		
    		if (val==0) {

    			$(".navbar-collapse").removeClass("g");
    			$(".navbar-collapse.collapse").removeClass("g");
    			$(".navbar-collapse.in").removeClass("g");
    			$(".navbar").removeClass("g");
    			$(".navbar-nav, .navbar-nav > li, .navbar-left, .navbar-right, .navbar-header").removeClass("g");
    			$(".navbar-right .dropdown-menu").removeClass("g");
    			$(".navbar-collapse .navbar-nav.navbar-right:last-child").removeClass("g");

    			$("#ons").toggleClass("one");
   		$("#tws").toggleClass("two");
   		$("#thrs").toggleClass("three");
   		$("#fours").toggleClass("four");

    			$("#but").val("1");
    			$("#but").html("HORIZONTAL MODE");

    		}
    		else
    		{

    				$(".navbar-collapse").toggleClass("g");
    			$(".navbar-collapse.collapse").toggleClass("g");
    			$(".navbar-collapse.in").toggleClass("g");
    			$(".navbar").toggleClass("g");
    			$(".navbar-nav, .navbar-nav > li, .navbar-left, .navbar-right, .navbar-header").toggleClass("g");
    			$(".navbar-right .dropdown-menu").toggleClass("g");
    			$(".navbar-collapse .navbar-nav.navbar-right:last-child").toggleClass("g");

    			$("#ons").removeClass("one");
   		$("#tws").removeClass("two");
   		$("#thrs").removeClass("three");
   		$("#fours").removeClass("four");

    			$("#but").val("0");
    			$("#but").html("VERTICAL MODE");

    		}		

    });
});

	  </script>

	    <div class="container log">
			<div class="row animated fadeInUp">
				  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 text-center mycol ">
				  	  <p>RESPONSIVE MENU by <a href="http://vk.com/unknown_creature">Fomin Dmitry</a></p>
				  </div>
				 
			</div>
	    </div>
	</section>
@stop