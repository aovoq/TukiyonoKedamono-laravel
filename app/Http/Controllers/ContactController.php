<?php

namespace App\Http\Controllers;

use App\Mail\ContactSendmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function index()
   {
      return view('contact.index');
   }

   public function confirm(Request $request)
   {
      $request->validate([
         'name' => 'required',
         'name_kana' => 'required',
         'email' => 'required|email',
         'tel' => 'required',
         'title' => 'required',
         'body' => 'required',
      ]);

      $inputs = $request->all();

      return view('contact.confirm', [
         'inputs' => $inputs,
      ]);
   }

   public function send(Request $request)
   {
      $request->validate([
         'name' => 'required',
         'name_kana' => 'required',
         'email' => 'required|email',
         'tel' => 'required',
         'title' => 'required',
         'body' => 'required',
      ]);

      $action = $request->input('action');

      $inputs = $request->except('action');

      if ($action !== 'submit') {
         return redirect()
            ->route('contact.index')
            ->withInput($inputs);
      } else {

         $contact = new Contact();
         $contact->fill([
            'name' => $inputs['name'],
            'name_kana' => $inputs['name_kana'],
            'company' => $inputs['company'],
            'email' => $inputs['email'],
            'tel' => $inputs['tel'],
            'title' => $inputs['title'],
            'body' => $inputs['body'],
            'manager' => '',
         ]);
         $contact->save();

         Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
         $request->session()->regenerateToken();
         return view('contact.thanks');
      }
   }
}
