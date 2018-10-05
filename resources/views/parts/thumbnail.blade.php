<div class="card">
    <div class="card-header">
        Thumbnail
    </div>
    <div class="card-body">
        <div class="input-group">
            <a id="lfm" data-input="thumbnail" data-preview="holder">
                <img id="holder" class="img-fluid"
                src="{!! $thumbnail ? asset( $thumbnail ) : asset( 'images/noimage.png' ) !!}">
            </a>
            <input id="thumbnail" name="thumbnail" class="form-control d-none" type="text" name="filepath">
        </div>
    </div>
</div>
