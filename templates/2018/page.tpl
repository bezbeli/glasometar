{extends file='main.tpl'}
{block name=additionalHead}
{/block}

    {block name=lastHead}
      <title>{$text['title']}</title>
    {/block}

    {block name=body}
      <!-- header -->
      {include "header.tpl"}
      <!-- /header -->

      <!-- carousel -->
      {include "page-carousel.tpl"}
      <!-- /carousel -->
   {/block}


   {block name=footer}
     <!-- Footer -->
     {include "footer.tpl"}
     <!-- /Footer -->
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

    <!-- js -->
    {include "page-js.tpl"}
    <!-- /js -->

   {/block}
