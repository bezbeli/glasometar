<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:08:17
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e4199d861_82572424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d69cc28967ef8ffc0a68e8dac322419f55b5cf' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page-page.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7b9e4199d861_82572424 (Smarty_Internal_Template $_smarty_tpl) {
?>            <div class="item<?php if (($_smarty_tpl->tpl_vars['key']->value == 1)) {?> active<?php }?>">  
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
<?php }
}
