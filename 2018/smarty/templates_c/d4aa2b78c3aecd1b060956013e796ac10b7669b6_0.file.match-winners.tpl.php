<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:09:48
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-winners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e9c42a264_88560370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4aa2b78c3aecd1b060956013e796ac10b7669b6' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-winners.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7b9e9c42a264_88560370 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="winners">
  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
   <div class="col-sm-4 text-center<?php if (($_smarty_tpl->tpl_vars['i']->value > 0)) {?> hidden-xs<?php }?>">
     <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="winner-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_id];?>
">
        <img src="../../image/1x1.png" class="sprite sprite-<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_sprite];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_alt];?>
" title="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner_title];?>
" />
       <h3><?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['config']->value->winner];?>
</h3>
       <h2><?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->tpl_vars['i']->value]['result_percent'];?>
 %</h2>
     </a>
   </div>
  <?php }
}
?>
</div>  
<?php }
}
