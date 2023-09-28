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
				<li class="footer__menu-item">Телефон: <a href="tel:+7{{phone_format($options['phone'])}}" class="footer__menu-link">{{$options['phone']}}</a></li>
				<li class="footer__menu-item">E-mail: <a href="mailto:adress@mail.ru" class="footer__menu-link">{{$options['email']}}</a></li>
				<li class="footer__menu-item">Адрес: <a href="#" class="footer__menu-link">{{$options['adress']}}</a></li>
			</ul>
			<div class="footer__social social-footer">
				<p class="social-footer__text">Присоединяйтесь</p>
				<a href="{{$options['telegram_lnk']}}" class="social-footer__link tg-icon"></a>
				<a href="{{$options['vk_lnk']}}" class="social-footer__link vk-icon"></a>
			</div>
			<div class="footer__payment payment-footer">
				<h3 class="payment-footer__title">Принимаем к оплате</h3>
				<div class="payment-footer__inner">
				<span class="payment-footer__logo logo-visa"></span>
				<span class="payment-footer__logo logo-sbp"></span>
				<span class="payment-footer__logo logo-mir"></span>
				<span class="payment-footer__logo logo-master-card"></span>
				</div>

                <a href="{{ route('policy') }}" class="footer__menu-item">Политика в области персональных данных</a>
			</div>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Каталог</a></h3>
			<ul class="footer__menu">

                @foreach ($all_cat as $item )
                    <li class="footer__menu-item"><a href="{{route('category', $item->slug)}}" class="footer__menu-link">{{$item->name}}</a></li>
                @endforeach

			</ul>
		</div>

		</div>

		<div class="footer__bottom">
			<p class="footer__copyright"><span>С</span> Все права защищены 	«Краски и штукатурки»</p>
		</div>

	</div>
</footer>
