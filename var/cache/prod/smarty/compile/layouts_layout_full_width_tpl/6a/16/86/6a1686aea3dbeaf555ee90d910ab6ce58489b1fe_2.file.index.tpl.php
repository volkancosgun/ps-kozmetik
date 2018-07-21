<?php
/* Smarty version 3.1.32, created on 2018-07-21 18:09:47
  from '/Users/balamir/htdocs/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b535acb27f781_21579784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1686aea3dbeaf555ee90d910ab6ce58489b1fe' => 
    array (
      0 => '/Users/balamir/htdocs/prestashop/themes/classic/templates/index.tpl',
      1 => 1530622300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b535acb27f781_21579784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_615661445b535acb27b9d0_66897497', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9967548685b535acb27c2e6_39174505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15521372895b535acb27d7f7_61573963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1181583545b535acb27cfd4_83796901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15521372895b535acb27d7f7_61573963', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_615661445b535acb27b9d0_66897497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_615661445b535acb27b9d0_66897497',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9967548685b535acb27c2e6_39174505',
  ),
  'page_content' => 
  array (
    0 => 'Block_1181583545b535acb27cfd4_83796901',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15521372895b535acb27d7f7_61573963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9967548685b535acb27c2e6_39174505', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1181583545b535acb27cfd4_83796901', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
