<?php

namespace App;

use Carbon\Carbon;

class Posts extends Model
{
    //post->comment;
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        //
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) 
        {
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) 
        {
            $query->whereYear('created_at',$year);
        }
        
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at)year, monthname(created_at)month, count(*)published')
        ->groupBy('year', 'month')
        ->get()
        ->toArray();
    }

}
