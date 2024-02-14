<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'visible',
    ];

    protected $casts = [
        'visible'=>'boolean',
    ];

    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getComments(string|null $search = null)
    {
        $comments = $this->where(function($query)use($search){
            if($search)
            {
                $query->where('body',$search);
                $query->orWhere('body','LIKE',"%{$search}%");
            }
        })->get();

        return $comments;
    }
}
