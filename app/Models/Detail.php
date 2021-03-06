<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Login;
use App\Models\Hasilrekap;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'detail';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function login()
    {
        return $this->belongsTo(Login::class);
    }

    public function hasilrekap()
    {
        return $this->hasMany(Hasilrekap::class);
    }
}
