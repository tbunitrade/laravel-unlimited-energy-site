<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class MainController extends Controller
{
    //
    public function index()
    {
        // template for landing page
        return view('welcome');
    }

    public function send(Request $request)
    {
        // Валидация данных формы, включая CAPTCHA
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'topic' => 'required|string',
            'captcha' => 'required|in:10', // CAPTCHA: 3 + 7 = 10
        ]);

        // Сохранение данных в базу
        Contact::create($validated);

        // Формируем сообщение для отправки в Telegram
        $message = "Нове від {$validated['name']}\nТема: {$validated['topic']}\nТелефон: {$validated['phone']}";

        // Отправляем сообщение в Telegram
        $this->sendTelegramMessage($message);

        try {
            $recipients = explode(',', env('MAIL_RECIPIENTS'));

            // Отправка письма
            Mail::raw('Нове зі сайту від ' . $validated['name'], function ($message) use ($recipients) {
                $message->to($recipients)
                    ->subject('Нове з сайту');
            });

            Log::info('Почта надіслана успешно!');

            // Перенаправляем пользователя с сообщением об успешной отправке
            return redirect()->route('home')->with('success', 'Дякуємо за звернення! Ми зв’яжемось із Вами найближчим часом.');
        } catch (\Exception $e) {
            Log::error('Ошибка при отправке письма: ' . $e->getMessage());

            // Перенаправляем пользователя с сообщением об ошибке
            return redirect()->route('home')->with('error', 'Не вдалося відправити лист. Спробуйте пізніше.');
        }
    }


    // Метод для отправки сообщения в Telegram
    public function sendTelegramMessage($message)
    {
        $token = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        if (empty($token) || empty($chatId)) {
            Log::error('Отсутствует токен или chat_id для Telegram.');
            return;
        }


        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $params = [
            'chat_id' => $chatId,
            'text' => $message,
        ];

        try {
            // Создаем новый клиент Guzzle
            $client = new Client();
            $response = $client->post($url, ['form_params' => $params]);

            if ($response->getStatusCode() == 200) {
                Log::info('Сообщение успешно отправлено в Telegram');
            } else {
                Log::error('Ошибка при отправке сообщения в Telegram: Статус ответа ' . $response->getStatusCode());
            }

        } catch (\Exception $e) {
            // Логирование ошибки отправки в Telegram
            Log::error('Ошибка при отправке в Telegram: ' . $e->getMessage());
        }
    }
}
