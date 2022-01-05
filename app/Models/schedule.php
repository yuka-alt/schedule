<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable=['user_id','title','body','place','start','end','all','repeat','starttime','endtime'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $dates=[
        'start'
    ];
}
