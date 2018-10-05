<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-winners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2975bd3_68054852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56a97f5cf3a43b2a4cbde89926c38b3e4b94cb4' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-winners.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab78c2975bd3_68054852 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-between align-items-stretch mb-3">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class="col-4 text-center open-dialog" data-toggle="modal" data-target="#modal" id="winner-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_id];?>
">
        <div class="card mx-1">
            <div class="card-body pt-3 p-1">
                <div class="sprite bg-<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_sprite];?>
 mx-auto"></div>
                <h2><?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]['result_percent'];?>
%</h2>
            </div>
            <div class="card-footer small">
                <?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner];?>

            </div>
        </div>
    </a>
    <?php }
}
?>
</div>
<?php }
}
