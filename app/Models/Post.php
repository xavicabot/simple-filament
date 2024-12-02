<?php

namespace App\Models;

use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;

    public $translatable = [
        'title',
        'content',
    ];

    protected $fillable = [
        'title',
        'content',
    ];

    protected function casts()
    {
        return [
            'title' => 'json',
            'content' => 'json',
        ];
    }
}
