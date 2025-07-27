<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walisantri extends Model
{
    use HasFactory;
    protected $table="walisantri";

    protected $guarded = [];
    
    public function santri()  {
        return $this->belongsTo(Santri::class,'Student_id');
    }
}