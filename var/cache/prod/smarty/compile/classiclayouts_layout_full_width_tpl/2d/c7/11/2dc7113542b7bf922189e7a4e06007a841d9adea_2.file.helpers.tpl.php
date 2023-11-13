<?php
/* Smarty version 4.3.1, created on 2023-11-13 11:53:35
  from '/home/melyne/webapps/app-prestamel/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6552002fbb62d7_27916345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc7113542b7bf922189e7a4e06007a841d9adea' => 
    array (
      0 => '/home/melyne/webapps/app-prestamel/themes/classic/templates/_partials/helpers.tpl',
      1 => 1699867633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6552002fbb62d7_27916345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/melyne/webapps/app-prestamel/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/2d/c7/11/2dc7113542b7bf922189e7a4e06007a841d9adea_2.file.helpers.tpl.php',
    'uid' => '2dc7113542b7bf922189e7a4e06007a841d9adea',
    'call_name' => 'smarty_template_function_renderLogo_7250584186552002fbaaf86_11287743',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_7250584186552002fbaaf86_11287743 */
if (!function_exists('smarty_template_function_renderLogo_7250584186552002fbaaf86_11287743')) {
function smarty_template_function_renderLogo_7250584186552002fbaaf86_11287743(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_7250584186552002fbaaf86_11287743 */
}
