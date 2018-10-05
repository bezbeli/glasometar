<li class="list-group-item">
    <strong><a href="{{ route('show.media', $media->slug) }}">{{ $media->title }}</a></strong> <span class="float-right"> <span title="Broj članaka" class="badge badge-dark">{{ $media->redFlagArticles->count() }}</span></span>
    <ul>
        @foreach ( $media->redFlagArticles as $article )
        <li class="small">{{ $article->original_publish_date }} | <a href="{!! route('show.article', $article->slug) !!}">{{ $article->title }}</a></li>
        @endforeach
    </ul>
</li>
