<div class="background-white border rounded mb-3 p-3">
    <p> {{ $article->body }}</p>
    <p>
    {{-- profileController --}}
        <a href="{{ route('profile', ['user' => $article->user->username]) }}">
            {{ $article->user->name }}</a>
    </p>

    <p class="text-xs text-gray-500">
        {{-- articleController --}}
        <a href="{{ route('articles.show', ['article' => $article->id]) }}">
            {{ $article->created_at->diffForHumans() }}
            <span>댓글{{ $article->comments_count }}</span>
            @if ($article->recent_comments)
                (new)
            @endif
            </span>
        </a>
    </p>
    <x-article-button-group :article=$article />
</div>
