<?php
/* Smarty version 3.1.32, created on 2018-08-21 06:13:09
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-twitter-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7bad755dd6e3_17834685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0424bbbb33488135d2960c0bdf51f1b97d95d8ce' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-twitter-link.tpl',
      1 => 1534832016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7bad755dd6e3_17834685 (Smarty_Internal_Template $_smarty_tpl) {
?>https://twitter.com/intent/tweet?text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_twitter_text_1']);
echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->twitter_winner]);?>
(<?php echo $_smarty_tpl->tpl_vars['results']->value[0]['result_percent'];?>
%25)<?php echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1][$_smarty_tpl->tpl_vars['config']->value->twitter_winner]);?>
(<?php echo $_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1]['result_percent'];?>
%25)&url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link']);?>
&lang=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_twitter_data_lang']);?>


<?php }
}
