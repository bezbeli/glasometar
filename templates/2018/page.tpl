{extends file='main.tpl'}
{block name=additionalHead}
{/block}

    {block name=lastHead}
      <title>{$text['title']}</title>
    {/block}

    {block name=body}
      {include "header.tpl"}
      {include "page-carousel.tpl"}
   {/block}

   {block name=footer}
     {include "footer.tpl"}
   {/block}

   {block name=js}
     <script>
       var user = $.parseJSON('{$user}');
     </script>

    <script type="text/javascript" src="../js/slick.min.js"></script>

    <script>
        $(".slider").slick({
            dots: false,
            speed: 200,
            infinite: false,
            adaptiveHeight: true,
            arrows: true
        });
    </script>

    <script src="../js/page.js"></script>

    {include "page-js.tpl"}

   {/block}
