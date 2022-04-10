<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Hasilrekap extends Model
{
    use HasFactory;
    protected $table = 'hasil_rekap';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function data()
    {
        return $this->belongsTo(Detail::class);
    }
}
