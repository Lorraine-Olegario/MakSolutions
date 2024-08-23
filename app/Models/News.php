<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'news';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function boot(): void
    {
        parent::boot();
        static::deleting(static function($obj) {
            Storage::disk('delete')->delete($obj->cover_image);
        });

        static::updating(static function ($news) {
            if ($news->isDirty('cover_image') && $news->getOriginal('cover_image')) {
                $oldImage = $news->getOriginal('cover_image');
                if ($oldImage && Storage::exists('public/news/' . $oldImage)) {
                    Storage::delete('public/news/' . $oldImage);
                }
            }
        });

        static::saving(static function ($news) {
            if (!$news->slug) {
                $news->slug = Str::slug($news->title);
            }
        });
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
