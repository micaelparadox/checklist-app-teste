<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cake;
use App\Notifications\CakeAnnouncement;
use Illuminate\Http\Request;

class CakeHermesFeetController extends Controller
{
    public function store(Request $request)
    {
        $cakeStore = Cake::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $cake = Cake::first();
        $cake->notify(new CakeAnnouncement($cake));


        return response()->json($cakeStore);
    }
}
