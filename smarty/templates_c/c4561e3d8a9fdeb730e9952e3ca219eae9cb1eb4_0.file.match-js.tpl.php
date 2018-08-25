<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb734b4057_57673240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4561e3d8a9fdeb730e9952e3ca219eae9cb1eb4' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-js.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb734b4057_57673240 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  //highlight more table
  $('document').ready(function() {
    $('.list-group-item').hover(function(){
      $(this).toggleClass('active');
    });
  });
<?php echo '</script'; ?>
>


<!-- clicked -->
<?php echo '<script'; ?>
>
/*var session = '<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
';
$("a, button").click(function() {
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

<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.5/d3.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  //me
    var user = <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
;
    var weights = user['weight'];
    var me = {
      "id": "<?php echo $_smarty_tpl->tpl_vars['config']->value->me_id;?>
",
      "name": "<?php echo $_smarty_tpl->tpl_vars['config']->value->me_name;?>
",
      "short_name": "<?php echo $_smarty_tpl->tpl_vars['config']->value->me_short_name;?>
",
      "vote": user['vote']
    };
  //answers and q(uestions') coefs loaded directly
  var answers = <?php echo $_smarty_tpl->tpl_vars['answers_json']->value;?>
;
  var qcoefs = <?php echo $_smarty_tpl->tpl_vars['qcoefs_json']->value;?>
;
  
  var texts = { 'yes':"<?php echo $_smarty_tpl->tpl_vars['text']->value['result_yes'];?>
", 'no':"<?php echo $_smarty_tpl->tpl_vars['text']->value['result_no'];?>
" , 'question':"<?php echo $_smarty_tpl->tpl_vars['text']->value['result_question'];?>
"};
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="../../js/showcomparison.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../js/showmatrix.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../js/calcmatrix.js"><?php echo '</script'; ?>
>
<?php }
}
