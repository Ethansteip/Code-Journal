<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'hours',
        'minutes',
        'title', 
        'notes', 
        'project', 
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getHoursAttribute($value)
    {
        if ($value < 10){
            return str_pad($value, 2, "0", STR_PAD_LEFT);
          }else {
            return $value;
          }
    }

    public function getMinutesAttribute($value)
    {
        if ($value < 10){
            return str_pad($value, 2, "0", STR_PAD_LEFT);
          }else {
            return $value;
          }
    }
}
