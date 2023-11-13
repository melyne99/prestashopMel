<?php
/* Smarty version 4.3.1, created on 2023-11-13 11:13:06
  from '/home/melyne/webapps/app-prestamel/admin740bkrvsxq3gteokzum/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551f6b2cc4207_76398461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f32bd51d38bd31ba5e759df4f7df26961104ab' => 
    array (
      0 => '/home/melyne/webapps/app-prestamel/admin740bkrvsxq3gteokzum/themes/default/template/content.tpl',
      1 => 1699867632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551f6b2cc4207_76398461 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
