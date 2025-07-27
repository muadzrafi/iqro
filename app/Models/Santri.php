<?php

namespace App\Models;

use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Santri extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'walisantri_id',
        'tanggal_lahir',
        'nis',
        'kelas',
        'status',
        'photo',
        'jenis_kelamin',
        ];

    protected $guarded = [];

    public function walisantri()
    {
        return $this->belongsTo(
            Walisantri::class,
            'walisantri_id'
        );
    }
    public function table(Table $table): Table
    {
        return $table
            ->filters([
                // ...
            ]);
    }

    public function report()
    {
        return $this->hasMany(Report::class, 'Student_id')->orderBy('id', 'desc');
    }
    
    public function store()
    {
        $request->file('image')->store('images', 'public');
    }
}