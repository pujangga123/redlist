<?php
/* Smarty version 4.3.1, created on 2023-07-23 18:17:33
  from 'D:\xampp\htdocs\redlist\mods\index2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bd529d836386_55064684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '370f3efda575326f123c7f2de09ff9a8bc9a6e95' => 
    array (
      0 => 'D:\\xampp\\htdocs\\redlist\\mods\\index2.tpl',
      1 => 1690128648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64bd529d836386_55064684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148177509664bd529d82de31_09839604', 'title');
?>
</title>
    <?php if ($_smarty_tpl->tpl_vars['_header']->value != '') {?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    
    
    </style>
    <?php echo '<script'; ?>
 src="mods/index.js"><?php echo '</script'; ?>
>    
</head>
<body>
    <div id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105359082264bd529d835dc5_24120921', 'content');
?>

    </div>   
</body>
</html><?php }
/* {block 'title'} */
class Block_148177509664bd529d82de31_09839604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_148177509664bd529d82de31_09839604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
$_title<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_105359082264bd529d835dc5_24120921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_105359082264bd529d835dc5_24120921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'content'} */
}
