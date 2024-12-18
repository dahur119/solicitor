<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\UserContactConfirmation;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'message' => 'required|string',
              
            ]);

            $contact = new Contact();
            $contact->name = $validated['name'];
            $contact->email = $validated['email'];
            $contact->phone = $validated['phone'];
            $contact->message = $validated['message'];  
            $contact->save();


            
            Mail::to(config('mail.admin_address'))->queue(new ContactNotification(
                $validated['name'],
                $validated['email'],
                $validated['message']
            ));

            // Queue user confirmation
            Mail::to($validated['email'])->queue(new UserContactConfirmation(
                $validated['name'],
                $validated['email'],
                $validated['message']
            ));


            // Send email
           

            return response()->json([
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ]);

        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while sending your message.'
            ], 500);

        }
        

        
        

       
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
