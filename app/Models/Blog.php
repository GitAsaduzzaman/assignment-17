<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    public $incrementing = false;  // Disable auto-incrementing ID
    protected $keyType = 'string'; // Set ID type to string (UUID)

    protected $fillable = [
        'id',      // Ensure the ID is fillable for UUIDs
        'title',
        'author',
        'summary',
        'category',
        'content',
        'tags',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($blog) {
            if (empty($blog->id)) { // Ensure we only set it if it's empty
                $blog->id = (string) Str::uuid();
            }
        });
    }
}
