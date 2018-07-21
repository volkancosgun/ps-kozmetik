<?php
/* Smarty version 3.1.32, created on 2018-07-21 18:09:42
  from '/Users/balamir/htdocs/prestashop/admin123/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b535ac6097741_43396785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2730d33d3f3ff896f9a07bd1ec27b42669aca123' => 
    array (
      0 => '/Users/balamir/htdocs/prestashop/admin123/themes/new-theme/template/content.tpl',
      1 => 1530622300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b535ac6097741_43396785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
