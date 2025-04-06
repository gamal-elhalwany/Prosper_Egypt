<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\service;
use Carbon\Laravel\ServiceProvider;

class dashboradController extends Controller
{
    /**
     * Display a listing of the resource.
     * Display all parteners into the mini-banner.
     */
    public function index()
    {
        $user = auth()->user();
        if ($user) {
            $partners = Partner::all();
            $groups = Group::all();
            $services = Service::all();
            return view('dashboard/dashboard', compact('partners', 'groups', 'services'));
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
     * Store new partners.
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
     * Remove a specific parteners.
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

    /**
     * Store new lines of business (group).
     */
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
            return redirect()->back()->with('success', 'A new business Stored successfully');
        }
        return redirect()->route('login');
    }

    /**
     * Remove a specific line of business.
     */
    public function deleteGroup(Group $group) 
    {
        $user = auth()->user();
        if ($user) {
            $group->delete();
            return redirect()->back()->with('success', 'The Group Deleted Successfully.');
        }
        return redirect()->route('login');
    }

    //***************************************************************************//
    //********************* Start Services Section Coding **********************//

    public function store_service(Request $request)
    {
        $request->validate([
            'number' => 'required|string|max:2',
            'title' => 'required|string|min:10|max:255',
            'content' => 'required|string|min:50'
        ]);

        $user = auth()->user();
        if ($user) {
            Service::create($request->all());
            return redirect()->back()->with('success', 'The Services has been Stored Successfully.');
        }
        return redirect()->route('login');
    }

    public function delete_service(Service $service)
    {
        $user = auth()->user();
        if ($user) {
            $service->delete();
            return redirect()->back()->with('success', 'The Service Deleted Successfully.');
        }
        return redirect()->route('login');
    }
}
