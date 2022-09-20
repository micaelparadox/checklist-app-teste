<?php

namespace App\Models;

use App\Notifications\CakeAnnouncement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cake extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'weight',
        'price',
        'quantity',
        'email',
    ];

    public function emailNotificationRelation()
    {
        return $this->hasMany(CakeAnnouncement::class);
    }

    public function belongsToCake()
    {
        return $this->belongsTo(CakeAnnouncement::class);
    }
}
