<?php
/* Smarty version 3.1.32, created on 2018-08-23 23:31:37
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-fb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f43d954f796_20173144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0de5242a145dcd7ecf66f4fe649b867aad0db6' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-fb.tpl',
      1 => 1535193004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:match-fb-link.tpl' => 1,
  ),
),false)) {
function content_5b7f43d954f796_20173144 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-center">
  <a href='<?php $_smarty_tpl->_subTemplateRender("file:match-fb-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>' target='_blank' type="button" class="btn btn-success btn-lg sharebutton" id="fb-<?php echo $_smarty_tpl->tpl_vars['fb_pos']->value;?>
"><i class="fa fa-facebook-square fa-lg"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['result_winner_share'];?>
</a>
</div>
<?php }
}
