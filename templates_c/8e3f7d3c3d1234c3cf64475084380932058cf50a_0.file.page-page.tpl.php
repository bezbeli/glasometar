<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:16:13
  from '/home/vagrant/Code/glasometar.ba/templates/2018/page-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab788d2b69f8_08257535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3f7d3c3d1234c3cf64475084380932058cf50a' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/page-page.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab788d2b69f8_08257535 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="item<?php if (($_smarty_tpl->tpl_vars['key']->value == 1)) {?> active<?php }?>">
    <div class="o-question">
        <div class="i-question">
            <h4 class="question-question"><?php echo $_smarty_tpl->tpl_vars['question']->value->question;?>
</h4>
            <div class="question-description"><?php echo $_smarty_tpl->tpl_vars['question']->value->description;?>
</div>
        </div>
    </div>
    <div class="d-flex justify-content-center" data-toggle="buttons" data-target=".slider" data-slick="slickNext">
        <label class="btn btn-primary vote-button m-2" id="label-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-1">
            <input type="radio" name="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-1" value="1"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_yes'];?>

        </label>
        <label class="btn btn-primary vote-button m-2" id="label-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
--1">
            <input type="radio" name="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
--1" value="-1"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_no'];?>

        </label>
        <label class="btn btn-primary vote-button m-2" id="label-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-0">
            <input type="radio" name="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="q<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
-0" value="0"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_neutral'];?>

            <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_question_neutral_add'];?>
</span>
        </label>
    </div>
</div>
<?php }
}
