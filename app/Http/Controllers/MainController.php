<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    //
    public function index()
    {
        // template for landiong page
        return view('welcome');
    }

    public function send(Request  $request)
    {
        //logic for form request
        $validated = $request->validate([
           'name' => 'required|string|max:255',
           'phone' => 'required|string|max:15',
           'topic' => 'required|string',
        ]);

        Contact::create($validated);

        //logic for email sender

//        try {
//            Mail::raw('Нове повідомлення зі сайту' . $validated['name'], function ($message)  {
//                $message->to(['tbunitrade@gmail.com', 'ilyavesely@gmail.com',''])
//                    -> subject('Нове повідомлення з сайту');
//            });
//
//
//            Log::info('Почта отправлена успешно');
//
//            return redirect()->route('home')->with('success','Дякую за звернення');
//
//        } catch (\Exception $e) {
//            // Если произошла ошибка, записываем её в лог
//            Log::error('Ошибка при отправке письма: ' . $e->getMessage());
//
//            // Возвращаем сообщение о неудаче
//            return redirect()->route('home')->with('error', 'Не вдалося відправити лист. Спробуйте пізніше.');
//        }

        try {
            // Убираем пустые строки и передаём только корректные email-адреса
            $recipients = array_filter(['tbunitrade@gmail.com', 'ilyavesely@gmail.com']);

            Mail::raw('Нове повідомлення зі сайту від ' . $validated['name'], function ($message) use ($recipients) {
                $message->to($recipients)
                    ->subject('Нове повідомлення з сайту');
            });

            Log::info('Почта отправлена успешно');

            return redirect()->route('home')->with('success', 'Дякую за звернення');
        } catch (\Exception $e) {
            // Логирование ошибки
            Log::error('Ошибка при отправке письма: ' . $e->getMessage());

            // Возвращаем сообщение об ошибке
            return redirect()->route('home')->with('error', 'Не вдалося відправити лист. Спробуйте пізніше.');
        }
    }
}
