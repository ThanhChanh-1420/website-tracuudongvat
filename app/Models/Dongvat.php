<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Dongvat extends Model
{
    use HasApiTokens,HasFactory, Notifiable;
    protected $table = 'dongvats';
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
            'tenkhoahoc',
            'tentiengviet',
            'tendiaphuong',
            'gioi',
            'nganh',
            'lop',
            'bo',
            'ho',
            'hinhthai',
            'sinhthai',
            'giatri',
            'iucn',
            'sachdo',
            'nghidinh',
            'cities',
            'phanbo',
            'tinhtrang',
            'sinhcanh',
            'diadiem',
            'ngaythuthap',
            'nguoithuthap',
            'created_at',
            'updated_at',
            'duongdan',
            'nguoitao'
    ];
}
