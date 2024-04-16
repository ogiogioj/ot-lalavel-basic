<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'user_id', 'article_id','created_at'];

    public function user() : BelongsTo
    {

        return $this->belongsTo(User::class);
    }
}
