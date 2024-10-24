<form class="form" action="{{ route('send') }}" method="POST">
    <fieldset>
    <legend>Замовити дзвінок</legend>
    @csrf
    <label for="name">Ім’я:</label>
    <br>
    <input type="text" id="name" name="name" maxlength="100" required pattern="[А-Яа-яЁёA-Za-z ]+" title="Допускаються тільки букви">
    <br><br>

    <label for="phone">Телефон:</label>
    <br>
    <input type="tel" id="phone" name="phone" maxlength="15" required pattern="^\+?[0-9]{10,15}$" title="Введіть правильний номер телефону, включаючи код країни. Наприклад: +380123456789">
    <br><br>

    <label for="topic">Тема:</label>
    <br>
    <select id="topic" name="topic" required>
        <option value="dgu">ТО і ремонт дизельних генераторів</option>
        <option value="generators">ТО і ремонт бензинових генераторів</option>
        <option value="ups">Підключення джерел безперебійного живлення</option>
        <option value="dgu">Підключення ДГУ</option>
        <option value="consultation">Безкоштовна консультація</option>
        <option value="other">Інше</option>
    </select>

    </fieldset>
    <br><br>
    <!-- Текст перед кнопкой -->

    <!-- Простая CAPTCHA -->
    <label for="captcha">Введіть суму 3 + 7</label>
    <br>
    <input type="text" id="captcha" name="captcha" required>
    <br><br>
    <br>
    <small>
        Натискаючи кнопку “Відправити повідомлення” я погоджуюся із наданням своїх персональних даних,
        які я залишаю на сайті, та використанням цих даних власником сайту у цілях контакту зі мною,
        а також подальших маркетингових заходів власника сайту та його партнерів.
    </small>
    <br><br>

    <button type="submit">Відправити повідомлення</button>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

</form>
