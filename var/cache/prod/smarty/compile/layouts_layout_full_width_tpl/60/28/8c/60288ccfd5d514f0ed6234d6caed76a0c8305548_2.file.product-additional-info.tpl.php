<?php
/* Smarty version 3.1.32, created on 2018-07-21 18:13:38
  from '/Users/balamir/htdocs/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b535bb2bff145_42783456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60288ccfd5d514f0ed6234d6caed76a0c8305548' => 
    array (
      0 => '/Users/balamir/htdocs/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1530622300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b535bb2bff145_42783456 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
