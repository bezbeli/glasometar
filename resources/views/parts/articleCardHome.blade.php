<div class="{{ $article->is_fake ? 'border-danger ' : 'border-dark ' }}card w-100">
    <div class="card-header small p-2 text-light {{ $article->is_fake ? 'bg-danger ' : 'bg-dark' }}">
        <span class="float-left">{!! $article->is_fake ? '<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Lažna vijest' : '<i class="fa fa-chevron-right"></i> ' . $article->categories->pluck('title')->first() !!}</span>
        <span class="float-right">Izvor: {{ $article->media->title }}</span>
    </div>
    <div class="card-body p-3">
        <h6><a href="{{ route('show.article', $article->slug) }}">{{ $article->title }}</a></h6>
        <p><small>{{ limitString($article->lead, 150, '...') }}</small></p>
        @if ($article->categories->isNotEmpty())
        <small>
            @foreach ($article->categories as $category)
            <span><i class="fa fa-tag"></i> {{ $category->title }}
            @endforeach
        </small>
        @endif
    </div>
    <div class="card-footer clearfix">
        <small class="float-left"><i class="fa fa-calendar"></i> {!! $article->formatedOriginalPublishDate() !!}</small>
        <small class="float-right"><i class="fa fa-refresh" aria-hidden="true"></i> {{ $article->updated_at->diffForHumans() }}</small>
    </div>
</div>
