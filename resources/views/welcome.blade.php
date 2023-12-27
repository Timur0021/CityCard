<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

@vite(['resources/sass/main.scss', 'resources/js/app.js'])
  <title>CityCard</title>
</head>
<body>
  <div class="wrapper">
    <header class="header">
        <div class="header__container _container">
            <a href="" class="header__logo">
                CityCard
            </a>
            <nav class="header__menu menu">
            <ul class="menu__list">
                <li class="menu__item">
                <a href="" class="menu__link">Events</a>
                </li>
                <li class="menu__item">
                <a href="" class="menu__link">Team</a>
                </li>
                <li class="menu__item">
                <a href="" class="menu__link">Blog</a>
                </li>
                <li class="menu__item">
                <button class="menu__button"><a href="{{ url('/client/login') }}" class="menu__link">Log in</a></button>
                </li>
                @if (Route::has('login'))
                    <li class="menu__item">
                        @auth
                            <a href="{{ url('/home') }}" class="menu__link">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="menu__link">Log in</a>
                    </li>
                    <li class="menu__item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="menu__link">Register</a>
                            @endif
                        @endauth
                    </li>
                @endif
            </ul>
            </nav>
        </div>
    </header>
    <main class="page">
        <div class="page__main-block main-block">
            <div class="main-block__container _container">
                <div class="main-block__body">
                    <h1 class="main-block__title">
                    We are a big beauty team looking to the future
                    </h1>
                    <div class="main-block__text">
                    We will help you achieve the level of beauty you desire
                    </div>
                    <div class="main-block__buttons">
                    <a href="" class="main-block__button main-block__button_green">More Information</a>
                    <a href="" class="main-block__button main-block__button_red">Free Vacancies</a>
                    </div>
                </div>
            </div>
            <div class="main-block__image _foto">
                <img src="image/sheng-hu-5_JLGGTZYpU-unsplash.jpg" alt="">
            </div>
        </div>
        <section class="page__partners partners">
            <div class="partners__container _container">
                <div class="partners__header header-block">
                    <h2 class="header-block__title">
                    Our advantages
                    </h2>
                </div>
                <div class="partners__body">
                    <div class="partners__column">
                    <div class="partners__item">
                        <div class="partners__icon">
                            <img src="image/advanteg/01.svg" alt="">
                        </div>
                        <div class="partners__text">
                        large customer base
                        </div>
                    </div>
                    </div>
                    <div class="partners__column">
                    <div class="partners__item">
                        <div class="partners__icon">
                        <img src="image/advanteg/02.svg" alt="">
                        </div>
                        <div class="partners__text">
                        Steady success it`s great
                        </div>
                    </div>
                    </div>
                    <div class="partners__column">
                    <div class="partners__item">
                        <div class="partners__icon">
                        <img src="image/advanteg/03.svg" alt="">
                        </div>
                        <div class="partners__text">
                        experienced craftsmen
                        </div>
                    </div>
                    </div>
                    <div class="partners__column">
                    <div class="partners__item">
                        <div class="partners__icon">
                        <img src="image/advanteg/04.svg" alt="foto">
                        </div>
                        <div class="partners__text">
                        More than 10 top specialists
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page__fotos fotos">
            <div class="fotos__container _container">
                <div class="fotos-header header-block">
                    <h2 class="header-block__title">
                    Foto our team
                    </h2>
                    <div class="header-block__sub-title">
                    We demonstrate to you every day what perfection is
                    </div>
                </div>
                <div class="fotos-body">
                    <div class="fotos__column">
                    <article class="fotos__item item-fotos">
                        <div class="item-fotos__content">
                        <a href="" class="item-fotos__links">
                            <h4 class="item-fotos__title">Start the day right</h4>
                        </a>
                        <div class="item-fotos__text">
                            start the day not with coffee but with self-improvement.
                        </div>
                        </div>
                        <a href="" class="item-fotos__image _foto">
                        <img src="image/team_foto/01.jpg" alt="">
                        </a>
                    </article>
                    </div>
                    <div class="fotos__column">
                    <article class="fotos__item item-fotos">
                        <div class="item-fotos__content">
                        <a href="" class="item-fotos__links">
                            <h4 class="item-fotos__title">Work and rest</h4>
                        </a>
                        <div class="item-fotos__text">
                            Our success lies in the ability to combine it with rest
                        </div>
                        </div>
                        <a href="" class="item-fotos__image _foto">
                        <img src="image/team_foto/02.jpg" alt="">
                        </a>
                    </article>
                    </div>
                    <div class="fotos__column">
                    <article class="fotos__item item-fotos">
                        <div class="item-fotos__content">
                        <a href="" class="item-fotos__links">
                            <h4 class="item-fotos__title">Work process</h4>
                        </a>
                        <div class="item-fotos__text">
                            Work on yourself is the key to a bright future
                        </div>
                        </div>
                        <a href="" class="item-fotos__image _foto">
                        <img src="image/team_foto/03.jpg" alt="">
                        </a>
                    </article>
                    </div>
                    <div class="fotos__column">
                    <article class="fotos__item item-fotos">
                        <div class="item-fotos__content">
                        <a href="" class="item-fotos__links">
                            <h4 class="item-fotos__title">Live to the fullest</h4>
                        </a>
                        <div class="item-fotos__text">
                            The division of our top worker live to the fullest
                        </div>
                        </div>
                        <a href="" class="item-fotos__image _foto">
                        <img src="image/team_foto/04.jpg" alt="">
                        </a>
                    </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="page__about about">
            <div class="about__container _container">
                <div class="about__header header-block">
                    <h2 class="header-block__title">
                    Video about us
                    </h2>
                    <div class="header-block__sub-title">
                    It`s great video show you our work
                    </div>
                </div>
                <div class="about__body">
                    <div class="about__video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/l3dFwhiEurE?si=B4ExFicUXESjN4UX"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="about__content">
                        <div class="about__for">
                            <h2 class="about__title">
                                the way to our success
                            </h2>
                            <div class="about__text">
                                no one believed that we would achieve such success, but we showed that we can handle everything
                            </div>
                        </div>
                        <div class="about__items">
                            <div class="about__item item-about">
                                <div class="item-about__icon">
                                    <img src="image/icon/01.svg" alt="">
                                </div>
                                <div class="item-about__body">
                                    <div class="item-about__title">
                                        the way to our success
                                    </div>
                                    <div class="item-about__text">
                                        no one believed that we would achieve such success, but we showed that we can handle everything
                                    </div>
                                </div>
                            </div>
                            <div class="about__item item-about">
                                <div class="item-about__icon">
                                    <img src="image/icon/02.svg" alt="">
                                </div>
                                <div class="item-about__body">
                                    <div class="item-about__title">
                                        the way to our success
                                    </div>
                                    <div class="item-about__text">
                                        no one believed that we would achieve such success, but we showed that we can handle everything
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page__contact contact">
            <div class="contact__container _container">
                <div class="contact__body">
                    <div class="contact__content">
                        <h4 class="contact__title">Contact with us</h4>
                    <div class="contact__text">contact with us if this information will be interesting</div>
                    </div>
                    <a href="" class="contact__button">Contact US</a>
                </div>
            </div>
        </section>
    </main>
	<footer class="footer">
		<div class="footer__top">
			<div class="footer__main _container">
				<div class="footer__row">
					<div class="footer__column">
						<div class="footer__label">Company Info</div>
						    <nav class="footer__menu menu-footer">
								<ul class="menu-footer__list">
									<li class="menu-footer__item"><a href="" class="menu-footer__link">About Us</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Carrier</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">We are hiring</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a></li>
								</ul>
							</nav>
						</div>
						<div class="footer__column">
							<div class="footer__label">Legal</div>
							<nav class="footer__menu menu-footer">
								<ul class="menu-footer__list">
									<li class="menu-footer__item"><a href="" class="menu-footer__link">About Us</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Carrier</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">We are hiring</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a></li>
								</ul>
							</nav>
						</div>
						<div class="footer__column">
							<div class="footer__label">Features</div>
							<nav class="footer__menu menu-footer">
								<ul class="menu-footer__list">
									<li class="menu-footer__item"><a href="" class="menu-footer__link">About Us</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Carrier</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">We are hiring</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a></li>
								</ul>
							</nav>
						</div>
						<div class="footer__column">
							<div class="footer__label">Resources</div>
							<nav class="footer__menu menu-footer">
								<ul class="menu-footer__list">
									<li class="menu-footer__item"><a href="" class="menu-footer__link">About Us</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Carrier</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">We are hiring</a></li>
									<li class="menu-footer__item"><a href="" class="menu-footer__link">Blog</a></li>
								</ul>
							</nav>
						</div>
						<div class="footer__column">
							<div class="footer__label">Get In Touch</div>
							<div class="footer__contacts contacts-footer">
								<a href="tel:4805550103" class="contacts-footer__item contacts-footer__item_phone">(480) 555-0103</a>
								<a href="" class="contacts-footer__item contacts-footer__item_map">4517 Washington Ave. Manchester, Kentucky 39495</a>
								<a href="mailto:debra.holt@example.com" class="contacts-footer__item contacts-footer__item_email">debra.holt@example.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="footer__container _container">
					<div class="footer__copy">Welccome to our world! </div>
				</div>
			</div>
		</footer>
  </div>
</body>
</html>
