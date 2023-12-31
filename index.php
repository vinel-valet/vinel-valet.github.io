<?php
/*
Template Name: My Custom Template
*/
get_header();
?>
    <div class="wrapper">
        <div class="header-wrapper">
            <div class="header-container">
                <div class="header-logo-menu">
                    <div class="burger-icon"></div>
                    <div class="header-logo">
                        <a href="#" class="header-menu-element">
                            <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="logo">
                            <img class="logo-mob" src="<?php bloginfo('template_url'); ?>/assets/img/logoMob.svg" alt="logo">
                        </a>
                    </div>
                    <div class="header-menu">
                          <a href="#" class="header-menu-element">About</a>
                          <a href="#" class="header-menu-element">Services</a>
                          <a href="#" class="header-menu-element">Masters</a>
                          <a href="#" class="header-menu-element">Reviews</a>
                          <a href="#" class="header-menu-element">Contacts</a>
                    </div>
                </div>
                <div class="header-mobile">
                    <a href="#" class="header-mobile-number"><?php echo get_field('mobile_number')?></a>
                    <a href="#" class="header-mobile-lang">RU</a>
                </div>
            </div>
            <div class="header-burger-menu">
                <div class="header-menu">
                    <a href="#" class="header-menu-element">О нас</a>
                    <a href="#" class="header-menu-element">Услуги</a>
                    <a href="#" class="header-menu-element">Мастера</a>
                    <a href="#" class="header-menu-element">Контакты</a>
                    <a href="#" class="header-menu-element">Instagram</a>
                    <button class="button-main-block">
                         Онлайн запись
                    </button>
                </div>
            </div>
        </div>
        <div class="main-block-container">
            <div class="main-block-content">
                <div class="main-block-content-first">
                    <div class="icon-inst">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 6C18.3284 6 19 5.32843 19 4.5C19 3.67157 18.3284 3 17.5 3C16.6716 3 16 3.67157 16 4.5C16 5.32843 16.6716 6 17.5 6ZM17.5 5C17.7761 5 18 4.77614 18 4.5C18 4.22386 17.7761 4 17.5 4C17.2239 4 17 4.22386 17 4.5C17 4.77614 17.2239 5 17.5 5Z" fill="#2E2E2E"/>                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17 11C17 14.3137 14.3137 17 11 17C7.68629 17 5 14.3137 5 11C5 7.68629 7.68629 5 11 5C14.3137 5 17 7.68629 17 11ZM16 11C16 13.7614 13.7614 16 11 16C8.23858 16 6 13.7614 6 11C6 8.23858 8.23858 6 11 6C13.7614 6 16 8.23858 16 11Z" fill="#2E2E2E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.653961 3.27606C0 4.55953 0 6.23969 0 9.6V12.4C0 15.7603 0 17.4405 0.653961 18.7239C1.2292 19.8529 2.14708 20.7708 3.27606 21.346C4.55953 22 6.23969 22 9.6 22H12.4C15.7603 22 17.4405 22 18.7239 21.346C19.8529 20.7708 20.7708 19.8529 21.346 18.7239C22 17.4405 22 15.7603 22 12.4V9.6C22 6.23969 22 4.55953 21.346 3.27606C20.7708 2.14708 19.8529 1.2292 18.7239 0.653961C17.4405 0 15.7603 0 12.4 0H9.6C6.23969 0 4.55953 0 3.27606 0.653961C2.14708 1.2292 1.2292 2.14708 0.653961 3.27606ZM12.4 1H9.6C7.90334 1 6.69099 1.00078 5.74064 1.07842C4.80197 1.15512 4.20731 1.30179 3.73005 1.54497C2.78924 2.02433 2.02433 2.78924 1.54497 3.73005C1.30179 4.20731 1.15512 4.80197 1.07842 5.74064C1.00078 6.69099 1 7.90334 1 9.6V12.4C1 14.0967 1.00078 15.309 1.07842 16.2594C1.15512 17.198 1.30179 17.7927 1.54497 18.27C2.02433 19.2108 2.78924 19.9757 3.73005 20.455C4.20731 20.6982 4.80197 20.8449 5.74064 20.9216C6.69099 20.9992 7.90334 21 9.6 21H12.4C14.0967 21 15.309 20.9992 16.2594 20.9216C17.198 20.8449 17.7927 20.6982 18.27 20.455C19.2108 19.9757 19.9757 19.2108 20.455 18.27C20.6982 17.7927 20.8449 17.198 20.9216 16.2594C20.9992 15.309 21 14.0967 21 12.4V9.6C21 7.90334 20.9992 6.69099 20.9216 5.74064C20.8449 4.80197 20.6982 4.20731 20.455 3.73005C19.9757 2.78924 19.2108 2.02433 18.27 1.54497C17.7927 1.30179 17.198 1.15512 16.2594 1.07842C15.309 1.00078 14.0967 1 12.4 1Z" fill="#2E2E2E"/>
                        </svg>
                    </div>
                    <p><?php echo get_field('first_line')?></p>
                </div>
                <div class="main-block-content-second">
                    <div class="text-inst">
                        <span>I</span><span>N</span><span>S</span><span>T</span><span>A</span>
                    </div>
                    <img class="exhair-logo" src="<?php bloginfo('template_url'); ?>/assets/img/EXHAIR.svg" alt="logo">
                </div>
                <p class="main-block-content-third">
                    <?php echo get_field('second_line')?>
                </p>
                <div class="main-block-content-fourth">
                    <div class="icon-mouse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="22" viewBox="0 0 14 22" fill="none">
                        <path d="M7.5 4C7.5 3.72386 7.27614 3.5 7 3.5C6.72386 3.5 6.5 3.72386 6.5 4V7C6.5 7.27614 6.72386 7.5 7 7.5C7.27614 7.5 7.5 7.27614 7.5 7V4Z" fill="#2E2E2E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7C0 6.07116 0 5.60674 0.0513308 5.21684C0.405792 2.52444 2.52444 0.405792 5.21684 0.0513308C5.60674 0 6.07116 0 7 0C7.92884 0 8.39326 0 8.78316 0.0513308C11.4756 0.405792 13.5942 2.52444 13.9487 5.21684C14 5.60674 14 6.07116 14 7V15C14 15.9288 14 16.3933 13.9487 16.7832C13.5942 19.4756 11.4756 21.5942 8.78316 21.9487C8.39326 22 7.92884 22 7 22C6.07116 22 5.60674 22 5.21684 21.9487C2.52444 21.5942 0.405792 19.4756 0.0513308 16.7832C0 16.3933 0 15.9288 0 15V7ZM13 7V15C13 15.9606 12.9978 16.3441 12.9572 16.6526C12.6618 18.8963 10.8963 20.6618 8.65263 20.9572C8.3441 20.9978 7.96063 21 7 21C6.03937 21 5.6559 20.9978 5.34737 20.9572C3.1037 20.6618 1.33816 18.8963 1.04278 16.6526C1.00216 16.3441 1 15.9606 1 15V7C1 6.03937 1.00216 5.6559 1.04278 5.34737C1.33816 3.1037 3.1037 1.33816 5.34737 1.04278C5.6559 1.00216 6.03937 1 7 1C7.96063 1 8.3441 1.00216 8.65263 1.04278C10.8963 1.33816 12.6618 3.1037 12.9572 5.34737C12.9978 5.6559 13 6.03937 13 7Z" fill="#2E2E2E"/>
                        </svg>
                    </div>
                    <button class="button-main-block">
                        <?php echo get_field('text_for_button')?>
                    </button>
                </div>
                <div class="main-block-content-shadow"></div>
                <p class="main-block-content-fifth">
                    <?php echo get_field('address')?>
                </p>
            </div>
            <div class="first-block-img-container">
                <img src="<?php the_field('main_img'); ?>" alt="" />
            </div>

            <div class="popup">
                <div class="popup-content">
                    <div class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                            <rect x="0.5" y="0.5" width="43" height="43" stroke="#2E2E2E"/>
                            <path d="M13 13L31 31" stroke="#2E2E2E"/>
                            <path d="M31 13L13 31" stroke="#2E2E2E"/>
                        </svg>
                    </div>
                    <p class="title-popup">Онлайн запись</p>
                    <p class="text-popup">оставьте свой номер телефона и мы свяжемся с Вами в ближайшее время</p>
                    <div class="popup-inputs">
                        <input type="text" id="name" name="name" placeholder="Имя" required>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Телефон" required>
                        <button>Отправить</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-wrapper">
             <h4 class="slider-title"><?php echo get_field('title_swiper')?></h4>
             <div class="slider-description-container">
                 <p class="slider-description">
                     <?php echo get_field('text_for_link')?>
                     <a href="#">Instagram</a>
                 </p>
                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 6C18.3284 6 19 5.32843 19 4.5C19 3.67157 18.3284 3 17.5 3C16.6716 3 16 3.67157 16 4.5C16 5.32843 16.6716 6 17.5 6ZM17.5 5C17.7761 5 18 4.77614 18 4.5C18 4.22386 17.7761 4 17.5 4C17.2239 4 17 4.22386 17 4.5C17 4.77614 17.2239 5 17.5 5Z" fill="#2E2E2E"/>                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17 11C17 14.3137 14.3137 17 11 17C7.68629 17 5 14.3137 5 11C5 7.68629 7.68629 5 11 5C14.3137 5 17 7.68629 17 11ZM16 11C16 13.7614 13.7614 16 11 16C8.23858 16 6 13.7614 6 11C6 8.23858 8.23858 6 11 6C13.7614 6 16 8.23858 16 11Z" fill="#2E2E2E"/>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.653961 3.27606C0 4.55953 0 6.23969 0 9.6V12.4C0 15.7603 0 17.4405 0.653961 18.7239C1.2292 19.8529 2.14708 20.7708 3.27606 21.346C4.55953 22 6.23969 22 9.6 22H12.4C15.7603 22 17.4405 22 18.7239 21.346C19.8529 20.7708 20.7708 19.8529 21.346 18.7239C22 17.4405 22 15.7603 22 12.4V9.6C22 6.23969 22 4.55953 21.346 3.27606C20.7708 2.14708 19.8529 1.2292 18.7239 0.653961C17.4405 0 15.7603 0 12.4 0H9.6C6.23969 0 4.55953 0 3.27606 0.653961C2.14708 1.2292 1.2292 2.14708 0.653961 3.27606ZM12.4 1H9.6C7.90334 1 6.69099 1.00078 5.74064 1.07842C4.80197 1.15512 4.20731 1.30179 3.73005 1.54497C2.78924 2.02433 2.02433 2.78924 1.54497 3.73005C1.30179 4.20731 1.15512 4.80197 1.07842 5.74064C1.00078 6.69099 1 7.90334 1 9.6V12.4C1 14.0967 1.00078 15.309 1.07842 16.2594C1.15512 17.198 1.30179 17.7927 1.54497 18.27C2.02433 19.2108 2.78924 19.9757 3.73005 20.455C4.20731 20.6982 4.80197 20.8449 5.74064 20.9216C6.69099 20.9992 7.90334 21 9.6 21H12.4C14.0967 21 15.309 20.9992 16.2594 20.9216C17.198 20.8449 17.7927 20.6982 18.27 20.455C19.2108 19.9757 19.9757 19.2108 20.455 18.27C20.6982 17.7927 20.8449 17.198 20.9216 16.2594C20.9992 15.309 21 14.0967 21 12.4V9.6C21 7.90334 20.9992 6.69099 20.9216 5.74064C20.8449 4.80197 20.6982 4.20731 20.455 3.73005C19.9757 2.78924 19.2108 2.02433 18.27 1.54497C17.7927 1.30179 17.198 1.15512 16.2594 1.07842C15.309 1.00078 14.0967 1 12.4 1Z" fill="#2E2E2E"/>
                 </svg>
             </div>
             <div class="swiper-container">
                 <div class="swiper">
                     <div class="swiper-wrapper">
                         <div class="swiper-slide">
                            <div class="overlay"></div>
                            <video width="100%" height="auto" >
                                <source src="<?php bloginfo('template_url'); ?>/assets/img/v1.MP4" type="video/mp4">
                            </video>
                            <div class="play-button"></div>
                         </div>
                         <div class="swiper-slide">
                            <div class="overlay"></div>
                            <video width="100%" height="auto" >
                               <source src="<?php bloginfo('template_url'); ?>/assets/img/v2.MP4" type="video/mp4">
                            </video>
                            <div class="play-button"></div>
                         </div>
                         <div class="swiper-slide">
                            <div class="overlay"></div>
                            <video width="100%" height="auto" >
                               <source src="<?php bloginfo('template_url'); ?>/assets/img/v3.MP4" type="video/mp4">
                            </video>
                            <div class="play-button"></div>
                         </div>
                         <div class="swiper-slide">
                            <div class="overlay"></div>
                            <video width="100%" height="auto" >
                               <source src="<?php bloginfo('template_url'); ?>/assets/img/v4.MP4" type="video/mp4">
                            </video>
                            <div class="play-button"></div>
                         </div>
                         <div class="swiper-slide">
                            <div class="overlay"></div>
                            <video width="100%" height="auto" >
                               <source src="<?php bloginfo('template_url'); ?>/assets/img/v5.MP4" type="video/mp4">
                            </video>
                            <div class="play-button"></div>
                         </div>
                         <div class="swiper-slide">
                            <div class="overlay"></div>
                            <video width="100%" height="auto" >
                                <source src="<?php bloginfo('template_url'); ?>/assets/img/v6.MP4" type="video/mp4">
                            </video>
                            <div class="play-button"></div>
                         </div>
                     </div>
                 </div>
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
        </div>

        <div class="services-prices-module-wrapper">
            <h2 class="services-prices-module-title">
                <?php echo get_field('title_services_and_prices')?>
            </h2>
            <div class="services-prices-module-content">
                <div class="accordion-services-container" id="servicesContainer">
                    <div class="service-element">
                        <h4 class="name-service" data-service="service1">Наращивание волос</h4>
                        <div class="types-of-service">
                            <p class="type-of-service">Горячее итальянское</p>
                            <p class="type-of-service">Холодное испанское</p>
                            <p class="type-of-service">Биолента</p>
                            <p class="type-of-service">Голливудское</p>
                        </div>
                    </div>
                    <div class="service-element">
                        <h4 class="name-service" data-service="service2">Загущение</h4>
                        <div class="types-of-service">
                            <p class="type-of-service">test1</p>
                            <p class="type-of-service">test2</p>
                            <p class="type-of-service">test3</p>
                            <p class="type-of-service">test4</p>
                        </div>
                    </div>
                    <div class="service-element">
                        <h4 class="name-service" data-service="service3">Коррекция</h4>
                        <div class="types-of-service">
                            <p class="type-of-service">test11</p>
                            <p class="type-of-service">test22</p>
                            <p class="type-of-service">test33</p>
                            <p class="type-of-service">test44</p>
                        </div>
                    </div>
                    <div class="service-element">
                        <h4 class="name-service" data-service="service4">Снятие нарощенных волос</h4>
                        <div class="types-of-service">
                            <p class="type-of-service">test111</p>
                            <p class="type-of-service">test222</p>
                            <p class="type-of-service">test333</p>
                            <p class="type-of-service">test444</p>
                        </div>
                    </div>
                </div>
                <div class="service-description" id="serviceDescription">
                    <div class="description-and-price">
                        <h4 class="name-service">Наращивание волос</h4>
                        <div class="service-description-text">
                            Зачем наращивать волосы? Многие задают этот вопрос.
                        </div>
                        <p class="service-price">Стоимость от 900 лари</p>
                        <button class="button-main-block">
                            <?php echo get_field('button_price_and_services')?>
                        </button>
                    </div>
                    <div class="service-description-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/hair.jpg" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
