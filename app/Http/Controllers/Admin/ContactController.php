<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    public function index(Request $request)
    {
        $contacts = $this->contactService->getContacts($request->all());
        $status = config('const.contacts.status');
        return view('admin.contacts.index', [
            'contacts' => $contacts,
            'status' => $status
        ]);
    }

    public function content($id)
    {
        $contact = $this->contactService->getContactById($id);
        return view('admin.contacts.content', [
            'contact' => $contact,
        ]);
    }
    public function feedback($id)
    {
        $contact = $this->contactService->getContactById($id);
        return view('admin.contacts.feedback', [
            'contact' => $contact,
        ]);
    }

    public function sendEmail(ContactRequest $request, $id)
    {
        $mail = $this->contactService->sendEmail($request->all(), $id);
        if ($mail) {
            return redirect()->route('admin.contacts.index')->with('success', 'Gửi mail thành công!!!');
        }
        return back()->with('error', 'Gửi mail thất bại!!!');
    }
}
