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

        $data = $request->validate(['email' => ['required', 'email']]);


        $cake = Cake::create([
            'name' => $request->name,
            'weight' => $request->weight,
            'price' => $request->price,
            'quantity' => $request->quantity,

        ]);

        $cake->cakeSubs()->create($data);


        // dd($cake->cakeSubs);
        $cake->cakeSubs()->create([
            'email' => $request->email,
        ]);

        $cake->cakeSubs->each(function ($cakeSub) use ($cake) {
            Notification::route('mail', $cakeSub->email)
                ->notify(new CakeAnnouncement($cake));
        });

        //notification massive at the same time


        // Notification::route('mail', $cake->email)
        //     ->notify(new CakeAnnouncement($cake));

        // $emails = Cake::all()->pluck('name', 'email')->toArray();
        // Notification::route('mail', $emails)->notify(new CakeAnnouncement($cake));

        // Cake::chunk(10, function ($cakes) use ($cake) {

        //     $rec = $cakes->pluck('name', 'email');

        //     Notification::route('mail', $rec)->notify(new CakeAnnouncement($cake));
        // });


        return response()->json($cake);
    }
}
