<nav class="navbar navbar-dark bg-dark d-flex">
    <a class="navbar-brand" href="/" id="header-home"><img src="/2018/images/glasometar_logo.svg" alt="{$text['calc']}" /></a>

    <div class="ml-auto d-flex">
        {if isset($show_download_link)}
        <div class="download"><a class="nav-link" href="#" data-toggle="modal" data-target="#modal-save-results" id="header-save"><i class="fa fa-download"></i> <span class="d-none d-md-inline">{$text['match_save']}</span></a></div>
        {/if}
        <div><a class="nav-link" href="/info" id="header-info"><i class="fa fa-info-circle"></i> <span class="d-none d-md-inline">{$text['info']}</a></div>
    </div>
</nav>
<div class="progress mb-3">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
