<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cake;
use App\Notifications\CakeAnnouncement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CakeHermesFeetController extends Controller
{
    public function store(Request $request)
    {
        $cakeStore = Cake::create([
            'name' => $request->name,
            'email' => $request->email,
            'weight' => $request->weight,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        $emails = Cake::all()->pluck('email')->toArray();

        Notification::route('mail', $emails)->notify(new CakeAnnouncement($cakeStore));

        return response()->json($cakeStore);
    }
}
