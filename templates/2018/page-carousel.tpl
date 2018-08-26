<div class="container">
  <div class="row">
    <div class="col">
        <form action="./match/" method="get" id="calc">
        <div class="slider">
          {$key=1} {foreach $questions as $question}
            {include "page-page.tpl"}
          {$key=$key+1} {/foreach}

          <!-- last item - selection of weights -->
          {include "page-last.tpl"}
          <!-- /last item -->

          <!-- customization -->

          {if ({$background})}
          <input type="hidden" name="background" value="{$background_orig}" />
          {/if}

          {if ({$navbar})}
          <input type="hidden" name="navbar" value="{$navbar}" />
          {/if}

          <!-- /customization -->

          <!-- utm -->
          {include "page-utm.tpl"}
          <!-- /utm -->

        </div>
      </form>
    </div>
  </div>
</div>
