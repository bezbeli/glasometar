<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179389164053ef2aed65a1d3-37847256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e23e8dcc79eb34e9c5dcdc38af9c64a9074f939b' => 
    array (
      0 => '../smarty/templates/eu2014/page.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    'ba8c753f8f276aa8764ff28d687f4391d912b869' => 
    array (
      0 => '../smarty/templates/eu2014/main.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    '4b5558328d7e3adef096ea9f8b92618df69d6a93' => 
    array (
      0 => '../smarty/templates/eu2014/page-header.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    '93e11deb9ea060c9da17cabde31d349678b8dbd1' => 
    array (
      0 => '../smarty/templates/eu2014/page-page.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    '6aa16c842caa5d4acea2074e09b4cc934ff4c8a2' => 
    array (
      0 => '../smarty/templates/eu2014/page-last.tpl',
      1 => 1408105500,
      2 => 'file',
    ),
    '0675c39bdec5a350ca0c9b63828908393924d224' => 
    array (
      0 => '../smarty/templates/eu2014/page-indicators.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    '62057727af338b9a4acfaf3744e75d96c0df1f80' => 
    array (
      0 => '../smarty/templates/eu2014/page-arrows.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    'a31c9598f8971881d109f64a9b2a2a11a1c697c5' => 
    array (
      0 => '../smarty/templates/eu2014/page-carousel.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
    '39d2ccc544101ea95a383232bd7edb80887e3c1f' => 
    array (
      0 => '../smarty/templates/eu2014/page-footer.tpl',
      1 => 1408006504,
      2 => 'file',
    ),
    '734b23bf28261c0f0dd7df7b6382fe59b56dadaf' => 
    array (
      0 => '../smarty/templates/eu2014/page-js.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179389164053ef2aed65a1d3-37847256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'partnercss' => 0,
    'background' => 0,
    'navbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ef2aed807eb0_60713172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ef2aed807eb0_60713172')) {function content_53ef2aed807eb0_60713172($_smarty_tpl) {?><!DOCTYPE html>
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
    
      <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../css/carousel.min.css" rel="stylesheet">
      <link href="../css/vaa2014.css" rel="stylesheet">
     
    <?php if (($_smarty_tpl->tpl_vars['partnercss']->value)) {?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['partnercss']->value;?>
" rel="stylesheet">
    <?php }?>
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['background']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1)) {?>
      <style>
        @media (min-width: 666px) { .header { background-image: url('<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
'); }}
      </style>
    <?php }?>
     <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2)) {?>
      <style>
        .navbar-custom { background-color: <?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>
; }
      </style>
    <?php }?>
    
      <title><?php echo $_smarty_tpl->tpl_vars['text']->value['title'];?>
</title>
    
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
      
      <!-- header -->
      <?php /*  Call merged included template "page-header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed7035c5_25360855($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-header.tpl" */?>
      <!-- /header -->
      
      <!-- carousel -->
      <?php /*  Call merged included template "page-carousel.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed70b727_84456302($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-carousel.tpl" */?>
      <!-- /carousel -->
   
    </div> <!-- /#top -->
    
    
     <!-- Footer -->
     <?php /*  Call merged included template "page-footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed7c93e0_95071667($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-footer.tpl" */?>
     <!-- /Footer -->
   
    
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
     <script>
       var user = $.parseJSON('<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
');
     </script>
     <script src="../js/page.js"></script>
     <!-- js -->
     <?php /*  Call merged included template "page-js.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed7f8b67_02126487($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-js.tpl" */?>
     <!-- /js -->
   
    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', "<?php echo $_smarty_tpl->tpl_vars['text']->value['google_tracking_id'];?>
"]);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /google analytics -->
  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed7035c5_25360855')) {function content_53ef2aed7035c5_25360855($_smarty_tpl) {?>      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <a class="navbar-brand" href="#" id="header-home"><?php echo $_smarty_tpl->tpl_vars['text']->value['calc_name'];?>
</a>
        </div>
      </nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-carousel.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed70b727_84456302')) {function content_53ef2aed70b727_84456302($_smarty_tpl) {?>      <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
        <!-- note: data-interval="false" disables the automatic transition -->
        <!-- note: data-wrap="false" disables the rotation -->
        <form action="./match/" method="get" id="calc">
          <div class="carousel-inner">   
          <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(1, null, 0);?> 
          <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
            <!-- <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
th page -->
            <?php /*  Call merged included template "page-page.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed718e54_69248977($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-page.tpl" */?>
            <!-- /<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
th page -->
            <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value+1, null, 0);?>
          <?php } ?>
          
            <!-- last item - selection of weights -->
            <?php /*  Call merged included template "page-last.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-last.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed75f655_78205802($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-last.tpl" */?>
            <!-- /last item -->
          
          
          </div> <!-- /.carousel-inner -->
          
          <!-- customization -->
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['background']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3)) {?>  
            <input type="hidden" name="background" value="<?php echo $_smarty_tpl->tpl_vars['background_orig']->value;?>
" />
          <?php }?>
          <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if (($_tmp4)) {?>  
            <input type="hidden" name="navbar" value="<?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>
" />
          <?php }?>
          <!-- /customization -->
          
        </form>
        <?php /*  Call merged included template "page-indicators.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-indicators.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed79d688_12714290($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-indicators.tpl" */?>
        <?php /*  Call merged included template "page-arrows.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("page-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '179389164053ef2aed65a1d3-37847256');
content_53ef2aed7b6be9_96477954($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "page-arrows.tpl" */?>
      </div> <!-- /#carousel -->  
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-page.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed718e54_69248977')) {function content_53ef2aed718e54_69248977($_smarty_tpl) {?>            <div class="item<?php if (($_smarty_tpl->tpl_vars['key']->value==1)) {?> active<?php }?>">  
              <div class="container">
                <div class="carousel-caption center-block">
                  <div class="o-question">
                    <div class="i-question">
                      <h2 class="question-question"><?php echo $_smarty_tpl->tpl_vars['question']->value->question;?>
</h2>
                      <div class="question-description"><?php echo $_smarty_tpl->tpl_vars['question']->value->description;?>
</div>
                    </div> <!-- /.i-question -->
                  </div> <!-- /.o-question -->
                  
                  <p class="vote-buttons"> 
                    <div data-toggle="buttons" data-target="#carousel" data-slide="next">
                      <label class="btn btn-lg btn-info vote-button" id="label-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-1">
                        <input type="radio" name="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-1" value="1"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_yes'];?>

                      </label>
                      <label class="btn btn-lg btn-info vote-button" id="label-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
--1">
                        <input type="radio" name="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
--1" value="-1"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_no'];?>

                      </label>
                      <label class="btn btn-lg btn-info vote-button" id="label-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-0">
                        <input type="radio" name="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-0" value="0"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_neutral'];?>
<span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_neutral_add'];?>
</span>
                      </label>
                    </div> <!-- /buttons -->
                  </p> <!-- /.vote-buttons -->
                  
                </div>
              </div>
            </div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-last.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed75f655_78205802')) {function content_53ef2aed75f655_78205802($_smarty_tpl) {?>            <div class="item" id="item-last">  
              <div class="container">
                <div class="carousel-caption center-block">
                  <h2><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_questions'];?>
</h2>
                  <p><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_legend'];?>
</p>
                  
                  <p>
                    <button class="btn btn-default btn-lg wide-button" type="submit" id="submit-top"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_skip'];?>
 <i class="fa fa-arrow-right"></i></button>
                  </p>
                  
                  <div data-toggle="buttons">
                    <table class="table">
                      <tbody>
                      <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                      <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
                        <tr id="weightsel-row-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                          <td class="weightsel-td">
                            <label class="weightsel-button btn btn-lg" for="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="important-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                              <input type="checkbox" name="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
"/> <?php echo $_smarty_tpl->tpl_vars['question']->value->name;?>

                            </label>
                          </td>
                        </tr>
                      <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>    
                      <?php } ?> 
                      </tbody>
                    </table>
                  </div> <!-- /buttons -->
                  
                  <p>
                    <button class="btn btn-default btn-lg wide-button" type="submit" id="submit-bottom"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_results'];?>
 <i class="fa fa-arrow-right"></i></button>
                  </p>

                </div>
              </div>
            </div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-indicators.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed79d688_12714290')) {function content_53ef2aed79d688_12714290($_smarty_tpl) {?>        <ol class="carousel-indicators">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
          <li data-target="#carousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['i']->value==0)) {?> class="active"<?php }?> id="indicator-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
        <?php } ?>
        </ol>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-arrows.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed7b6be9_96477954')) {function content_53ef2aed7b6be9_96477954($_smarty_tpl) {?><a id="carousel-control-left" class="left carousel-control" href="#carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a  id="carousel-control-right" class="right carousel-control" href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
<a  id="carousel-control-last" class="right carousel-control" href="#" data-toggle="modal" style="display:none"><span class="glyphicon glyphicon-chevron-right"></span></a>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed7c93e0_95071667')) {function content_53ef2aed7c93e0_95071667($_smarty_tpl) {?>    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
" id="footer-glasometar-logo"><img src="../2014/image/glasometar_logo.png" alt="logo glasometar.ba" /></a><br /><br />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
" id="footer-kohovolit-logo"><img src="../image/logo.png" alt="logo kohovolit.eu" /></a>
                    <p><a href="http://votematch.eu" id="footer-votematch"><img src="../image/eu2014/votematch.png" title="VoteMatch.eu" alt="VoteMatch.eu"/></a></p>
					<p class="lead black"><?php echo $_smarty_tpl->tpl_vars['text']->value['footer_text'];?>
</p>
					
                    <hr>
					<p class="black"><?php echo $_smarty_tpl->tpl_vars['text']->value['licence'];?>
 | <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" id="footer-kohovolit-licence"><?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['text']->value['year'];?>
</p>
                </div>
            </div>
        </div>
    </footer>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-08-16 09:57:01
         compiled from "../smarty/templates/eu2014/page-js.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ef2aed7f8b67_02126487')) {function content_53ef2aed7f8b67_02126487($_smarty_tpl) {?><!-- clicked -->
<script>
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
</script>
<!-- /clicked -->
<!-- onload, offload -->
<script>
/*$('document').ready(function() {
  save_action('load');
});
jQuery(window).bind('beforeunload', function(){
    save_action('unload');
});*/
</script>
<!-- /onload, offload -->
<?php }} ?>
