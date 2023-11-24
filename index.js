document.addEventListener('DOMContentLoaded', function() {

    (function swiper () {
        var swiper = new Swiper('.swiper', {
            slidesPerView: 1.2,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                769: {
                    slidesPerView: 4,
                },
                376: {
                    slidesPerView: 2.3,
                }
            },
        });

        let videos = document.querySelectorAll('video');
        let playButtons = document.querySelectorAll('.play-button');

        playButtons.forEach(function (button, index) {
            button.addEventListener('click', function () {
                toggleVideoControls(index);
                toggleVideoPlayback(index);
            });
            videos[index].addEventListener('pause', function () {
                showPlayButton(index);
                removeControls(index);
                disablePointerEvents(index);
            });
            videos[index].addEventListener('playing', function () {
                hidePlayButton(index);
                pauseAllVideosExcept(index);
                enablePointerEvents(index);
            });
            videos[index].addEventListener('click', function () {
                pauseAllVideosExcept(index);
            });
        });
        function toggleVideoControls(index) {
            if (videos[index].hasAttribute('controls')) {
                videos[index].removeAttribute('controls');
            } else {
                videos[index].setAttribute('controls', 'controls');
            }
        }
        function toggleVideoPlayback(index) {
            if (videos[index].paused) {
                playVideo(index);
            } else {
                pauseVideo(index);
            }
        }
        function playVideo(index) {
            videos[index].play();
            hidePlayButton(index);
        }
        function pauseVideo(index) {
            videos[index].pause();
            showPlayButton(index);
        }
        function removeControls(index) {
            videos[index].removeAttribute('controls');
        }
        function disablePointerEvents(index) {
            videos[index].style.pointerEvents = 'none';
        }
        function enablePointerEvents(index) {
            videos[index].style.pointerEvents = 'auto';
        }
        function pauseAllVideosExcept(index) {
            videos.forEach(function (video, i) {
                if (i !== index) {
                    pauseVideo(i);
                }
            });
        }
        function showPlayButton(index) {
            playButtons[index].style.display = 'block';
        }
        function hidePlayButton(index) {
            playButtons[index].style.display = 'none';
        }
    })();

    let serviceElements = document.querySelectorAll(".service-element");
    serviceElements.forEach(function (element) {
        let header = element.querySelector(".name-service");

        header.addEventListener("click", function () {
            serviceElements.forEach(function (el) {
                if (el !== element) {
                    el.classList.remove("active");
                }
            });
            element.classList.toggle("active");
        });
    });

    (function popup () {
        let openPopupBtns = document.querySelectorAll(".button-main-block");
        let closePopupBtn = document.querySelector(".close");
        let popup = document.querySelector(".popup");

        openPopupBtns.forEach(function (btn) {
            btn.addEventListener("click", function () {
                popup.style.display = "block";
                document.body.classList.add("popup-open"); // Добавляем класс для отключения скроллинга
            });
        });

        closePopupBtn.addEventListener("click", function () {
            popup.style.display = "none";
            document.body.classList.remove("popup-open"); // Удаляем класс для включения скроллинга
        });

        window.addEventListener("click", function (event) {
            if (event.target === popup) {
                popup.style.display = "none";
                document.body.classList.remove("popup-open"); // Удаляем класс для включения скроллинга
            }
        });
    })();

    (function burgerMenu () {
        let burgerIcon = document.querySelector('.burger-icon');
        let body = document.querySelector('body');
        let mobileMenu = document.querySelector('.header-burger-menu');

        burgerIcon.addEventListener('click', function () {
            mobileMenu.classList.toggle('active');
            body.classList.toggle('active');
            burgerIcon.classList.toggle('active');
        });
    })();

    (function tabsModule () {
        let servicesData = {
            service1: {
                name: 'Наращивание волос',
                text: 'Текст для Наращивание волос',
                price: 'Стоимость от 900 лари',
                image: "/assets/img/hair.jpg"
            },
            service2: {
                name: 'Загущение',
                text: 'Текст для Загущение',
                price: 'Стоимость от XXX лари',
                image: "/assets/img/hair2.jpg"
            },
            service3: {
                name: 'Коррекция',
                text: 'Текст для Коррекция',
                price: 'Стоимость от YYY лари',
                image: "/assets/img/hair3.jpg"
            },
            service4: {
                name: 'Снятие нарощенных волос',
                text: 'Текст для Снятие нарощенных волос',
                price: 'Стоимость от ZZZ лари',
                image: "/assets/img/hair4.jpg"
            }
        };

        function updateServiceContent(serviceName) {
            let service = servicesData[serviceName];
            let nameServiceElement = document.querySelector('.service-description .name-service');
            let descriptionTextElement = document.querySelector('.service-description-text');
            let servicePriceElement = document.querySelector('.service-description .service-price');
            let serviceImageElement = document.querySelector('.service-description-image img');

            nameServiceElement.textContent = service.name;
            descriptionTextElement.textContent = service.text;
            servicePriceElement.textContent = service.price;
            serviceImageElement.src = service.image;
        }

        let serviceButtons = document.querySelectorAll('.name-service');
        serviceButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                let serviceName = button.getAttribute('data-service');
                updateServiceContent(serviceName);
            });
        });

        let defaultService = 'service1';
        updateServiceContent(defaultService);
    })();
})