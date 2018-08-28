{extends file='main.tpl'}

{block name=additionalHead}
<link href="../css/style.css" rel="stylesheet">
{/block}

{block name=lastHead}
<title>{$text['title']}</title>
{/block}

{block name=body}
<!-- header -->
{include 'header.tpl'}
<!-- /header -->
<div class="d-flex flex-fill align-items-center justify-content-center">
    <div class="justify-content-center text-center">
        <div>
            <h2>{$text['contact']}</h2>
            <p>
                <strong>Glasometar.ba</strong> pripremili i vode <strong>U.G. Zašto ne </strong> <a href="http://zastone.ba">U.G. Zašto ne</a> <br>
                <a href="mailto:info@zastone.ba">info@zastone.ba</a>
            </p>
        </div>
    </div>
</div>
{/block}

{block name=footer}
<!-- Footer -->
{include "footer.tpl"}
<!-- /Footer -->
{/block}
