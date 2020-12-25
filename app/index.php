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

			<section class="hero offset-from-header lazyload" data-bg="img/hero-bg.jpg">
				<div class="container-responsive">
					<div class="hero__best">
						<img data-src="img/icons/icis-top-100.svg" alt="ICIS TOP 100" class="lazyload hero__best-icon" src="data:image/gif;base64,R0lGODlh0ACJAIAAAP///wAAACH5BAEAAAEALAAAAADQAIkAAALVjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vv1MAADs=">
					</div>
				</div>
				<div class="container">
					<div class="hero__inner">
						<div class="hero__info">
							<h1 class="main-title">
								ХимПартнеры
							</h1>
							<p class="hero__text">
								Профессиональные поставки
								промышленной химии с 2001 года. <br>
								Входим в <span>ТОП-100</span> мировых химических поставщиков.
								> 2400 позиций в номенклатуре
							</p>
							<div class="hero__find">
								<form action="#" method="GET" class="hero__search" data-no-send="true">
									<input type="text" class="input hero__search-input" placeholder="Например «Ксантановая камедь»" data-no-validate="true">
									<button class="btn btn-search hero__search-btn">Найти</button>
								</form>
								<div class="hero__find-text">или</div>
								<a href="catalog.php" class="hero__find-btn btn btn-transparent btn-catalog">
									Каталог продуктов
								</a>
							</div>
						</div>
						<form action="php/mail.php" method="POST" class="hero__form feedback-form mob-entire-width" novalidate>
							<h3 class="feedback-form__title">
								Экспресс запрос цен <br>
								<span class="text">Ответим за</span>
								<span class="hours">24 часа!</span>
							</h3>
							<div class="feedback-form__input-wrap">
								<input type="text" class="input input-blackout feedback-form__input" placeholder="Ваше имя" name="name">
								<div class="field-error"></div>
							</div>
							<div class="feedback-form__input-wrap">
								<input type="tel" class="input input-blackout feedback-form__input" placeholder="Телефон" name="phone">
								<div class="field-error"></div>
							</div>
							<div class="feedback-form__input-wrap">
								<input type="email" class="input input-blackout feedback-form__input" placeholder="E-mail" name="email">
								<div class="field-error"></div>
							</div>
							<div class="feedback-form__input-wrap">
								<input type="text" class="input input-blackout feedback-form__input" placeholder="Город" name="city">
								<div class="field-error"></div>
							</div>
							<div class="feedback-form__input-wrap">
								<input type="text" class="input input-blackout feedback-form__input" placeholder="Что интересует?" name="search">
								<div class="field-error"></div>
							</div>
							<div class="feedback-form__textarea-wrap">
								<textarea class="textarea textarea-blackout feedback-form__textarea" placeholder="Комментарий (например объём и город доставки)" name="message"></textarea>
								<div class="field-error"></div>
							</div>
							<input type="hidden" name="type" value="price" data-no-validate="true">
							<input type="hidden" name="utm_source" value="<?php echo $_GET["utm_source"] ?>" data-no-validate="true">
							<input type="hidden" name="utm_medium" value="<?php echo $_GET["utm_medium"] ?>" data-no-validate="true">
							<input type="hidden" name="utm_campaign" value="<?php echo $_GET["utm_campaign"] ?>" data-no-validate="true">
							<input type="hidden" name="utm_content" value="<?php echo $_GET["utm_content"] ?>" data-no-validate="true">
							<input type="hidden" name="utm_term" value="<?php echo $_GET["utm_term"] ?>" data-no-validate="true">
							<button class="btn btn-send feedback-form__btn">
								Отправить запрос цены
							</button>
							<div class="policy-form-text">
								* Нажимая отправить, вы соглашаетесь с
								<span class="btn-policy">условиями обработки
									данных</span>
							</div>
						</form>
					</div>
				</div>
			</section>

			<div class="partners">
				<div class="container-responsive">
					<div class="partners__inner">
						<div class="partners__item">
							<img data-src="img/partners/partners-1.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhTgAqAIAAAP///wAAACH5BAEAAAEALAAAAABOACoAAAI8jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqnVFQBADs=">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-2.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhXwApAIAAAP///wAAACH5BAEAAAEALAAAAABfACkAAAJCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt8cCADs=">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-3.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhQQBIAIAAAP///wAAACH5BAEAAAEALAAAAABBAEgAAAJKjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8dkTgEAOw==">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-4.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhdQAxAIAAAP///wAAACH5BAEAAAEALAAAAAB1ADEAAAJTjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7LZbWAAAOw==">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-5.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhcgBFAIAAAP///wAAACH5BAEAAAEALAAAAAByAEUAAAJjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PiFcAADs=">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-6.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhbABHAIAAAP///wAAACH5BAEAAAEALAAAAABsAEcAAAJijI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv/vUgAAOw==">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-7.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhewAZAIAAAP///wAAACH5BAEAAAEALAAAAAB7ABkAAAI5jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjTILADs=">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-8.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhcAA3AIAAAP///wAAACH5BAEAAAEALAAAAABwADcAAAJWjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/LdwUAOw==">
						</div>
						<div class="partners__item">
							<img data-src="img/partners/partners-9.png" alt="partner" class="lazyload mw-100 partners__icon" src="data:image/gif;base64,R0lGODlhjgAnAIAAAP///wAAACH5BAEAAAEALAAAAACOACcAAAJRjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvXbGkBADs=">
						</div>
					</div>
				</div>
			</div>

			//= templates/numbers.html

			<section class="partition lazyload" data-bg="img/partition-bg.jpg">
				<div class="container-responsive">
					<div class="partition__best">
						<img data-src="img/icons/icis-top-100.svg" alt="ICIS top 100" class="partition__best-img lazyload" src="data:image/gif;base64,R0lGODlh0ACJAIAAAP///wAAACH5BAEAAAEALAAAAADQAIkAAALVjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vv1MAADs=">
					</div>
				</div>
				<div class="container">
					<h2 class="title partition__title">
						Нашу <span class="underline">надёжность</span> <br>
						ценят во всём мире
					</h2>
				</div>
			</section>

			//= templates/rating.html

			<section class="about section section-half-bottom">
				<div class="container"> 
					<h2 class="title">
						О компании
					</h2>
					<div class="about__inner">
						<div class="about__left">
							<img data-src="img/about-us.jpg" alt="about" class="lazyload mw-100 about__left-img" src="data:image/gif;base64,R0lGODlhNAI0AoAAAP///wAAACH5BAEAAAEALAAAAAA0AjQCAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8b+jRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cuXTr2r2LN6/evXz7+v0LOLDgwYQLGz6MOLHixYwbO34MObLkyZQrW76MObPmzZw7e/4MOrTo0aRLmz6NOrXq1axbu34NO7bs2bRr276NO7fu3bx7+/4NPLjw4cSLGz+OPLny5cybO38OPbr06dSrW7+OPbv27dy7e/8OPrz48eTLmz+PPr369ezbu38PP778+fTr27+PP7/+/fz++/v/D2CAAg5IYIEGHohgggouyGCDDj4IYYQSTkhhhRZeiGGGGm7IYYcefghiiCKOSGKJJp6IYooqrshiiy6+CGOMMs5IY4023ohjjjruyGOPPv4IZJBCDklkkUYeiWSSSi7JZJNOPglllFJOSWWVVl6JZZZabslll15+CWaYYo5JZplmnolmmmquyWabbr4JZ5xyzklnnXbeiWeeeu7JZ59+/glooIIOSmihhh6KaKKKLspoo44+Cmmkkk5KaaWWXopppppuymmnnn4Kaqiijkpqqaaeimqqqq7KaquuvgprrLLOSmuttt6Ka6667sprr77+Cmywwg5LbLHGHotzbLLKLstss84+C2200k5LbbXWXottttpuy2233n4Lbrjijktuueaei2666q7LbrvuvgtvvPLOS2+99t6Lb7767stvv/7+C3DAAg9McMEGH4xwwgovzHDDDj8MccQST0xxxRZfjHHGGm/McccefwxyyGEUAAA7">
						</div>
						<div class="about__right">
							<p class="about__text">
								Компания ХимПартнеры – российский бизнес международной компании
								ProPartners. Компания является трейдинговым подразделением
								индийско-китайско-российской группы ProPartners.
							</p>
							<p class="about__text">
								ProPartners (Профессиональные Партнеры) осуществляет управление
								принадлежащими ей торговыми, производственными и инвестиционными
								проектами в области индустриальной химии и релевантных к ней
								сферах.
							</p>
							<div class="about__leader">
								<div class="about__leader-photo">
									<img data-src="img/family/main-director.png" alt="leader" class="lazyload mw-100 about__leader-img" src="data:image/gif;base64,R0lGODlh8AAYAYAAAP///wAAACH5BAEAAAEALAAAAADwABgBAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8ZmjRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cFQUAADs=">
								</div>
								<div class="about__leader-info">
									<div class="about__leader-name">— Константин Рзаев</div>
									<div class="about__leader-position">Управляющий Директор</div>
									<img data-src="img/icons/signature.svg" alt="signature" class="lazyload mw-100 about__leader-signature" src="data:image/gif;base64,R0lGODlhwQBoAIAAAP///wAAACH5BAEAAAEALAAAAADBAGgAAAKujI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8DFsAADs=">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="advantages section section-half-top">
				<h2 class="title">Почему стоит работать с нами</h2>
				<div class="container">
					<div class="advantages__inner">
						<div class="advantages__item">
							<div class="advantages__photo">
								<img data-src="img/icons/feature-1.svg" alt="feature" class="lazyload mw-100 advantages__icon" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
							</div>
							<div class="advantages__info">
								<h6 class="advantages__subtitle">
									100% отсрочка платежа
								</h6>
								<p class="advantages__text">
									Компания ХимПартнеры – российский бизнес международной
									компании ProPartners.
								</p>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__photo">
								<img data-src="img/icons/feature-2.svg" alt="feature" class="lazyload mw-100 advantages__icon" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
							</div>
							<div class="advantages__info">
								<h6 class="advantages__subtitle">
									Своя выгодная логистика
								</h6>
								<p class="advantages__text">
									Компания ХимПартнеры – российский бизнес международной.
								</p>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__photo">
								<img data-src="img/icons/feature-3.svg" alt="feature" class="lazyload mw-100 advantages__icon" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
							</div>
							<div class="advantages__info">
								<h6 class="advantages__subtitle">
									Полная документация
								</h6>
								<p class="advantages__text">
									Компания ХимПартнеры – российский бизнес международной
									компании ProPartners.
								</p>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__photo">
								<img data-src="img/icons/feature-4.svg" alt="feature" class="lazyload mw-100 advantages__icon" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
							</div>
							<div class="advantages__info">
								<h6 class="advantages__subtitle">
									Абсолютная защита доставки
								</h6>
								<p class="advantages__text">
									Компания ХимПартнеры – российский бизнес международной.
								</p>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__photo">
								<img data-src="img/icons/feature-5.svg" alt="feature" class="lazyload mw-100 advantages__icon" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
							</div>
							<div class="advantages__info">
								<h6 class="advantages__subtitle">
									Опыт 19 лет
								</h6>
								<p class="advantages__text">
									Компания ХимПартнеры – российский бизнес международной
									компании ProPartners.
								</p>
							</div>
						</div>
						<div class="advantages__item">
							<div class="advantages__photo">
								<img data-src="img/icons/feature-6.svg" alt="feature" class="lazyload mw-100 advantages__icon" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
							</div>
							<div class="advantages__info">
								<h6 class="advantages__subtitle">
									Скидки за объём
								</h6>
								<p class="advantages__text">
									Компания ХимПартнеры – российский бизнес международной
									компании ProPartners.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="catalog section">
				<div class="container-responsive">
					<h2 class="title">
						Каталог продукции
					</h2>
					<div class="catalog__header">
						<div class="catalog__header-item">
							<div class="catalog__header-photo">
								<img data-src="img/catalog/catalog-header-1.png" alt="Нефтехимия" class="lazyload mw-100 catalog__header-img" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
								<img data-src="img/catalog/catalog-substrate.svg" alt="substrate" class="lazyload mw-100 catalog__header-substrate" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
							</div>
							<div class="catalog__header-text">
								Нефтехимия
							</div>
						</div>
						<div class="catalog__header-item">
							<div class="catalog__header-photo">
								<img data-src="img/catalog/catalog-header-2.png" alt="Реагенты" class="lazyload mw-100 catalog__header-img" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
								<img data-src="img/catalog/catalog-substrate.svg" alt="substrate" class="lazyload mw-100 catalog__header-substrate" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
							</div>
							<div class="catalog__header-text">
								Реагенты
							</div>
						</div>
						<div class="catalog__header-item">
							<div class="catalog__header-photo">
								<img data-src="img/catalog/catalog-header-3.png" alt="Сырьё" class="lazyload mw-100 catalog__header-img" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
								<img data-src="img/catalog/catalog-substrate.svg" alt="substrate" class="lazyload mw-100 catalog__header-substrate" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
							</div>
							<div class="catalog__header-text">
								Сырьё
							</div>
						</div>
						<div class="catalog__header-item">
							<div class="catalog__header-photo">
								<img data-src="img/catalog/catalog-header-4.png" alt="Химия" class="lazyload mw-100 catalog__header-img" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
								<img data-src="img/catalog/catalog-substrate.svg" alt="substrate" class="lazyload mw-100 catalog__header-substrate" src="data:image/gif;base64,R0lGODlhZgB4AIAAAP///wAAACH5BAEAAAEALAAAAABmAHgAAAKCjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+alZAAA7">
							</div>
							<div class="catalog__header-text">
								Химия
							</div>
						</div>
					</div>
					<div class="catalog__body-wrapper">
						<div class="catalog__body">
							<div class="catalog__row">
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-1.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Агропро<wbr>мышленность и кормовые добавки
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-2.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Базовая химия
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-3.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Бытовая химия
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-4.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Волокна полиэфирные и натуральные
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
							</div>
							<div class="catalog__row">
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-5.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Геоматериалы для строительства
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-6.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Гибкая упаковка
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-7.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Добавки для пищевой промышленности
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-8.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Полимеры
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки
											как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="catalog__body">
							<div class="catalog__row">
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-5.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Геоматериалы для строительства
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-6.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Гибкая упаковка
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-7.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Добавки для пищевой промышленности
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-8.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Полимеры
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки
											как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="catalog__body">
							<div class="catalog__row">
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-6.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Гибкая упаковка
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-7.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Добавки для пищевой промышленности
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-8.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Полимеры
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки
											как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="catalog__body">
							<div class="catalog__row">
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-6.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Гибкая упаковка
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
								<div class="catalog__body-item">
									<div class="catalog__body-img lazyload" data-bg="img/catalog/catalog-body-7.jpg"></div>
									<div class="catalog__body-info">
										<h4 class="catalog__body-subtitle">
											Добавки для пищевой промышленности
										</h4>
										<p class="catalog__body-text">
											Агрокомплекс включает в себя такие добавки как
											ультрафат,
											дегидрокварцетин и много чего.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="customers section" id="point-load-map">
				<div class="container">
					<h2 class="title">Клиенты и отзывы</h2>
				</div>
				<div class="container container-slider">
					<div class="customers__slider">
						<div class="customers__slider-item">
							<div class="customers__block">
								<div class="customers__header">
									<div class="customers__header-name">ГазПром</div>
									<div class="customers__header-task">Поставка реагента</div>
									<div class="customers__header-date">03.09.2020</div>
								</div>
								<div class="customers__body">
									<div class="customers__company">
										<img data-src="img/customers/company-logo-1.png" alt="logo" class="lazyload mw-100 customers__company-logo" src="data:image/gif;base64,R0lGODlhqgAgAIAAAP///wAAACH5BAEAAAEALAAAAACqACAAAAJQjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX2AIAOw==">
										<a href="https://www.sibur.ru/" target="_blank" class="customers__company-link">www.sibur.ru</a>
										<div class="customers__company-text">
											«СИБУР Холдинг» — крупнейшая нефтехимическая компания в
											России.
										</div>
									</div>
									<div class="customers__task">
										<div class="customers__task-item">
											<span class="bold">Клиент:</span> «СИБУР Холдинг»
										</div>
										<div class="customers__task-item">
											<span class="bold">Сфера:</span> Нефть
										</div>
										<div class="customers__task-open-wrapper">
											<div class="customers__task-open">Подробнее о задаче</div>
										</div>
										<div class="customers__task-additionally">
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Описание ситуации:
												</h6>
												<p class="customers__task-text">
													Тензодатчики балочного типа прямоугольной формы. Широко
													применяются в платформенных весах.
												</p>
											</div>
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Описание без вмешательства:
												</h6>
												<p class="customers__task-text">
													Широко применяются в платформенных весах. Датчики имеют
													более низкую стоимость по сравнению с Т2 и Т4, но
													сложнее
													встраиваются в весоизмерительные системы. Поэтому
													покупать
													лучше в комплекте с опорами.
												</p>
											</div>
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Интеграционные решения:
												</h6>
												<p class="customers__task-text">
													Датчики имеют более низкую стоимость по сравнению с Т2 и
													Т4,
													но сложнее встраиваются в весоизмерительные системы.
												</p>
											</div>
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Порядок взаимодействия:
												</h6>
												<p class="customers__task-text">
													Тензодатчики балочного типа прямоугольной формы. Широко
													применяются в платформенных весах.
												</p>
											</div>
										</div>
										<div class="customers__task-item">
											<h6 class="customers__task-subtitle">Фотоотчёт:</h6>
										</div>
										<div class="customers__task-slider">
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-1.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-1.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-2.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-2.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-3.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-3.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-1.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-1.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-2.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-2.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-3.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-3.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
										</div>
									</div>
									<div class="customers__docs">
										<div class="customers__certificate">
											<a href="img/customers/customers-certificate-1.jpg" class="wrapper-photo" data-fancybox="customers-certificate">
												<img data-src="img/customers/customers-certificate-1.jpg" alt="certificate" class="lazyload mw-100" src="data:image/gif;base64,R0lGODlh+gBiAYAAAP///wAAACH5BAEAAAEALAAAAAD6AGIBAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8aijRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cuXTr2r2LN6/evXz7+v0LOLDgwYQLGz6MOLHixYwbO34MObLkyZQrW76MObPmzZw7e/4MOrTo0aRLmz6N2ksBADs=">
												<div class="magnifier"></div>
											</a>
										</div>
										<a class="customers__video video-block" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
											<img data-src="img/customers/customers-placeholder-1.jpg" alt="video" class="lazyload mw-100" src="data:image/gif;base64,R0lGODlh+gCxAIAAAP///wAAACH5BAEAAAEALAAAAAD6ALEAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8YXjRw7evwIMqTIkSRLmjyJMqXKlSxVFgAAOw==">
											<img data-src="img/icons/video-play.svg" alt="play" class="lazyload video-block__btn" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="customers__slider-item">
							<div class="customers__block">
								<div class="customers__header">
									<div class="customers__header-name">Сибур</div>
									<div class="customers__header-task">Поставка реагента</div>
									<div class="customers__header-date">21.04.2020</div>
								</div>
								<div class="customers__body">
									<div class="customers__company">
										<img data-src="img/customers/company-logo-1.png" alt="logo" class="lazyload mw-100 customers__company-logo" src="data:image/gif;base64,R0lGODlhqgAgAIAAAP///wAAACH5BAEAAAEALAAAAACqACAAAAJQjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX2AIAOw==">
										<a href="https://www.sibur.ru/" target="_blank" class="customers__company-link">www.sibur.ru</a>
										<div class="customers__company-text">
											«СИБУР Холдинг» — крупнейшая нефтехимическая компания в
											России.
										</div>
									</div>
									<div class="customers__task">
										<div class="customers__task-item">
											<span class="bold">Клиент:</span> «СИБУР Холдинг»
										</div>
										<div class="customers__task-item">
											<span class="bold">Сфера:</span> Нефть
										</div>
										<div class="customers__task-open-wrapper">
											<div class="customers__task-open">Подробнее о задаче</div>
										</div>
										<div class="customers__task-additionally">
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Описание ситуации:
												</h6>
												<p class="customers__task-text">
													Тензодатчики балочного типа прямоугольной формы. Широко
													применяются в платформенных весах.
												</p>
											</div>
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Описание без вмешательства:
												</h6>
												<p class="customers__task-text">
													Широко применяются в платформенных весах. Датчики имеют
													более низкую стоимость по сравнению с Т2 и Т4, но
													сложнее
													встраиваются в весоизмерительные системы. Поэтому
													покупать
													лучше в комплекте с опорами.
												</p>
											</div>
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Интеграционные решения:
												</h6>
												<p class="customers__task-text">
													Датчики имеют более низкую стоимость по сравнению с Т2 и
													Т4,
													но сложнее встраиваются в весоизмерительные системы.
												</p>
												<p class="customers__task-text">
													Датчики имеют более низкую стоимость по сравнению с Т2 и
													Т4,
													но сложнее встраиваются в весоизмерительные системы.
												</p>
												<p class="customers__task-text">
													Датчики имеют более низкую стоимость по сравнению с Т2 и
													Т4,
													но сложнее встраиваются в весоизмерительные системы.
												</p>
												<p class="customers__task-text">
													Датчики имеют более низкую стоимость по сравнению с Т2 и
													Т4,
													но сложнее встраиваются в весоизмерительные системы.
												</p>
											</div>
											<div class="customers__task-item">
												<h6 class="customers__task-subtitle">
													Порядок взаимодействия:
												</h6>
												<p class="customers__task-text">
													Тензодатчики балочного типа прямоугольной формы. Широко
													применяются в платформенных весах.
												</p>
											</div>
										</div>
										<div class="customers__task-item">
											<h6 class="customers__task-subtitle">Фотоотчёт:</h6>
										</div>
										<div class="customers__task-slider">
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-1.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-1.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-2.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-2.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-3.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-3.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-1.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-1.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-2.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-2.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
											<div class="customers__task-slider-item">
												<a href="img/customers/customers-slider-3.jpg" class="wrapper-photo" data-fancybox="customers-slider">
													<img data-src="img/customers/customers-slider-3.jpg" alt="photo" class="lazyload mw-100 customers__task-slider-img" src="data:image/gif;base64,R0lGODlhwQCJAIAAAP///wAAACH5BAEAAAEALAAAAADBAIkAAALMjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6e7lYAADs=">
													<div class="magnifier"></div>
												</a>
											</div>
										</div>
									</div>
									<div class="customers__docs">
										<div class="customers__certificate">
											<a href="img/customers/customers-certificate-1.jpg" class="wrapper-photo" data-fancybox="customers-certificate">
												<img data-src="img/customers/customers-certificate-1.jpg" alt="certificate" class="lazyload mw-100" src="data:image/gif;base64,R0lGODlh+gBiAYAAAP///wAAACH5BAEAAAEALAAAAAD6AGIBAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8aijRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cuXTr2r2LN6/evXz7+v0LOLDgwYQLGz6MOLHixYwbO34MObLkyZQrW76MObPmzZw7e/4MOrTo0aRLmz6N2ksBADs=">
												<div class="magnifier"></div>
											</a>
										</div>
										<a class="customers__video video-block" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
											<img data-src="img/customers/customers-placeholder-1.jpg" alt="video" class="lazyload mw-100" src="data:image/gif;base64,R0lGODlh+gCxAIAAAP///wAAACH5BAEAAAEALAAAAAD6ALEAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8YXjRw7evwIMqTIkSRLmjyJMqXKlSxVFgAAOw==">
											<img data-src="img/icons/video-play.svg" alt="play" class="lazyload video-block__btn" src="data:image/gif;base64,R0lGODlhYABuAIAAAP///wAAACH5BAEAAAEALAAAAABgAG4AAAJ3jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUnJVwAAOw==">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="customers__bottom">
						<a href="#" class="btn btn-message customers__btn">
							Смотреть все отзывы
						</a>
					</div>
				</div>
			</section>

			<section class="exhibitions section">
				<div class="container">
					<h2 class="title">Химпартнёры на выставках</h2>
				</div>
				<div class="exhibitions__inner">
					<div class="exhibitions__row">
						<a href="img/exhibitions/exhibitions-1.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-1.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
						<a href="img/exhibitions/exhibitions-2.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-2.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
						<a href="img/exhibitions/exhibitions-3.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-3.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
						<a href="img/exhibitions/exhibitions-4.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-4.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
					</div>
					<div class="exhibitions__row">
						<a href="img/exhibitions/exhibitions-5.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-5.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
						<a href="img/exhibitions/exhibitions-6.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-6.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
						<a href="img/exhibitions/exhibitions-7.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-7.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
						<a href="img/exhibitions/exhibitions-8.jpg" class="wrapper-photo exhibitions__item" data-fancybox="exhibitions">
							<img data-src="img/exhibitions/exhibitions-8.jpg" alt="certificate" class="lazyload mw-100 exhibitions__img" src="data:image/gif;base64,R0lGODlh4AEDAIAAAP///wAAACH5BAEAAAEALAAAAADgAQMAAAIljI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jedNAQA7">
							<div class="magnifier"></div>
						</a>
					</div>
				</div>
			</section>

		</main>

		//= templates/contacts.html
		//= templates/footer.html
		//= templates/modals.html

	</div>

	//= templates/scripts.html


</body>

</html>