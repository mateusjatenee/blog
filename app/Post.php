<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug',
    ];
    protected $dates = ['date'];
    protected $fillable = ['title', 'content', 'date', 'image_url'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
