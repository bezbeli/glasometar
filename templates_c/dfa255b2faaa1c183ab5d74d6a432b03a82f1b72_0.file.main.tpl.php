<?php
/* Smarty version 3.1.33, created on 2018-09-26 18:17:44
  from '/home/vagrant/Code/glasometar.ba/templates/2018/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5babcd48786747_78562816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa255b2faaa1c183ab5d74d6a432b03a82f1b72' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/main.tpl',
      1 => 1537985863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5babcd48786747_78562816 (Smarty_Internal_Template $_smarty_tpl) {
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

    <link rel="apple-touch-icon" sizes="180x180" href="/2018/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/2018/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/2018/images/favicon-16x16.png">
    <link rel="manifest" href="/2018/images/site.webmanifest">
    <link rel="mask-icon" href="/2018/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/2018/images/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Glasometar">
    <meta name="application-name" content="Glasometar">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/2018/images/browserconfig.xml">
    <meta name="theme-color" content="#333333">

    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['og:image'];?>
" />
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
" />
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['url'];?>
" />
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['description'];?>
" />
    <meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['result_fb_appid'];?>
" />
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
" />
    <meta property="og:type" content="website" />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3871966625babcd48774195_90195558', 'additionalHead');
?>


    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8169345825babcd487768d9_12633241', 'lastHead');
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

    <div id="top" class="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2307681975babcd4877c315_33845985', 'body');
?>

    </div>
    <!-- /#top -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9237060825babcd4877e0a5_59569944', 'outsideBody');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11684500835babcd48780349_73952908', 'footer');
?>


    <?php echo '<script'; ?>
 src="/2018/js/app.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9323847365babcd487820a5_06381315', 'js');
?>

    <!-- google analytics -->
    <?php echo '<script'; ?>
 type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', "<?php echo $_smarty_tpl->tpl_vars['text']->value['google_tracking_id'];?>
"]);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    <?php echo '</script'; ?>
>
    <!-- /google analytics -->
</body>

</html>
<?php }
/* {block 'additionalHead'} */
class Block_3871966625babcd48774195_90195558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_3871966625babcd48774195_90195558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_8169345825babcd487768d9_12633241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_8169345825babcd487768d9_12633241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'lastHead'} */
/* {block 'body'} */
class Block_2307681975babcd4877c315_33845985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2307681975babcd4877c315_33845985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'outsideBody'} */
class Block_9237060825babcd4877e0a5_59569944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'outsideBody' => 
  array (
    0 => 'Block_9237060825babcd4877e0a5_59569944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'outsideBody'} */
/* {block 'footer'} */
class Block_11684500835babcd48780349_73952908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11684500835babcd48780349_73952908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'js'} */
class Block_9323847365babcd487820a5_06381315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_9323847365babcd487820a5_06381315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
