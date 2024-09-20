<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendAMessage;

class SendMail extends Controller
{
    public function sendMessage(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'messages' => 'required|string',
            'services' => 'nullable|array', 
        ]);

        $name = $validated['name'];
        $email = $validated['email'];
        $messages = $validated['messages'];
        $services = $validated['services'] ?? [];

        Mail::to( getenv('MAIL_TO'))->send(new SendAMessage($name, $email, $services, $messages));
        return response()->json(["messages" => "Message sent sucessfully"]);
    }
}
