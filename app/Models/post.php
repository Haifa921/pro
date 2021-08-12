<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id', 'title', 'content', 'photo', 'slug'
    ];
    protected $appends = ['author_name'];
    protected $with = ['user'];
    
    public function getAuthorNameAttribute()
    {
        return $this->user()->name;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getFeaturedAttribute($photo)
    {
        return asset($photo);
    }
    protected $casts = [
        'likes' => 'integer',
        'approved' => 'boolean'
    ];
}
