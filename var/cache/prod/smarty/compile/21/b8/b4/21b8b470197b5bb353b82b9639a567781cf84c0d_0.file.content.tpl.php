<?php
/* Smarty version 3.1.32, created on 2018-07-21 18:09:43
  from '/Users/balamir/htdocs/prestashop/admin123/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b535ac79a49c0_68017836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21b8b470197b5bb353b82b9639a567781cf84c0d' => 
    array (
      0 => '/Users/balamir/htdocs/prestashop/admin123/themes/default/template/content.tpl',
      1 => 1530622300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b535ac79a49c0_68017836 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
