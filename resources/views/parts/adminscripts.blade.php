<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('#lfm').filemanager('image');

    CKEDITOR.replace( 'content',{
        customConfig: '/ckeditor_config.js',
        stylesSet : 'articles:/ckeditor_styles.js'
    });

$(document).ready(function() {

    $('.articles-select').select2();

    $('.tags-select').select2({
        tags: true
    });

    $('.suggestions-select').select2({
        allowClear: true,
        placeholder: "Izaberi prijedlog",
    });

});
</script>
