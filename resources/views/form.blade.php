<form class="form" action="{{ route('send') }}" method="POST" style="width: 400px; margin: auto;">
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
        <option value="0">вкажіть</option>
        <option value="dgu">ТО і ремонт промислових ДГУ</option>
        <option value="generators">ТО і ремонт побутових генераторів</option>
        <option value="ups">Підключення ДГУ та ІБП</option>
        <option value="consultation">Консультація</option>
        <option value="other">Інше</option>
    </select>
    <br><br>

    <button type="submit">Відправити повідомлення</button>
</form>
