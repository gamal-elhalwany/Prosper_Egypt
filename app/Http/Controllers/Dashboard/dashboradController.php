<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Support\Facades\Storage;

class dashboradController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        if ($user) {
            $partners = Partner::all();
            return view('dashboard/dashboard', compact('partners'));
        }
        return redirect()->route('login');
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
     */
    public function storeBanner(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'logo' => 'required|image:jpeg,jpg,png',
        ]);

        $user = auth()->user();
        if ($user) {
            $file = $request->file('logo');
            $path = $file->store('images/banner', 'public');

            Partner::create([
                'name' => $request->input('name'),
                'logo' => $path,
            ]);
            return redirect()->back()->with('success', 'The Logo been added successfully.');
        }
        return redirect()->route('login');
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
    public function updateBanner(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = auth()->user();
        if ($user) {
            $partner = Partner::findOrFail($id);

            $filePath = public_path('storage/' . $partner->logo);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $partner->delete();
            return redirect()->back()->with('success', 'Partner Logo Deleted Successfully.');
        }
        return redirect()->route('login');
    }


    //***************************************************************************//
    //**************** Start Lines of Business Coding (Group) *******************//

    public function store_business(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:10|max:255',
            'description' => 'required|string',
            'url' => 'nullable|string',
            'group_logo' => 'required|image|mimes:png,jpg,webp',
        ]);

        $user = auth()->user();
        if ($user) {
            $file = $request->file('group_logo');
            $path = $file->store('images/groups', 'public');
            
            Group::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'url' => $request->input('url'),
                'group_logo' => $path,
            ]);
            return redirect()->back()->with('success', 'A new business add successfully');
        }
        return redirect()->route('login');
    }
}
