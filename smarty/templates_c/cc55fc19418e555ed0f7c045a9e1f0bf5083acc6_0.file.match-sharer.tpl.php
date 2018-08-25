<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-sharer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb732a43a5_53626456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc55fc19418e555ed0f7c045a9e1f0bf5083acc6' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-sharer.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:match-fb-link.tpl' => 1,
    'file:match-twitter-link.tpl' => 1,
  ),
),false)) {
function content_5b7eeb732a43a5_53626456 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="share-bar" class="share-bar text-center small">
  <p><font size="3"><?php echo $_smarty_tpl->tpl_vars['text']->value['result_share'];?>
</font></p>
  <p>
  <p><a href='<?php $_smarty_tpl->_subTemplateRender("file:match-fb-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>' type="button" class="btn facebook btn-lg btn-block" target="_blank" id="sharer-facebook"><i class="fa fa-facebook-square"></i> Faceboook</a> 
  <p><a href='<?php $_smarty_tpl->_subTemplateRender("file:match-twitter-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>' type="button" class="btn twitter btn-lg btn-block twitter-share-button" target="_blank" id="sharer-twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
</div>
<?php }
}
