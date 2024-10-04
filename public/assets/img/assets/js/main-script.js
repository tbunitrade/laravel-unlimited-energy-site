//header close btn
const closebtn = document.getElementById('close_btn');
if(closebtn) {
    closebtn.addEventListener('click', () =>{
        //console.log('i see click');
        const topHeader = document.getElementById('topHeader');
        if(topHeader.classList.contains('active')) {
            topHeader.classList.remove('active');
            console.log('hide block topHeader');
            // Используем функцию с истечением срока хранения
            setLocalStorageWithExpiry('headerClosed', 'true', 86400000); // 1 день
        }
    });
}

// Проверяем при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    const topHeader = document.getElementById('topHeader');
    const headerClosed = getLocalStorageWithExpiry('headerClosed');

    if(headerClosed === 'true') {
        console.log('Блок скрыт, так как ранее был закрыт');
        topHeader.classList.remove('active');
    } else {
        topHeader.classList.add('active');
    }
});

// Установка данных с указанием срока (например, 1 день)
function setLocalStorageWithExpiry(key, value, ttl) {
    const now = new Date();

    // Объект, который будет сохранен в localStorage
    const item = {
        value: value,
        expiry: now.getTime() + ttl, // Время, когда данные должны истечь
    };
    localStorage.setItem(key, JSON.stringify(item));
}

// Получение данных с учетом срока действия
function getLocalStorageWithExpiry(key) {
    const itemStr = localStorage.getItem(key);

    // Если ключа нет, возвращаем null
    if (!itemStr) {
        return null;
    }

    const item = JSON.parse(itemStr);
    const now = new Date();

    // Проверяем срок годности данных
    if (now.getTime() > item.expiry) {
        // Если срок истек, удаляем данные и возвращаем null
        localStorage.removeItem(key);
        return null;
    }
    return item.value;
}

console.log('load ok');
