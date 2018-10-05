<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-twitter-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2acbe31_19672809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb0f758c619df639dd97dd5ee133815f787236e' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-twitter-link.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab78c2acbe31_19672809 (Smarty_Internal_Template $_smarty_tpl) {
?>https://twitter.com/intent/tweet?text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_twitter_text_1']);
echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->twitter_winner]);?>
(<?php echo $_smarty_tpl->tpl_vars['results']->value[0]['result_percent'];?>
%25)<?php echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1][$_smarty_tpl->tpl_vars['config']->value->twitter_winner]);?>
(<?php echo $_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1]['result_percent'];?>
%25)&url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link']);?>
&lang=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_twitter_data_lang']);?>

<?php }
}
