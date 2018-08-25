<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:09:48
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-fb-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e9c4e4004_97948107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9296fcc23c4295eefede0e5597433210672ffa8f' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-fb-link.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7b9e9c4e4004_97948107 (Smarty_Internal_Template $_smarty_tpl) {
?>http://www.facebook.com/dialog/feed?
    app_id=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_appid'];?>
&
    link=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link']);?>
&
    picture=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_picture_link']);
echo $_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->fb_picture];?>
.<?php echo $_smarty_tpl->tpl_vars['config']->value->fb_picture_format;?>
&
    name=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_name']);?>
&
    caption=%3C-%20<?php echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->fb_caption]);?>
&
    actions=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_action']);?>
&
    description=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_1']);
echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->fb_winner]);?>
%20(<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_match']);?>
%3A<?php echo $_smarty_tpl->tpl_vars['results']->value[0]['result_percent'];?>
%25),%20<?php echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[1][$_smarty_tpl->tpl_vars['config']->value->fb_winner]);?>
%20(<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_match']);?>
%3A<?php echo $_smarty_tpl->tpl_vars['results']->value[1]['result_percent'];?>
%25)%20<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_and'];?>
%20<?php echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[2][$_smarty_tpl->tpl_vars['config']->value->fb_winner]);?>
%20(<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_match']);?>
%3A<?php echo $_smarty_tpl->tpl_vars['results']->value[2]['result_percent'];?>
%25).%20<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_2']);
echo rawurlencode($_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1][$_smarty_tpl->tpl_vars['config']->value->fb_winner]);?>
%20(<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_match']);?>
%20<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_only'];?>
%20<?php echo $_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1]['result_percent'];?>
%25).<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_description_3']);?>
&
    redirect_uri=<?php echo rawurlencode($_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link']);?>

<?php }
}
