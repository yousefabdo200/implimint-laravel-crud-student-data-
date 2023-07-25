<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table="student";
    protected $fillable=['s_name','s_number','p_number','attend','year','time'];
    protected $hidden=['updated_at','created_at'];
    public $timestamps = false;
    protected $primaryKey = ['s_name','s_number'];
    public $incrementing = false;
    protected $guarded = [];
    //protected $primaryKey = 's_number';
}
