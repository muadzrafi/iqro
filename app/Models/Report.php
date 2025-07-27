<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function santri()  {
        return $this->belongsTo(Santri::class,'Student_id');

    }

    public function halaqoh()  {
        return $this->belongsTo(Halaqoh::class,'Teacher_id');
    }
}



