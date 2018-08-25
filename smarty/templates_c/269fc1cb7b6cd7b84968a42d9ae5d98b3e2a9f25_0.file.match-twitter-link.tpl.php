<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-twitter-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb733688b7_31359109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '269fc1cb7b6cd7b84968a42d9ae5d98b3e2a9f25' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-twitter-link.tpl',
      1 => 1534832016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb733688b7_31359109 (Smarty_Internal_Template $_smarty_tpl) {
?>https://twitter.com/intent/tweet?text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_twitter_text_1']);
echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->twitter_winner]);?>
(<?php echo $_smarty_tpl->tpl_vars['results']->value[0]['result_percent'];?>
%25)<?php echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1][$_smarty_tpl->tpl_vars['config']->value->twitter_winner]);?>
(<?php echo $_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1]['result_percent'];?>
%25)&url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link']);?>
&lang=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_twitter_data_lang']);?>


<?php }
}
