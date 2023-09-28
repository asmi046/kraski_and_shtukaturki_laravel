<footer class="footer">
	<div class="footer__container _container">

		<div class="footer__top d-flex">

		<div class="footer__col">
			<a href="{{route('home')}}" class="logo-icon footer__logo">
                <x-svg.logo-white></x-svg.logo-white>
			</a>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Меню</a></h3>
			<ul class="footer__menu">
				<x-footer-menu-punkts></x-footer-menu-punkts>
			</ul>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Контакты</a></h3>
			<ul class="footer__menu">
				<li class="footer__menu-item">Телефон:<a href="tel:+79999999999" class="footer__menu-link">+7 (999) 999 99 99</a></li>
				<li class="footer__menu-item">E-mail:<a href="mailto:adress@mail.ru" class="footer__menu-link">adress@mail.ru</a></li>
				<li class="footer__menu-item">Адрес:<a href="#" class="footer__menu-link">г. Москва, ул. Курская 46</a></li>
			</ul>
			<div class="footer__social social-footer">
				<p class="social-footer__text">Присоединяйтесь</p>
				<a href="#" class="social-footer__link tg-icon"></a>
				<a href="#" class="social-footer__link vk-icon"></a>
			</div>
			<div class="footer__payment payment-footer">
				<h3 class="payment-footer__title">Принимаем к оплате</h3>
				<div class="payment-footer__inner">
				<span class="payment-footer__logo logo-visa"></span>
				<span class="payment-footer__logo logo-sbp"></span>
				<span class="payment-footer__logo logo-mir"></span>
				<span class="payment-footer__logo logo-master-card"></span>
				</div>
			</div>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Каталог</a></h3>
			<ul class="footer__menu">
				<li class="footer__menu-item"><a href="#" class="footer__menu-link">Декоративные краски</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-link">Венецианская штукатурка</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-link">Фактурные покрытия</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-link">Финишные покрытия</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-link">Микроцемент</a></li>
			</ul>
		</div>

		</div>

		<div class="footer__bottom">
			<p class="footer__copyright"><span>С</span> Все права защищены</p>
		</div>

	</div>
</footer>
