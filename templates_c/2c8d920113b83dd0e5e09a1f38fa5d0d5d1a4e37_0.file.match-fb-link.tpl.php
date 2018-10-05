<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-fb-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2a66c67_81171562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c8d920113b83dd0e5e09a1f38fa5d0d5d1a4e37' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-fb-link.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab78c2a66c67_81171562 (Smarty_Internal_Template $_smarty_tpl) {
?>http://www.facebook.com/dialog/feed?app_id=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_appid'];?>
&link=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_name'];?>
&amp;quote=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_1'];?>
 <?php echo $_smarty_tpl->tpl_vars['results']->value[0][$_smarty_tpl->tpl_vars['config']->value->fb_winner];?>
 (<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_match'];?>
 <?php echo $_smarty_tpl->tpl_vars['results']->value[0]['result_percent'];?>
%), <?php echo $_smarty_tpl->tpl_vars['results']->value[1][$_smarty_tpl->tpl_vars['config']->value->fb_winner];?>
 (<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_match'];?>
 <?php echo $_smarty_tpl->tpl_vars['results']->value[1]['result_percent'];?>
%) <?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_and'];?>
 <?php echo $_smarty_tpl->tpl_vars['results']->value[2][$_smarty_tpl->tpl_vars['config']->value->fb_winner];?>
% (<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_match'];?>
 <?php echo $_smarty_tpl->tpl_vars['results']->value[2]['result_percent'];?>
%). <?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_2'];
echo $_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1][$_smarty_tpl->tpl_vars['config']->value->fb_winner];?>
 (<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_match'];?>
 <?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_only'];?>
 <?php echo $_smarty_tpl->tpl_vars['results']->value[count($_smarty_tpl->tpl_vars['results']->value)-1]['result_percent'];?>
%).&name=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_description_3'];?>
&redirect_uri=<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_redirect_link'];?>

<?php }
}
