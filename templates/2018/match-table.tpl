<div class="tab-pane active in" id="home">
    <div class="media-list mylist center-block">
        <ol class="list-group">
            {$i=0}
            {foreach $results as $result}
            <li class="no-number mb-2">
                <a href="#" data-id="{$results[$i].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="table-{$i}-{$results[$i].{$config->winner_id}}">
                    <div class="row justify-content-between">
                        <div class="w-75">
                            <div class="media">
                                <img src="../../image/1x1.png" class="sprite sprite-{$results[$i].{$config->table_sprite}} img-rounded media-object pull-left" alt="{$results[$i].{$config->table_alt}}" title="{$results[$i].{$config->table_title}}" />
                                <div class="media-body inside-media px-3">
                                    <h4 class="list-group-item-heading ">{$results[$i].{$config->table_main}}</h4>
                                    <p class="list-group-item-text hidden-xs">{$results[$i].{$config->table_additional}}</p>
                                </div>
                                </div> <!-- /.media -->
                            </div>
                            <div class="w-25 text-right">
                                <span class="result-number
                                    {if $result.result >= .8} result-very-positive
                                    {elseif $result.result >= .6} result-positive
                                    {elseif $result.result >= .4} result-neutral
                                    {elseif $result.result >= .2} result-negative
                                    {else} result-very-negative
                                    {/if}
                                ">{$result.result_percent}%</span>
                            </div>
                        </div>
                    </a>
                </li>
                {$i=$i+1}
                {/foreach}
            </ol>
        </div>
        {if (count($missing) > 0)}
        <div class="well">
            {$text['missing_table_description']}
            {foreach $missing as $item}
            {$item->name}{if !($item@last)}, {/if}
            {/foreach}
        </div>
        {/if}
    </div>
