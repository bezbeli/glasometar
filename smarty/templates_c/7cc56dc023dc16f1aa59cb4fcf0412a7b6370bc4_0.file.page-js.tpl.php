<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:13:35
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb3fd18a64_66722335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cc56dc023dc16f1aa59cb4fcf0412a7b6370bc4' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-js.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb3fd18a64_66722335 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- clicked -->
<?php echo '<script'; ?>
>
/*var session = '<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
';
$("a, button, label, li").click(function() {
  save_action($(this).attr('id'));
});
function save_action(action) {
  $.ajax({
    url: "click.php",
    data: { 'action':action }
  });
}*/
<?php echo '</script'; ?>
>
<!-- /clicked -->
<!-- onload, offload -->
<?php echo '<script'; ?>
>
/*$('document').ready(function() {
  save_action('load');
});
jQuery(window).bind('beforeunload', function(){
    save_action('unload');
});*/
<?php echo '</script'; ?>
>
<!-- /onload, offload -->
<?php }
}
