<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.contact.create');
    }

    public function store(ContactRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'msg'));

        Mail::to(config('laracarte.admin_support_email'))
            ->queue(new ContactMessageCreated($message));

        flash('Message envoyé avec succès. Nous vous repondrons dans les bref délais.', 'Information')->success();

        return redirect()->route('home');
    }
}
