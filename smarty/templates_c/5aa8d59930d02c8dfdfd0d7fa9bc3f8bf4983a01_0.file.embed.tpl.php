<?php
/* Smarty version 3.1.32, created on 2018-08-23 23:47:09
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/embed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f477d2e42e4_34525753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aa8d59930d02c8dfdfd0d7fa9bc3f8bf4983a01' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/embed.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page-footer.tpl' => 1,
  ),
),false)) {
function content_5b7f477d2e42e4_34525753 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <title>Vložiť volebnú kalkulačku | Volebná Kalkulačka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="../css/page.css" />
	
  </head>
  
<body>
  <div data-role="page" data-title="Embed | VolebníKalkulačka.cz" data-theme="b" class='page type-interior'>

    <div data-role="header" data-theme="f" class="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">VolebnáKalkulačka.sk</a>
	  <h3 class="h1">Vložiť volebnú kalkulačku | VolebnáKalkulačka.sk</h3>
	</div>


  <div data-role="content" class="content">
  
    <h1>VolebnáKalkulačka.sk vložená na Vašom webe</h1>
    <p>Rovnako ľahko ako napríklad toto video z Youtube si môžete vložiť k sebe na webové stránky aj Volebné kalkulačku.</p>
    <div class="box-center-match"><iframe width="420" height="315" src="http://www.youtube.com/embed/UQyaSYhVJ9g" frameborder="0" allowfullscreen></iframe></div>
    
    <div class="box-center-match match-winner-box">
    
    <div data-role="collapsible-set">  
    
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calcs']->value, 'calc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['calc']->value) {
?>
        <div data-role="collapsible" <?php if (isset($_smarty_tpl->tpl_vars['calc']->value['selected'])) {?>data-collapsed="false"<?php }?> data-theme="b" data-content-theme="b"> 

          <h3><?php echo $_smarty_tpl->tpl_vars['calc']->value['name'];?>
</h3>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calc']->value['calc'], 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
          	<div data-role="collapsible" <?php if ((isset($_smarty_tpl->tpl_vars['calc']->value['selected']) && ($_smarty_tpl->tpl_vars['cals']->value['selected']))) {?>data-collapsed="false"<?php }?> data-theme="d" data-content-theme="d">
          	
            	 <h3><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</h3>
            	 
            	 <?php if ((isset($_smarty_tpl->tpl_vars['c']->value['custom']))) {?>
            	 <label for="navbarcolor">Barva hornej lišty (html, napr: #ab0) - nepovinné</label>
            	 <input type="color" name="navbarcolor" id="navbarcolor-<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
" data-calc="<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
">
            	 <label for="navbarcolor">Pozadie (adresa obrázka umiestneného na webe, nesmie obsahovať znak '_', napr.: http://volebnikalkulacka.cz/evropsky-parlament-2014/image/bg.jpg) - nepovinné</label>
            	 <input type="text" name="background" id="background-<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
" data-calc="<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
">
            	 <?php }?>
            	 
            	 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
            	    <div data-role="collapsible" <?php if ((isset($_smarty_tpl->tpl_vars['size']->value['selected']) && ($_smarty_tpl->tpl_vars['size']->value['selected']))) {?>data-collapsed="false"<?php }?>  data-theme="e" data-content-theme="e">
            	     <h3><?php echo $_smarty_tpl->tpl_vars['size']->value['name'];?>
</h3>
            	     <div data-role="fieldcontain">
						<p>Kód HTML:</p>
						<p>Kód HTML:</p>
						<textarea data-role="none" cols="40" rows="3" name="textarea" class="textarea textarea-<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
"><iframe src="http://volebnakalkulacka.sk/<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
?key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['size']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['size']->value['height'];?>
" frameborder="0"></iframe></textarea>
						<input type="hidden" value='<iframe src="http://volebnakalkulacka.sk/<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
?key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' id="link1-<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
">
						<input type="hidden" value='" width="<?php echo $_smarty_tpl->tpl_vars['size']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['size']->value['height'];?>
" frameborder="0"></iframe>' id="link3-<?php echo $_smarty_tpl->tpl_vars['c']->value['friendly_url'];?>
">
					</div> 
            	    </div>
            	 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            
	        </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div><!-- main collapsible -->
  </div> 
  </div> <!-- /content -->
  
  <!-- footer -->
  <?php $_smarty_tpl->_subTemplateRender("file:page-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <!-- js -->
  <?php echo '<script'; ?>
>
    $('input').change(function() {
    calc = $(this).attr("data-calc");
    navbarcolor = $('#navbarcolor-'+calc).val().substr(1);
    background = $('#background-'+calc).val().replace('http://','').replace('https://').replace(/\//g, '_')
    $('.textarea-'+calc).each(function(i) {
      iframe = $('#link1-'+calc).val();
      if (navbarcolor != '')
        iframe += '&navbar='+navbarcolor;
      if (background != '')
        iframe += '&background='+background;
      iframe += $('#link3-'+calc).val();
      $(this).html(iframe)
    });
  });
  <?php echo '</script'; ?>
>
  
  </div> <!-- /page --> 


</body>
</html>
<?php }
}
