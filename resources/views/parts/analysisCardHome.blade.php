@php
    $articleCategories = [];
    foreach ($analysis->articles as $article) {
        foreach ($article->categoriesOrderedByWeight->pluck('title', 'weight') as $weight => $category) {
            $articleCategories[$weight] = $category;
        }
    }
    krsort($articleCategories);
@endphp

<div class="card w-100">
    <div class="ocjena {!! str_slug(array_first($articleCategories)) !!}">
        @if ($analysis->articlesCategories()->isNotEmpty())
        <span> {!! array_first($articleCategories) !!} </span>
        @else
        <span class="text-light">Analiza</span>
        @endif
    </div>

    <a href="{{ route('show.analysis', $analysis->slug) }}">
        @if (in_array('Razabiranje', $analysis->categories()->pluck('title')->toArray()) )
            <div class="ocjena-bl">
                <span class="text-light">Razabiranje</span>
            </div>
        @endif
        <div class="ratio ratio-3x2">
            <div class="image lazy" style="display: block; background-image: url('{!! asset($analysis->thumbnail) !!}');"></div>
        </div>
    </a>

    <div class="card-body p-3">
        <h6><a href="{{ route('show.analysis', $analysis->slug) }}">{{ $analysis->title }}</a></h6>
        <p><small>{!! limitString($analysis->lead, 75, '...') !!}</small></p>
        @if ($analysis->categories->isNotEmpty())
            <small><span><i class="fa fa-tag"></i>{!! implode('</span> <span><i class="fa fa-tag"></i> ', $analysis->categories->pluck('title')->toArray()) !!}</span></small>
        @endif
        @if ($articleCategories)
            @foreach ($articleCategories as $category )
            <small> <span><i class="fa fa-tag"></i> {{ $category }} </small>
            @endforeach
        @endif
        </div>
        <div class="card-footer clearfix">
            <small class="float-left"><i class="fa fa-calendar"></i> {{ $analysis->created_at->format('d.m.Y') }}</small>
            <small class="float-right">.<i class="fa fa-refresh" aria-hidden="true"></i> {{ $analysis->updated_at->diffForHumans() }}</small>
        </div>
    </div>
