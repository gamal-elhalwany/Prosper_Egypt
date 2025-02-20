<?php

namespace App\Http\Controllers\Front;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.contact-us");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|numeric|digits:11',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string|max:5000',
        ]);

        Config::set('mail.mailers.smtp.username', env('MAIL_USERNAME'));
        Config::set('mail.mailers.smtp.password', env('MAIL_PASSWORD'));

        $fromEmail = env('MAIL_FROM_ADDRESS');
        $fromName = env('MAIL_FROM_NAME');

        Mail::to('gamalelhalwany3@gmail.com')->send(new ContactMail($request->all(), $fromEmail, $fromName));

        return redirect()->to(url()->previous() . '#careers-form')->with('success', 'Your application has been sent successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
