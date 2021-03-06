<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Post extends Model implements Searchable
{
    use HasFactory, LogsActivity;

    protected $table = 'posts';

    protected $with = ['user', 'categories'];

    protected $fillable = [
        'name',
        'cover',
        'user_id',
        'description',
        'title',
        'slug',
        'headline'
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Posts';
    //protected static $ignoreChangedAttributes = ['text'];
    protected static $logAttributes = [
        'name',
        'cover',
        'user_id',
        'description',
        'title',
        'slug',
        'headline'
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'author', 'id');

        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'post_categories', 'post', 'category');
    }

    public function preview()
    {
        return Str::words(strip_tags($this->description), 8, '...');
    }

    public function getCoverAttribute($value)
    {
        return Storage::url($value);
    }

    public function setSlugAttribute($value)
    {
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->attributes['title']);
        } else {
            $this->attributes['slug'] = $value;
        }
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('user.dashboard', $this->slug);
        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public $searchableType = 'Artigos';
}
