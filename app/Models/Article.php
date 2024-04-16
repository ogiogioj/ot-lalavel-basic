<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['body','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany{

        return $this->hasMany(Comment::class);

    }

    public function recent_comments()
    {
        // 최근 댓글이 하루 이내에 작성된 댓글인지 확인
        return $this->comments()->where('created_at', '>', Carbon::now()->subDay())->exists();
    }
}
