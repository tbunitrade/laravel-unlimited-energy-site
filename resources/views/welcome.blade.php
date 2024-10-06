<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlimited Energy - Обслуговування та ремонт генераторів</title>
    <meta name="description" content="Unlimited Energy - експерт по обслуговуванню та ремонту генераторів. Обслуговування промислових і побутових генераторів. Гарантія якості на всі види робіт.">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

</head>
<body>
    <div id="app">
        <header class="header ">
            <h3 class="title">
                Електротехнічні роботи/послуги/сервіси від
                <span>Unlimited Energy - Обслуговування та ремонт генераторів</span>
            </h3>
            <div class="info">
                <a class="callMe" href="tel:+380992213341">+38(099)221-3341</a>

            </div>

        </header>
        <sidebar class="sidebar ">
            <div class="container">
                <a class="logo" href="/">
                    <img src="{{asset('assets/img/logo-sample.png')}}" alt="logo">

                </a>
                <p class="text">Ваша безкінечна енергія 24/7</p>
                <ul>
                    <h3>обслуговування генераторів</h3>
                    <li class="menu-item">
                        <a class="link" href="#orderKyiv">
                             Київ та київська область
                        </a>

                    </li>
                    <li class="menu-item">
                        <a class="link" href="#orderCherkasy">
                            Черкаси та черкаська область
                        </a>
                    </li>
                </ul>
            </div>
        </sidebar>
        <article class="article">
            <section>
                <h2>Як ми обслуговуємо та ремонтуємо генератори</h2>
                <div class="flex">
                    <img class="resp" width="250px" src="{{ asset('assets/img/generator2.webp') }}" alt="Генератор">
                    <div class="content">
                        <p class="text">
                            🔧 Персоналізований підхід<br>
                            — 📝 Оцінка потреб клієнта: Ми створюємо індивідуальні програми обслуговування, враховуючи особливості вашого бізнесу або організації.<br>
                            — 🤝 Гнучкі умови співпраці: Пропонуємо різні форми оплати, включаючи безготівковий розрахунок з ПДВ або без нього.<br>
                            <br>
                            1️⃣ Ваша заявка на діагностику або тестування обладнання.<br>
                            📞 Консультація для уточнення деталей.<br>
                            <br>
                            2️⃣ План робіт по ремонту.<br>
                            🚗 Виїзд до клієнта для ремонту промислових або побутових ДГУ.<br>
                            🔧 Виїзд для проведення заміни витратних матеріалів ДГУ.<br>
                            🔌 Підключення джерел безперебійного живлення.<br>
                            <br>
                            3️⃣ Завершення робіт по ремонту генератора.<br>
                            🛠️ Підключення клієнта до гарантійного або сервісного обслуговування обладнання.
                        </p>
                    </div>
                </div>

            </section>

            <section id="orderKyiv">
                <h1>Ремонт та обслуговування генераторів у місті Київ та області.</h1>
                <p class="seo-text">
                    🔧 Ремонт та обслуговування генераторів у місті Київ та області ⚙️<br>
                    🛠️ Сервісне обслуговування, ремонт, діагностика бензинових та дизельних генераторів з виїздом додому 🚗<br>
                    👨‍🔧 Індивідуальний підбір майстра для ремонту або обслуговування обладнання 🔍<br>
                    ✅ Тільки перевірені професійні майстри з досвідом роботи 🏅<br>
                    💵 Чесна ціна та гарантія на ремонт бензинових і дизельних генераторів ⚡🔋<br>
                </p>

                @include('form')
            </section>

            <section class="services">
                <h2>Unlimited Energy - ваш експерт по обслуговуванню та ремонту генераторів.</h2>
                <p class="text">
                    🔌 Підключення, технічне обслуговування, ремонт дизельно-генераторних установок (ДГУ).
                    <br>
                    ⚙️ Підключення, обслуговування та ремонт бензинових генераторів.<br>
                    <br>
                    🔋 Підключення джерел безперебійного живлення (ДБЖ), інверторів, акумуляторних батарей.<br>
                    <br>
                    🔧 Інші електротехнічні роботи.<br>
                    <br>
                    💡 Додаткові послуги<br>
                    🛠️ Ремонт побутових генераторів.<br>
                </p>
            </section>
            <section class="mainService">
                <h2>Обслуговування генераторів</h2>
                <ul>
                    <li class="one">
                        <img src="{{ asset('assets/img/service1.webp') }}" alt="ремонт генераторів">
                        <p><strong>Регулярні технічні огляди</strong>: Для забезпечення стабільної та надійної роботи вашого обладнання.</p></li>
                    <li class="two">
                        <img src="{{ asset('assets/img/service2.webp') }}" alt="ремонт генераторів">
                        <p><strong>Діагностика та тестування</strong>: Використання передових технологій для виявлення і запобігання можливим несправностям.</p></li>
                    <li class="three">
                        <img src="{{ asset('assets/img/service3.webp') }}" alt="ремонт генераторів">
                        <p><strong>Заміна витратних матеріалів</strong>: Олії, фільтри, свічки запалювання та інші компоненти, які потребують планової заміни.</p></li>
                    <li class="four">
                        <img src="{{ asset('assets/img/service4.webp') }}" alt="ремонт генераторів">
                        <p><strong>Калібрування та налаштування</strong>: Гарантуємо ефективну роботу генераторів у відповідності до вимог вашого підприємства.</p></li>
                </ul>
            </section>

            <section class="gaurantee">
                <h5>Гарантія якості на всі види ремонтних робіт з обладнання</h5>
                <ul>
                    <li><p><strong>Гарантія на виконані роботи</strong>: Ми гарантуємо якість усіх робіт, виконаних нашими фахівцями, з наданням гарантійного терміну.</p></li>
                    <li><p><strong>Підтримка клієнтів</strong>: Пропонуємо консультації та технічну підтримку після завершення робіт для вирішення будь-яких питань.</p></li>
                </ul>
            </section>

            <section id="orderCherkasy">
                <h2>Ремонт та обслуговування генераторів у місті Черкассы, черкасская область.</h2>

                <p class="seo-text">
                    Сервісне обслуговування, ремонт, діагностика бензинових та дизельних генераторів з виїздом додому
                    <br>
                    Індивідуальний підбір майстра для ремонту або обслуговування обладнання
                    <br>
                    Тільки перевірені професійні майстри з досвідом роботи
                    <br>
                    Чесна ціна та гарантія на ремонт бензинових і дизельних генераторів
                </p>
            </section>

            <section class="contact-us">
                <h2 class="title">Замовлення мастера</h2>
                <p class="text text-center">Залиште заявку, і ми зв'яжемося з вами для консультації щодо ремонту та обслуговування генераторів.</p>

                @include('form')
            </section>

            <section class="clients">
                <h5>Відгуки наших клієнтів</h5>
                <ul style="display: flex; flex-direction: row; gap: 20px; justify-content: center;">
                    <li>
                        <img src="https://www.infrost.com.ua/img/thu/alco/alco_controls.jpg" alt="Логотип Alco Controls">
                        <p>Замовляли технічний огляд нашого обладнання, і хлопці швидко виявили всі недоліки та оперативно провели ремонт. Уже другий місяць обладнання працює без перебоїв. Рекомендуємо Unlimited Energy!</p>
                        <p><strong>Святослав В., топ-менеджер компанії Alco Controls</strong></p>
                    </li>
                    <li>
                        <img src="https://www.infrost.com.ua/img/thu/alco/alco_controls.jpg" alt="Логотип Alco Controls">
                        <p>Компания Alco Controls понад 70 років на ринку холодильного обладнання та кондиціонування повітря.</p>
                    </li>
                    <li>
                        <img src="https://www.infrost.com.ua/img/thu/alfa_laval/alfalaval.jpg" alt="Логотип Alfa Laval">
                        <p>У складі Alfa Laval понад 110 маркетингових компаній і представництв у 95 країнах. Це одна з найбільших міжнародних промислових груп.</p>
                    </li>
                    <li>
                        <img src="https://www.infrost.com.ua/img/thu/bitzer/bitzer.jpg" alt="Логотип Bitzer">
                        <p>Компания Bitzer (Німеччина) розпочала свою діяльність у 1934 році. Її головний акцент — використання сучасних технологій для вдосконалення обладнання для холодильної промисловості.</p>
                    </li>
                </ul>
            </section>
        </article>

        <div id="page">
            <header>Header</header>
            <nav>Navigation</nav>
            <main>Main area</main>
            <footer>Footer</footer>
        </div>

        <footer class="footer">
            <p class="copyright">&copy; 2024 Unlimited Energy. Ваша безкінечна енергія 24/7</p>
        </footer>
    </div>
</body>
</html>
