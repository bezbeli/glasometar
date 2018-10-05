<div class="card border-warning bg-warning">
    <div class="card-header">
        <strong><a href="/high-risk-mediji">High risk</a></strong><span class="float-right"> <a data-toggle="collapse" href="#high-risk" aria-expanded="false" aria-controls="high-risk"><i class="fa fa-info-circle"></i></a></span>
        <br>
        Lista medija koji objavljuju izvještaje upitne istinitosti
    </div>
    <div id="high-risk" class="collapse">
        <div class="card-body bg-warning">
            <small>{!! option('high_risk_explanation') !!}</small>
        </div>
    </div>
    <ul class="list-group scroll-y">
        @foreach ($highRiskMedias as $media)
            <li class="list-group-item">
                <strong><a href="{{ route('show.media', $media->slug) }}">{{ $media->title }}</a></strong> <span class="float-right"> <span title="Broj članaka" class="badge badge-dark">{{ $media->highRiskArticles->count() }}</span></span>
                <ul>
                    @foreach ( $media->highRiskArticles as $article )
                    <li class="small">{{ $article->original_publish_date }} | <a href="{!! route('show.article', $article->slug) !!}">{{ $article->title }}</a></li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
