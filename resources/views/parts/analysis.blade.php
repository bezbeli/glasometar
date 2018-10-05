<h2>{{ $analysis->title }}</h2>
@if ($categories->isNotEmpty())
    <p><strong>Ova analiza je označena kao:</strong>
        <span class="badge badge-secondary">
            <i class="fa fa-tag"></i>
            {!! implode('</span> <span class="badge badge-secondary"><i class="fa fa-tag"></i> ', $categories->toArray()) !!}
        </span>
    </p>
@endif

<p class="lead">{{ $analysis->lead }}</p>

<div class="ratio ratio-3x2 mb-4 bg-light">
    <div class="image lazy" style="display: block; background-image: url('{!! asset($analysis->thumbnail) !!}');"></div>
</div>

<div class="article-content">
    {!! $analysis->content !!}
</div>

@if ($analysis->articles->isNotEmpty())

<div class="card">
    <div class="card-body p-3 small">
        <strong>Raskrinkali smo</strong>
        <br>
        @foreach ($analysis->articles as $article)
            <i class="fa fa-newspaper-o" aria-hidden="true"></i> <strong>{{ $article->media->title }}</strong>
            @foreach ($article->categoriesOrderedByWeight->pluck('title')->toArray() as $category)
                {{$category}};
            @endforeach
        @endforeach
    </div>
    @if ($analysis->articles->isNotEmpty())
        <div class="card-footer">
            <a data-toggle="collapse" data-target="#original" aria-expanded="false" aria-controls="original">
            <span class="float-left">Pogledajte originalni članak</span>
            <span class="float-right"><i class="fa fa-chevron-circle-down"></i></span>
            </a>
        </div>
        <div id="original" class="collapse">
            <ul class="list-group list-group-flush">
                @foreach ($analysis->articles as $article)
                <li class="list-group-item text-muted clearfix">
                    <small>Objavljeno: {{ $article->original_publish_date }}</small> <br>
                    <a href="{{ route('show.article', $article->slug) }}">{{ $article->title }}</a> <br>
                    <small class="float-left">
                    @foreach ($article->categories as $category)
                    <i class="fa fa-tag"></i> {{ $category->title }}
                    @endforeach
                    </small>
                    <small class="float-right">Izvor: <a href="{!! route('show.media', $article->media->slug)!!}">{{ $article->media->title }}</a></small>
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
@endif

@if ($suggestions->isNotEmpty())
    <div class="alert alert-warning">
        Analizirano na osnovu sugestije:
        @foreach ($suggestions as $suggestion)
            <br>
            <a href="{{ route('show.suggestion', $suggestion->id) }}">{{ $suggestion->title }}</a>
        @endforeach
    </div>
@endif

@if ($analysis->tags->isNotEmpty())
<div class="card">
    <div class="card-body">
        <small>Tagovano:</small>
        @foreach ($analysis->tags as $tag)
            <span class="small badge badge-secondary"><i class="fa fa-tag"></i> {{ $tag->name }}</span>
        @endforeach
    </div>
</div>
@endif

<div class="card">
    <div class="card-body">
        <small>
        <span class="float-left"><strong>{!! $analysis->user->gender == 'm' ? 'Autor' : 'Autorica' !!}:</strong> <a href="{{ route('show.authors.analyses', $analysis->user->slug )}}">{{ $analysis->user->name }}</a></span>
        <span class="float-right">Objavljeno: <strong>{{ $analysis->created_at->format('d. m. Y') }}</strong> | Zadnji put osvježeno: {{ $analysis->updated_at->diffForHumans() }}</span>
        </small>
    </div>
</div>
