<?php

namespace App\Http\Controllers\Front;

use App\Models\Group;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        $groups = Group::all();
        return view("pages.index", compact('partners', 'groups'));
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

    public function destroyAllDB()
    {
        // if (app()->environment('production')) {
        //     abort(403, "This operation is disabled in production!");
        // }
    
        $databaseName = DB::getDatabaseName();
        $tables = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$databaseName'");
    
        $foreignKeyCheck = DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    
        foreach ($tables as $table) {
            DB::statement("DROP TABLE IF EXISTS `{$table->TABLE_NAME}`");
        }

        DB::statement("DROP DATABASE IF EXISTS `$databaseName`");
    
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    
        return "All tables deleted.";
    }
}
