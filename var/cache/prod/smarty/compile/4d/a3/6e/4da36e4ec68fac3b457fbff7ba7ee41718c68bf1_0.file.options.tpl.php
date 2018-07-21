<?php
/* Smarty version 3.1.32, created on 2018-07-21 18:23:35
  from '/Users/balamir/htdocs/prestashop/admin123/themes/default/template/controllers/order_preferences/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b535e0769ef24_27727552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da36e4ec68fac3b457fbff7ba7ee41718c68bf1' => 
    array (
      0 => '/Users/balamir/htdocs/prestashop/admin123/themes/default/template/controllers/order_preferences/helpers/options/options.tpl',
      1 => 1530622300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b535e0769ef24_27727552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15351185695b535e0769dae7_19400505', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_15351185695b535e0769dae7_19400505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_15351185695b535e0769dae7_19400505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
