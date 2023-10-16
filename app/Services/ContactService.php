<?php

namespace App\Services;
use App\Mail\SendMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    public function getContacts($request)
    {
        $email = $request['email'] ?? '';
        $contacts = Contact::where('email', 'like', "%$email%")->paginate(10);
        $contacts->appends(['email' => $email]);
        return $contacts;
    }

    public function getContactById($id)
    {
        return Contact::find($id);
    }

    public function sendEmail($request, $id)
    {
        $name = $request['email'];
        $details = [
            'subject' => $request['subject'],
            'content' => $request['content'],
        ];
        Mail::to($name)->send(new SendMail($details));
        $contact = Contact::find($id);
        $contact->status = '1';
        $contact->save();
        return true;
    }
}