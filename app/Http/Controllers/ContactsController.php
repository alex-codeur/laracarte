<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->msg = $request->msg;
        $message->save();

        $mailable = new ContactMessageCreated($message);
        Mail::to($request->email)->send($mailable);

        session()->flash('notification.message', 'Nous vous répondrons dans les plus bref délais !');
        session()->flash('notification.type', 'success');

        return redirect()->route('contact.create');
    }
}
