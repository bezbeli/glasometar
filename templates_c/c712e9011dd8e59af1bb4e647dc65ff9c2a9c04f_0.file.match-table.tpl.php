<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c29df9f3_44877442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c712e9011dd8e59af1bb4e647dc65ff9c2a9c04f' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-table.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab78c29df9f3_44877442 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane active in" id="home">
    <div class="media-list mylist center-block">
        <ol class="list-group">
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
            <li class="no-number mb-2">
                <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="table-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_id];?>
">
                    <div class="row justify-content-between">
                        <div class="w-75">
                            <div class="media">
                                <div class="sprite bg-<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->table_sprite];?>
 pull-left"></div>
                                <div class="media-body inside-media px-3">
                                    <h4 class="list-group-item-heading "><?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->table_main];?>
</h4>
                                    <p class="list-group-item-text hidden-xs"><?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->table_additional];?>
</p>
                                </div>
                                </div> <!-- /.media -->
                            </div>
                            <div class="w-25 text-right">
                                <span class="result-number
                                    <?php if ($_smarty_tpl->tpl_vars['result']->value['result'] >= .8) {?> result-very-positive
                                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['result'] >= .6) {?> result-positive
                                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['result'] >= .4) {?> result-neutral
                                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['result'] >= .2) {?> result-negative
                                    <?php } else { ?> result-very-negative
                                    <?php }?>
                                "><?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
%</span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
        <?php if ((count($_smarty_tpl->tpl_vars['missing']->value) > 0)) {?>
        <div class="well">
            <?php echo $_smarty_tpl->tpl_vars['text']->value['missing_table_description'];?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['missing']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value->name;
if (!($_smarty_tpl->tpl_vars['item']->last)) {?>, <?php }?>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php }?>
    </div>
<?php }
}
