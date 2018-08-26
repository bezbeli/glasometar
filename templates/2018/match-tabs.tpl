<ul class="nav nav-tabs">
    <li>
        <a class="nav-link active" href="#home" data-toggle="tab" id="tabs-home"><i class="fa fa-list-ol"></i> {$text['result_results']}</a>
    </li>
    <li>
        <a class="nav-link" href="#comparison" data-toggle="tab" id="tabs-comparison"><strong><i class="fa fa-th"></i> {$text['result_comparison']}</strong></a></li>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  {include "match-table.tpl"}
  {include "match-matrix.tpl"}
  {include "match-eu.tpl"}
</div> <!-- /.tab-content -->
