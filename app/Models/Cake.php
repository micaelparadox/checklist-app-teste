<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cake extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'cakes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'weight',
        'price',
        'quantity',

    ];

    public function cakeSubs()
    {
        return $this->hasMany(CakeSub::class);
    }
}
