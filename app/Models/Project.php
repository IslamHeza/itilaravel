<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'rate',
        'budget',
        'final_price',
        'location',
        'status',
        'owner_id',
        'developer_id',
        'category_id',
        'img'

    ];
    public function client(){
        return $this->belongsTo(User::class , 'owner_id');
    }

    public function developer(){
        return $this->belongsTo(User::class , 'developer_id');
    }

    public function skills(){
        return $this->belongsToMany(Skill::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
