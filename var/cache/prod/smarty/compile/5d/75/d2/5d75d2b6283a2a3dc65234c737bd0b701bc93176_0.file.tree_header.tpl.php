<?php
/* Smarty version 3.1.32, created on 2018-07-21 18:14:46
  from '/Users/balamir/htdocs/prestashop/admin123/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b535bf6e34104_44592325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d75d2b6283a2a3dc65234c737bd0b701bc93176' => 
    array (
      0 => '/Users/balamir/htdocs/prestashop/admin123/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1530622300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b535bf6e34104_44592325 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
