<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CakeSub extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'cake_subs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
    ];



    public function cake()
    {
        return $this->belongsTo(Cake::class);
    }
}
