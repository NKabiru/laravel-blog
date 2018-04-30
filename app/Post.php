<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

//    $post->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComments($body)
    {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            if ($month = $filters['month']){
                $query->whereMonth('created_at', Carbon::parse($month)->month);
            }
        }

        if (isset($filters['year'])) {
            if($year = $filters['year']) {
                $query->whereYear('created_at', $year);
            }
        }

    }

    public static function archives()
    {
        return static::selectRaw('YEAR(created_at) as year, MONTHNAME(created_at) as month, COUNT(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
