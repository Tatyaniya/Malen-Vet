<?php 
/**
 * Template name: Главная
 */

 get_header();

?>

<section class="hero">
    <div class="hero__banner">
        <img class="img-desctop" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg.jpg" alt="Собака">
        <img class="img-992" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-992.jpg" alt="Собака">
        <img class="img-768" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-768.jpg" alt="Собака">
    </div>
    <div class="hero__cont">
        <h1 class="hero__title">
            <?php echo $malenvet_options['title1']; ?>
        </h1>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#services" class="nav__link">
                        Услуги
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">
                        О нас
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#personnel" class="nav__link">
                        Персонал
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<section class="services">
    <div class="container services__container">
        <?php if($malenvet_options['titleservice']) { ?>
            <h2 class="title-2 services__title" id="services">
                <?php echo $malenvet_options['titleservice']; ?>
            </h2>
        <?php } ?>
        <ul class="services__list">
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/diagnostic/" class="services__link services__link--diagnostics">
                    <p class="services__text">
                        Диагностика
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/therapy/" class="services__link services__link--therapy">
                    <p class="services__text">
                        Терапия
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/surgery/" class="services__link services__link--surgery">
                    <p class="services__text">
                        Хирургия
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/vaccination/" class="services__link services__link--vaccination">
                    <p class="services__text">
                        Вакцинация
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/dentistry/" class="services__link services__link--dentistry">
                    <p class="services__text">
                        Стоматология
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/gruming/" class="services__link services__link--grum">
                    <p class="services__text">
                        Груминг
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/hospital/" class="services__link services__link--hospital">
                    <p class="services__text">
                        Стационар
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/pharmacy/" class="services__link services__link--first-aid-kit">
                    <p class="services__text">
                        Ветаптека
                    </p>
                </a>
            </li>
            <li class="services__item">
                <a href="<?php echo get_option("siteurl"); ?>/shop/" class="services__link services__link--shop">
                    <p class="services__text">
                        Зоомагазин
                    </p>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="about">
    <div class="container about__container">
        <?php if($malenvet_options['titleabout']) { ?>
            <h2 class="title-2 about__title" id="about">
                <?php echo $malenvet_options['titleabout']; ?>
            </h2>
        <?php } ?>
        <div class="about__content">
            <div class="about__img">
                <div class="about__shadow">
                    <img src="<?php echo $malenvet_options['collective']['url']; ?>" alt=" ">
                </div>
            </div>
            <div class="about__desc">
                <div class="about__visible">
                    <p class="about__text">
                        Мы рады приветствовать вас на нашем сайте. Здесь вы можете ознакомиться с перечнем услуг, предоставляемых командой профессионалов ветеринарной клиники "Мален-Вет". Еще вашему вниманию предлагаем полезные <a href="<?php echo get_option("siteurl"); ?>/articles/" class="about__link-text">статьи</a>.
                    </p>
                    <p class="about__text">
                        Клиника оснащена современным оборудованием, а также сотрудничает с рядом лабораторий, что позволяет делать все виды анализов и производить любую <a href="<?php echo get_option("siteurl"); ?>/diagnostic/" class="about__link-text">диагностику</a>.
                    </p>
                    <p class="about__text">
                        Тут вы можете получить консультацию по выращиванию, содержанию и уходу за вашим питомцем.
                    </p>
                    <p class="about__text">
                        Наши врачи имеют достаточно практического опыта в постановке диагноза и назначении <a href="<?php echo get_option("siteurl"); ?>/therapy/" class="about__link-text">терапии</a>.
                    </p>
                    <p class="about__text">
                        Специалист <a href="<?php echo get_option("siteurl"); ?>/dentistry/" class="about__link-text">стоматолог</a> поможет сохранить зубы вашего питомца здоровыми и красивыми.
                    </p>
                    <p class="about__text">
                        Квалификация <a href="<?php echo get_option("siteurl"); ?>/surgery/" class="about__link-text">хирургов</a> позволяет проводить операции любой степени сложности.
                    </p>
                    <p class="about__text">
                        Для пациентов, нуждающихся в постоянном присмотре ветеринарного врача, функционирует <a href="<?php echo get_option("siteurl"); ?>/hospital/" class="about__link-text">стационар</a>.
                    </p>
                    <p class="about__text">
                        Работает <a href="<?php echo get_option("siteurl"); ?>/gruming/" class="about__link-text">груминг</a> кабинет.
                    </p>
                    <p class="about__text">
                        Мы ценим ваш комфорт и время. Поэтому у нас есть <a href="<?php echo get_option("siteurl"); ?>/contacts/" class="about__link-text">предварительная запись</a>. Это позволяет клиентам заранее планировать свой график и не тратить время на ожидание в очереди.
                    </p>
                    <div class="about__more">
                        <div class="about__read">
                            <p class="about__text">
                                Электронная база историй болезни. На каждого пациента создается личная карточка, в которую заносятся данные осмотра, результаты исследований и анализов. Возможность вызова врача на дом.
                            </p>
                            <p class="about__text">
                                Комната ожидания приема оборудована кулером со свежей питьевой водой, здесь же находится <a href="<?php echo get_option("siteurl"); ?>/shop/" class="about__link-text">зоомагазин</a>, где можно приобрести необходимые товары для животных.
                            </p>
                            <p class="about__text">
                                В приемной есть весы, на которых можно взвесить питомцев от размера маленького котенка до размера большой собаки, <a href="<?php echo get_option("siteurl"); ?>/pharmacy/" class="about__link-text">ветеринарная аптека</a>, бесплатный Wi-Fi.
                            </p>
                            <p class="about__text">
                                Если вам нужно оставить клинически здоровое животное на время вашего отъезда – это можно сделать в <a href="<?php echo get_option("siteurl"); ?>/hospital/" class="about__link-text">гостинице</a> при клинике. Профессиональный уход и безопасность обеспечены.
                            </p>
                        </div>
                    </div>
                    <div class="about__link"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="personnel">
    <div class="container personnel__container">
        <?php if($malenvet_options['titlepersonnel']) { ?>
            <h2 class="personnel__title" id="personnel">
                <?php echo $malenvet_options['titlepersonnel']; ?>
            </h2>
        <?php } ?>
        <ul class="personnel__list">
            <li class="personnel__item">
                <div class="personnel__inside">
                    <div class="personnel__photo">
                        <img src="img/ff.jpg" alt="Фото">
                    </div>
                    <div class="personnel__desc">
                        <h3 class="personnel__name">
                            <p>Дяченко</p>
                            <p>Елена Дмитриевна</p>
                        </h3>
                        <div class="personnel__cont">
                            Главврач<br> Tерапевт, хирург, дерматолог
                        </div>
                    </div>
                </div>
            </li>
            <li class="personnel__item">
                <div class="personnel__inside">
                    <div class="personnel__photo">
                        <img src="img/ff.jpg" alt="Фото">
                    </div>
                    <div class="personnel__desc">
                        <h3 class="personnel__name">
                            <p>Прокопчук</p>
                            <p>Марина Анатольевна</p>
                        </h3>
                        <div class="personnel__cont">
                            Терапевт, хирург, нефролог
                        </div>
                    </div>
                </div>
            </li>
            <li class="personnel__item">
                <div class="personnel__inside">
                    <div class="personnel__photo">
                        <img src="img/ff.jpg" alt="Фото">
                    </div>
                    <div class="personnel__desc">
                        <h3 class="personnel__name">
                            <p>Сак</p>
                            <p>Виктория Дмитриевна</p>
                        </h3>
                        <div class="personnel__cont">
                            Терапевт, грумер
                        </div>
                    </div>
                </div>
            </li>
            <li class="personnel__item">
                <div class="personnel__inside">
                    <div class="personnel__photo">
                        <img src="img/ff.jpg" alt="Фото">
                    </div>
                    <div class="personnel__desc">
                        <h3 class="personnel__name">
                            <p>Параска</p>
                            <p>Александр Александрович</p>
                        </h3>
                        <div class="personnel__cont">
                            Терапевт, хирург, анестезиолог
                        </div>
                    </div>
                </div>
            </li>
            <li class="personnel__item">
                <div class="personnel__inside">
                    <div class="personnel__photo">
                        <img src="img/ff.jpg" alt="Фото">
                    </div>
                    <div class="personnel__desc">
                        <h3 class="personnel__name">
                            <p>Любуцына</p>
                            <p>Карина Олеговна</p>
                        </h3>
                        <div class="personnel__cont">
                            Ассистентка
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>




<?php get_footer();