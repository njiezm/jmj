<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // On va créer cette classe Mailable à l'étape suivante

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validation des données (on reprend vos règles)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // 2. Envoi de l'e-mail
        // On envoie à l'adresse mentionnée sur votre page
        Mail::to('lajmjcreation97270@gmail.com')->send(new ContactFormMail($validated));
        Mail::to('njiezamon10@gmail.com')->send(new ContactFormMail($validated));
        Mail::to('contact@la-jmj.njiezm.fr')->send(new ContactFormMail($validated));
        // 3. Redirection avec message de succès
        return redirect()->route('contact.form')->with('success', 'Merci pour votre message ! La vibe a bien été reçue.');
    }
}