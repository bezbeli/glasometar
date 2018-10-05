<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-sharer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2a0ec61_83938018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ea8f40a74edc82e5a1e648e2c071a0b0d8dac04' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-sharer.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:match-fb-link.tpl' => 1,
    'file:match-twitter-link.tpl' => 1,
  ),
),false)) {
function content_5bab78c2a0ec61_83938018 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="share-bar" class="share-bar text-center pt-3 my-3">
  <h3><?php echo $_smarty_tpl->tpl_vars['text']->value['result_share'];?>
</h3>
  <p><a href='<?php $_smarty_tpl->_subTemplateRender("file:match-fb-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>' type="button" class="btn btn-lg btn-block btn-primary" target="_blank" id="sharer-facebook"><i class="fa fa-facebook-square"></i> Faceboook</a>
  <p><a href='<?php $_smarty_tpl->_subTemplateRender("file:match-twitter-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>' type="button" class="btn btn-lg btn-block btn-secondary" target="_blank" id="sharer-twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
</div>
<?php }
}
