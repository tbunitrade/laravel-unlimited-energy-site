<!DOCTYPE html>
<html lang="uk">
<head>
    <<h1>Unlimited Energy - Обслуговування та ремонт генераторів</h1>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unlimited Energy - експерт по обслуговуванню та ремонту генераторів. Обслуговування промислових і побутових генераторів. Гарантія якості на всі види робіт.">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <h1>Unlimited Energy</h1>
    <p>Ваша безкінечна енергія 24/7</p>
</header>
<style>
    header,footer {
        margin: auto;
        display: grid;
        width: 100%;
        max-width: 1280px;
    }
    section {
        background: #f7f7f7;
        padding: 20px;
        margin: auto;
        display: grid;
        width: 100%;
        max-width: 1280px;

    }

    h1 {
        font-size: 21px;
        line-height: 24px;
        text-align: center;
        margin-bottom: 25px;
    }
    h2,h3,h4,h5{
        font-size: 18px;
        line-height: 22px;
        text-align: center;
        margin-bottom: 15px;
    }

    section li {
        list-style-type: none;
    }

    section img {
       display: block;
        padding: 0 10px;
        margin: auto;
        min-height: 45px;


    }

    section p {
        font-size: 16px;
        line-height: 20px;
        font-weight: 400;
        text-align: center;
    }

    text {
        text-align: center;
    }

    section p strong {
        font-weight: bold;
    }

    .clients ul {
        padding: 0;
        margin: 0;
    }

    .clients ul li {
        max-width: 250px;
        margin: auto;
    }

    .services li {
        max-width: 670px;
        margin: auto;
    }
    .services li p {
       text-align: left;
    }

    .mainService ul {
        margin: auto;
        max-width: 920px;
    }

    .mainService li {
        width: 100%;
        max-width: 450px;
        display: inline-block;

    }
    .mainService img{
        display: block;
        padding: 0 10px;
        margin: auto;
        width: 150px;
        height: 150px;
        border-radius: 29px;
    }

    .mainService p{
        display: block;
        height: 150px;
        width: 100%;
        max-width: 320px;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>

<section class="services">
    <h2>Unlimited Energy - ваш єксперт по обслуговуванню та ремонту генераторів.</h2>
    <ul>
        <li><p class="text">Підключення, технічне обслуговування, ремонт дизельно-генераторних установок (ДГУ).</p></li>
        <li><p class="text">Підключення, обслуговування та ремонт бензинових генераторів.</p></li>
        <li><p class="text">Підключення джерел безперебійного живлення (ДБЖ), інверторів, акумуляторних батарей.</p></li>
        <li><p class="text">Інші електротехнічні роботи.</p></li>
    </ul>

    <h2>Додаткові послуги (варіации)</h2>
    <ul>
        <li><p class="text">Ремонт побутових/побутових генераторів.</p></li>
    </ul>
</section>
<section >
    <img src="{{ asset('assets/img/generator2.webp') }}" alt="Генератор">
    <h2>Як ми обслуговуємо та ремонтуємо генератори</h2>
    <p class="text">
        Персоналізований підхід
        <br>— Оцінка потреб клієнта: Ми створюємо індивідуальні програми обслуговування, враховуючи особливості вашого бізнесу або організації.
        <br>— Гнучкі умови співпраці: Пропонуємо різні форми оплати, включаючи безготівковий розрахунок з ПДВ або без нього.
    </p>
    <ol>
        <li><p class="text">1) Ваша заявка на діагностику або тестування обладнання.<br>
                                Консультація для уточнення деталей
                            </p></li>
        <li><p class="text">2) План робіт по ремонту<br>
                Виїзд до клієнта для ремонту промислових / побутових ДГУ.<br>
                    Виїзд для проведення заміни витратних матеріалів ДГУ.<br>
                    Підключення джерел бесперебойного харчування.<br>
        <li><p class="text">3) Завершення робіт по ремонту герератора <br> Підключення клієнта до гарантійного або сервісного обслуговування обладнання.</p></li>
    </ol>
</section>
<style>


</style>


<section class="mainService">
    <h2>Обслуговування генераторів</h2>

    <ul>
        <li>
            <img  src="{{ asset('assets/img/service1.webp') }}" alt="Генератор">
            <p> <strong>Регулярні технічні огляди</strong>: Для забезпечення стабільної та надійної роботи вашого обладнання. </p></li>
        <li>
            <img  src="{{ asset('assets/img/service2.webp') }}" alt="Генератор">
            <p> <strong>Діагностика та тестування</strong>: Використання передових технологій для виявлення і запобігання можливим несправностям.</p></li>
        <li>  <img  src="{{ asset('assets/img/service3.webp') }}" alt="Генератор">
            <p> <strong>Заміна витратних матеріалів</strong>: Олії, фільтри, свічки запалювання та інші компоненти, які потребують планової заміни.</p></li>
        <li>  <img src="{{ asset('assets/img/service4.webp') }}" alt="Генератор">
            <p> <strong>Калібрування та налаштування</strong>: Гарантуємо ефективну роботу генераторів у відповідності до вимог вашого підприємства.</p></li>
    </ul>
</section>
<section>
    <h5>Гарантія якості на усі види ремонтних робіт з обладнання</h5>
    <li> <p><strong>Гарантія на виконані роботи</strong>: Ми гарантуємо якість усіх робіт, виконаних нашими фахівцями, з наданням гарантійного терміну.</p></li>
    <li> <p><strong>Підтримка клієнтів: Пропонуємо консультації та технічну підтримку після завершення робіт для вирішення будь-яких питань.</p></li>
</section>
<section class="clients">
    <h5>
        Відгуки наших клієнтів
    </h5>
    <ul style="display: flex;flex-direction: row; gap: 20px; justify-content: center ">
        <li>
            <img src="http://www.infrost.com.ua/img/thu/alco/alco_controls.jpg" alt="sony">
            <p> Замовляли тех огляд обладнання. Хлопці виявили недоліки та швидко зробили ремонт генератора, другий місяць все працює стабільно!</p>
            <p><strong>Топ менеджер компанії Alco Controls - Святослав В. </strong></p>
        </li>

        <li>
            <img src="http://www.infrost.com.ua/img/thu/alco/alco_controls.jpg" alt="sony">
            <p>Компания Alco Controls более 70 лет на рынке холодильного оборудования и кондиционирования воздуха.</p>
        </li>

        <li>
            <img src="http://www.infrost.com.ua/img/thu/alfa_laval/alfalaval.jpg" alt="sony">
            <p>В состав Alfa Laval (Альфа Лаваль) входят более 110 маркетинговых компаний и представительств в 95 странах.
                Это одна из крупнейших международных промышленных групп.</p>
        </li>

        <li>
            <img src="http://www.infrost.com.ua/img/thu/bitzer/bitzer.jpg" alt="sony">
            <p>Компания Bitzer (Германия) начала свою деятельность в 1934 году.
                С самого начал упор был сделан на использовании современных технологий для усовершенствования выпускаемого
                оборудования для холодильной промышлености.</p>
        </li>
    </ul>
</section>

<section>
    <h2>Форма для зв'язку</h2>
    <form action="{{ route('send') }}" method="POST" style="width: 400px;margin: auto">
        @csrf
        <label for="name">Ім’я:</label>
        <br>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="phone">Телефон:</label>
        <br>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <label for="topic">Тема:</label>
        <br>
        <select id="topic" name="topic" required>
            <option value="dgu">ТО и ремонт промышленных ДГУ</option>
            <option value="generators">ТО и ремонт бытовых генераторов</option>
            <option value="ups">Подключение ДГУ и ИБП</option>
        </select>
        <br><br>
        <button type="submit">Відправити повідомлення</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Unlimited Energy. Ваша безкінечна енергія 24/7</p>
</footer>
</body>
</html>
