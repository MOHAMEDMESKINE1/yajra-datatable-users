<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory ,Searchable;

    public $fillable = ['title','content'];
    // public $translatable = ['title','content'];

    
    public function toSearchableArray()
    {
        return [
            "id"=> $this->id,
            "title"=>$this->title,
            "content"=>$this->content
        ];
    }
}
