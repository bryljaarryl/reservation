<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ComplainCount;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use Session;

class HomepageController extends Controller {
    
    public function index()
    {
        $images = [
            'p1.jpg', 'p2.jpg', 'p3.jpg', 'p4.jpg', 'p5.jpg',
            'p6.jpg', 'p7.jpg', 'p8.jpg', 'p9.jpg', 'p10.jpg',
        ];

        // Return the homepage view, passing the images array
        return view('pages.homepage.index', compact('images'));
    }

    public function about()
    {
        return view('pages.homepage.about');
    }

    public function gallery()
    {
        return view('pages.homepage.gallery');
    }

    public function rooms()
    {
        return view('pages.rooms.rooms');
    }

    public function booking()
    {
        return view('pages.homepage.create-booking');
    }

    public function seeMoreImages()
    {
        // All images for the "See More" page
        $moreImages = [
            'p13.jpeg', 'p14.jpeg', 'p15.jpeg', 'p16.jpeg', 'p17.jpeg',
            'p18.jpeg', 'p19.jpeg', 'p20.jpeg', 'p21.jpeg', 'p22.jpeg',
            'p23.jpeg', 'p24.jpeg',
        ];

        // Return the extended gallery view with all images
        return view('pages.homepage.gallery-ext', compact('moreImages'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        // Save to database or handle as required
        Contact::create($validated);

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}