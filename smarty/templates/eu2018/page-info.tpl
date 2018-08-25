{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../css/carousel.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
    {/block}
    
    {block name=lastHead}
      <title>{$text['title']}</title>
    {/block}

    {block name=body}
    
    <!-- header -->
    {include 'page-header.tpl'}
    <!-- /header -->
    
    {include 'page-content.tpl'}
      
   {/block}
   
   
   {block name=footer}
     <!-- Footer -->
     {include "page-footer.tpl"}
     <!-- /Footer -->
   {/block}
   