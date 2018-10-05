<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:16:13
  from '/home/vagrant/Code/glasometar.ba/templates/2018/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab788d311944_45372041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f9d79e8a6c5d8ab6fd8100ef60f664cad79975a' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/footer.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab788d311944_45372041 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <div class="col d-flex justify-content-center align-items-center flex-sm-row flex-column flex-wrap">
                    <a class="px-4 py-3" href="http://zastone.ba" title="U.G. Zašto ne?" id="footer-zastone-logo"><img src="/2018/images/zasto_ne_logo.svg" alt="logo zastone.ba" /></a>
                    <a class="px-4 py-3" href="http://cpu.org.ba" title="CPU" id="footer-cpu-logo"><img src="/2018/images/cpu_logo.svg" alt="logo CPU" /></a>
                    <a class="px-4 py-3" href="<?php echo $_smarty_tpl->tpl_vars['text']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['text']->value['title'];?>
" id="footer-glasometar-logo"><img src="/2018/images/glasometar_logo.svg" alt="logo glasometar.ba" /></a>
                    <a class="px-4 py-3" href="http://kohovolit.eu" title="KohoVolit.eu" id="footer-kohovolit-logo"><img src="/2018/images/kohovolit_logo.svg" alt="logo kohovolit.eu" /></a>
                </div>
                <div class="col d-flex justify-content-center align-items-center flex-sm-row flex-column">
                    <small>Podržano od:</small>
                    <a class="px-4 py-3" href="https://www.cipe.org" title="cipe.org" id="footer-cipe-logo"><img src="/2018/images/cipe_logo.svg" alt="logo CIPE" /></a>
                    <a class="px-4 py-3" href="https://ccfd-terresolidaire.org/" title="CCFD-Terre Solidaire" id="footer-ccfd-terre-solidaire-logo"><img src="/2018/images/ccfd_terre_solidaire_logo.svg" alt="logo CCFD-Terre Solidaire" /></a>
                </div>
                <div class="col text-center py-5 small">
                    <p>
                        <strong>Glasometar.ba</strong> pripremili i vode <strong>U.G. Zašto ne </strong> <a href="http://zastone.ba">U.G. Zašto ne</a>
                        <br>
                        <a href="mailto:info@zastone.ba">info@zastone.ba</a>
                    </p>
                    <p><?php echo $_smarty_tpl->tpl_vars['text']->value['licence'];?>
 | <a href="<?php echo $_smarty_tpl->tpl_vars['text']->value['author_link'];?>
" id="footer-kohovolit-licence"><?php echo $_smarty_tpl->tpl_vars['text']->value['author'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['text']->value['year'];?>
</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php }
}
