<div class="card border-danger bg-danger">
    <div class="card-header">
        <strong><a href="/red-flag-mediji">Red flag</a></strong><span class="float-right"><a data-toggle="collapse" href="#red-flag" aria-expanded="false" aria-controls="red-flag"><i class="fa fa-info-circle"></i></a></span>
        <br>
        Lista medija koji objavljuju lažne vijesti
    </div>
    <div id="red-flag" class="collapse">
        <div class="card-body bg-danger">
            <small>{!! option('red_flag_explanation') !!}</small>
        </div>
    </div>
    <ul class="list-group scroll-y">
        @foreach ($redFlagMedias as $media)
            @include('parts.mediaListItem')
        @endforeach
    </ul>
</div>
