<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];

    public function scopeFilter($query)
    {
            if(request('search')){
                $query->where('id','like','%'.request('search').'%')
    ->orWhere('nama','like','%'.request('search').'%');
            }
    }
}
