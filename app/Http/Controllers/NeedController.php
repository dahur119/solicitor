<?php

namespace App\Http\Controllers;
use App\Mail\NeedNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\Need;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('legal');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(Request $request)
    {
        // 1. Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|array',
            'category.*' => 'in:Corporate and Commercial Law,Expatriate/Immigration Matters,Intellectual Property Law,Media, Entertainment And Technology,Real Estate And Infrastructure,Tax Law,Sport Law',
            'message' => 'required|string',
            'email' => 'required|email',
        ]);

        // Ensure category is an array (if it's not, convert it to an array)
        if (!is_array($validated['category'])) {
            $validated['category'] = explode(',', $validated['category']);
        }

        // 2. Store the data in the database
        $need = new Need();
        $need->name = $validated['name'];
        $need->email = $validated['email'];
        $need->description = $validated['description'];
        $need->category = json_encode($validated['category']);  // Store as JSON string
        $need->message = $validated['message'];
        $need->save();

        // 3. Send a notification to the admin
        $receiverEmail = 'admin@example.com';  // Replace with the actual admin email
        Mail::to($receiverEmail)->send(new NeedNotification(
            $validated['name'], 
            $validated['description'], 
            $validated['category'],  // Pass the array as is
            $validated['message']
        ));

        // 4. Redirect with a success message
        return redirect()->route('needs.index') 
            ->with('success', 'Need created successfully.');
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
