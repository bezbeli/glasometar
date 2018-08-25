<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb73486993_84246553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '476e89647530438e3f9ea68f27bc32e70ae4c2b4' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-footer.tpl',
      1 => 1534826994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb73486993_84246553 (Smarty_Internal_Template $_smarty_tpl) {
?>    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
" id="footer-glasometar-logo"><img src="../../2014/image/glasometar_logo.png" alt="logo glasometar.ba" /></a><br /><br />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
" id="footer-zastone-logo"><img src="../../2014/image/zastone_logo.png" alt="logo zastone.ba" /></a><br /><br />
                    <a href="http://kohovolit.eu" title="KohoVolit.eu" id="footer-kohovolit-logo"><img src="../../image/logo.png" alt="logo kohovolit.eu" /></a>

					
                    <hr>
					<p class="black"><?php echo $_smarty_tpl->tpl_vars['text']->value['licence'];?>
 | <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" id="footer-kohovolit-licence"><?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['text']->value['year'];?>
</p>
                </div>
            </div>
        </div>
    </footer><?php }
}
