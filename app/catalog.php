<!DOCTYPE html>
<html lang="ru" class="lock">

//= templates/head.html

<body>
	<div class="page">

		//= templates/preloader.html
		//= templates/header.html
		//= templates/mobile-menu.html
		//= templates/price-list.html

		<main class="content">

			<section class="partition offset-from-header lazyload" data-bg="img/partition-bg.jpg">
				<div class="container-responsive">
					<div class="partition__best">
						<img data-src="img/icons/icis-top-100.svg" alt="ICIS top 100" class="partition__best-img lazyload" src="data:image/gif;base64,R0lGODlh0ACJAIAAAP///wAAACH5BAEAAAEALAAAAADQAIkAAALVjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vv1MAADs=">
					</div>
				</div>
				<div class="container">
					<h2 class="title partition__title">Каталог</h2>
				</div>
			</section>

			<div class="product section">
				<div class="container">
					<div class="product__inner">
						<aside class="product__menu aside-menu">
							<div class="product__menu-inner aside-menu__inner">
								<a class="product__menu-item aside-menu__item active">
									Агропромышленность и кормовые добавки
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Базовая химия
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Бытовая химия
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Волокна полиэфирные и натуральные
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Геоматериалы для строительства
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Гибкая упаковка
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Добавки для пищевой промышленности
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Полимеры
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Реагенты для горнорудной промышленности
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Реагенты для целлюлозно-бумажной промышленности
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Сырье для нефтехимической продукции
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Сырье для строительства скважин и интенсификации добычи нефти
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Cырье для производства и переработки полимеров
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Сырье для производства полиуретанов
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Сырье для производства шин и РТИ
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Химического сырье для лакокрасочной промышленности и
									строительство
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Химия для водоочистки и подготовки воды
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Химия для горизонтально-направленного бурения
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Химия для добычи и транспортировки нефти
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Химия для нефтеперерабатывающей промышленности
								</a>
								<a href="#" class="product__menu-item aside-menu__item">
									Хлоросодержащие препараты и компоненты для жидких
									дезинфицирующих
									средств
								</a>
							</div>
						</aside>
						<div class="product__content">
							<form action="#" method="GET" class="product__form product__search" data-no-send="true">
								<h4 class="product__form-title product__form-title_find">
									Быстрый поиск нужной позиции
								</h4>
								<div class="product__search-row">
									<input type="text" class="input product__search-input" placeholder="Например «Ксантановая камедь»" name="search" data-no-validate="true">
									<button class="btn btn-search product__form-btn_find">
										Найти
									</button>
								</div>
							</form>
							<div class="product__text-or">или</div>
							<form action="php/mail.php" method="POST" class="product__form product__request" novalidate>
								<h4 class="product__form-title product__form-title_price">
									Экспресс запрос цены на химию
								</h4>
								<div class="product__request-row">
									<div class="product__request-item">
										<input type="text" class="input product__request-input" placeholder="Что нужно" name="search">
										<div class="field-error"></div>
									</div>
									<div class="product__request-item">
										<input type="text" class="input product__request-input" placeholder="Какой объём" name="volume">
										<div class="field-error"></div>
									</div>
									<div class="product__request-item">
										<input type="text" class="input product__request-input" placeholder="Город" name="city">
										<div class="field-error"></div>
									</div>
								</div>
								<div class="product__request-row">
									<div class="product__request-item">
										<input type="tel" class="input product__request-input" placeholder="Телефон" name="phone">
										<div class="field-error"></div>
									</div>
									<div class="product__request-item">
										<input type="email" class="input product__request-input" placeholder="E-mail" name="email">
										<div class="field-error"></div>
									</div>
									<div class="product__request-item">
										<input type="text" class="input product__request-input" placeholder="Имя" name="name">
										<div class="field-error"></div>
									</div>
								</div>
								<div class="product__request-textarea-wrap">
									<textarea class="textarea product__request-textarea" placeholder="Комментарий" name="message"></textarea>
									<div class="field-error"></div>
								</div>
								<input type="hidden" name="type" value="price" data-no-validate="true">
								<input type="hidden" name="utm_source" value="<?php echo $_GET["utm_source"] ?>" data-no-validate="true">
								<input type="hidden" name="utm_medium" value="<?php echo $_GET["utm_medium"] ?>" data-no-validate="true">
								<input type="hidden" name="utm_campaign" value="<?php echo $_GET["utm_campaign"] ?>" data-no-validate="true">
								<input type="hidden" name="utm_content" value="<?php echo $_GET["utm_content"] ?>" data-no-validate="true">
								<input type="hidden" name="utm_term" value="<?php echo $_GET["utm_term"] ?>" data-no-validate="true">
								<button class="btn btn-send product__request-btn">
									Отправить запрос
								</button>
								<div class="policy-form-text">
									* Нажимая отправить, вы соглашаетесь с
									<span class="btn-policy">условиями обработки
										данных</span>
								</div>
							</form>
							<div class="product__mob-selection">
								<div class="product__mob-selection-header">
									Выберите отрасль
								</div>
								<div class="product__mob-selection-body"></div>
							</div>
							<div class="product__block">
								<div class="product__row">
									<div class="product__item">
										<div class="product__item-top lazyload" data-bg="img/product/product-1.jpg">
											<div class="product__item-title">
												ФРАКЦИОННЫЙ ЖИР УЛЬТРАФАТ 100
											</div>
										</div>
										<div class="product__item-bottom">
											Ультрафат 100 – самый популярный фракционный жир на
											российском рынке.
											Эффективность этого продукта была неоднократно доказана
											лидирующими молочными фермами.
										</div>
									</div>
									<div class="product__item">
										<div class="product__item-top lazyload" data-bg="img/product/product-2.jpg">
											<div class="product__item-title">
												Полимеры
											</div>
										</div>
										<div class="product__item-bottom">
											Это материалы, состоящие из длинных повторяющихся цепочек
											молекул.
										</div>
									</div>
								</div>
								<div class="product__row">
									<div class="product__item">
										<div class="product__item-top lazyload" data-bg="img/product/product-4.jpg">
											<div class="product__item-title">
												Шины MICHELIN Pilot Sport 4S
											</div>
										</div>
										<div class="product__item-bottom">
											Агрессивный рисунок протектора и особенная смесь материала
											обеспечивают короткий путь торможения, уверенное сцепление
											с дорожным полотном в любую погоду.
										</div>
									</div>
									<div class="product__item">
										<div class="product__item-top lazyload" data-bg="img/product/product-3.jpg">
											<div class="product__item-title">
												Очищение воды
											</div>
										</div>
										<div class="product__item-bottom">
											При нагревании воды до температуры кипения она
											действительно очищается, но при этом происходят и
											нежелательные изменения. Во-первых, меняется структура
											воды, и она становится «мертвой», так как кислород из нее
											улетучивается. С увеличением продолжительности кипячения
											уменьшается ее полезность, хотя в воде и погибают все
											патогенные микроорганизмы.
										</div>
									</div>
								</div>
							</div>

							//= templates/pagination.html

						</div>
					</div>
				</div>
			</div>

		</main>

		//= templates/footer.html
		//= templates/modals.html

	</div>

	//= templates/scripts.html


</body>

</html>