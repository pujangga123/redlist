<?php
/* Smarty version 4.3.1, created on 2023-07-23 18:17:33
  from 'D:\xampp\htdocs\redlist\mods\method2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bd529d81e7c0_32074181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3ead8967e4e95b21056624ed52efcddef0af3aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redlist\\mods\\method2.tpl',
      1 => 1690128817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64bd529d81e7c0_32074181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151064672664bd529d81d3b2_69728169', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47942174464bd529d81e1f2_98943355', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index2.tpl");
}
/* {block 'title'} */
class Block_151064672664bd529d81d3b2_69728169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_151064672664bd529d81d3b2_69728169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Method 2
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_47942174464bd529d81e1f2_98943355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_47942174464bd529d81e1f2_98943355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Sample: Page Using Method 2
<?php
}
}
/* {/block 'content'} */
}
