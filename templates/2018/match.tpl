{extends file='main.tpl'}

{block name=additionalHead}
<meta property="og:site_description" content="bla bla bla" />
{/block}

{block name=lastHead}
<title>{$text['title']}</title>
{/block}

{block name=body}

<!-- header -->
{include "match-header.tpl"}
<!-- /header -->

<!-- results -->
<div class="container results px-3">
    <!-- winners -->
    {include "match-winners.tpl"}
    <!-- /winners -->
    <!-- tabs -->
    {include "match-tabs.tpl"}
    <!-- /tabs -->
    <!-- sharer -->
    {include "match-sharer.tpl"}
    <!-- /sharer -->
</div>
<!-- /results -->
{/block}

{block name=outsideBody}
<!-- support -->
{include "match-comparison.tpl"}
{include "match-save.tpl"}
<!-- /support -->
{/block}

{block name=footer}
<!-- Footer -->
{include "footer.tpl"}
<!-- /Footer -->
{/block}

{block name=js}
<!-- js -->
{include "match-js.tpl"}
<!-- /js -->
{/block}
