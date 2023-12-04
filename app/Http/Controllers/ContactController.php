<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        Http::post('https://api.telegram.org/bot' . config('telegram.telegram_bot_token') . '/sendMessage', [
            'chat_id' => config('telegram.telegram_chat_id'),
            'text' => 'Name - ' . $validated['name'] . PHP_EOL .
                'Email - ' . $validated['email'] . PHP_EOL .
                'Message - ' . $validated['message'] . PHP_EOL .
                'Date - ' . now()->format('Y-m-d H:i:s')
        ]);

        // Mail::to('aunghtetmyatoo888@gmail.com')
        //     ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        return $request->all();
    }
}
