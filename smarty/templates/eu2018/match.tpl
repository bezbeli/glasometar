{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="../../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../../css/style.css" rel="stylesheet">
    {/block}
    {block name=lastHead}
      <title>{$text['title']}</title>
    {/block}
    
    {block name=body}
      <!-- header -->
      {include "match-header.tpl"}
      <!-- /header -->
      
      <!-- results -->
      <div class="container results">
        <!-- winners -->
          {include "match-winners.tpl"}
        <!-- /winners -->
        <!-- sharer -->
          {include "match-sharer.tpl"}
        <!-- /sharer -->
        <!-- fb -->
          {assign "fb_pos" "top"}
          {include "match-fb.tpl"}
        <!-- /fb -->
        <!-- tabs -->
          {include "match-tabs.tpl"}
        <!-- /tabs -->
          {assign "fb_pos" "bottom"}
          {include "match-fb.tpl"}
          

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
     {include "page-footer.tpl"}
     <!-- /Footer -->
   {/block}
   
   {block name=js}
     <!-- js -->
     {include "match-js.tpl"}
     <!-- /js -->
   {/block}
