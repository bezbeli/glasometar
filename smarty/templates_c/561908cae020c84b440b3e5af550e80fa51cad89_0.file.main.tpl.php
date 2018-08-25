<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:13:35
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb3f95d341_19751477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '561908cae020c84b440b3e5af550e80fa51cad89' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/main.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb3f95d341_19751477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['text']->value['lang'];?>
">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['description'];?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['keywords'];?>
">
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
">
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['og:image'];?>
"/>
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
"/>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['url'];?>
"/>
	<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
"/>
	<meta property="og:type" content="website"/>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11513706275b7eeb3f921fd7_93162174', 'additionalHead');
?>
 
    <?php if (($_smarty_tpl->tpl_vars['partnercss']->value)) {?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['partnercss']->value;?>
" rel="stylesheet">
    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['background']->value;
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1)) {?>
      <style>
        @media (min-width: 666px) { .header { background-image: url('<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
'); }}
      </style>
    <?php }?>
     <?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable2)) {?>
      <style>
        .navbar-custom { background-color: <?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>
; }
      </style>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14741388795b7eeb3f941863_75617824', 'lastHead');
?>

  </head>
  <body>
    <!--[if lte IE 8]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['ie8'];?>

    </div>
    <![endif]-->
      <!--[if lte Opera 11]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['opera11'];?>

    </div>
    <![endif]-->
  
    <div id="top" class="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11418712785b7eeb3f94aa45_64108421', 'body');
?>

    </div> <!-- /#top -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14136028015b7eeb3f94ea96_94643251', 'outsideBody');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14045639705b7eeb3f952650_51868391', 'footer');
?>

    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12678506835b7eeb3f956540_20401884', 'js');
?>

    <!-- google analytics -->
    <?php echo '<script'; ?>
 type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', "<?php echo $_smarty_tpl->tpl_vars['text']->value['google_tracking_id'];?>
"]);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    <?php echo '</script'; ?>
>
    <!-- /google analytics -->
  </body>
</html>
<?php }
/* {block 'additionalHead'} */
class Block_11513706275b7eeb3f921fd7_93162174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_11513706275b7eeb3f921fd7_93162174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_14741388795b7eeb3f941863_75617824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_14741388795b7eeb3f941863_75617824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'lastHead'} */
/* {block 'body'} */
class Block_11418712785b7eeb3f94aa45_64108421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11418712785b7eeb3f94aa45_64108421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'outsideBody'} */
class Block_14136028015b7eeb3f94ea96_94643251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'outsideBody' => 
  array (
    0 => 'Block_14136028015b7eeb3f94ea96_94643251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'outsideBody'} */
/* {block 'footer'} */
class Block_14045639705b7eeb3f952650_51868391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14045639705b7eeb3f952650_51868391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'js'} */
class Block_12678506835b7eeb3f956540_20401884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_12678506835b7eeb3f956540_20401884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
