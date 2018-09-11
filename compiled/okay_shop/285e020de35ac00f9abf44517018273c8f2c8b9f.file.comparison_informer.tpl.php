<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-21 21:28:56
         compiled from "C:\OSPanel\domains\OkayCMS2\design\okay_shop\html\comparison_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13613843225b7c59e84d9590-95934419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '285e020de35ac00f9abf44517018273c8f2c8b9f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\OkayCMS2\\design\\okay_shop\\html\\comparison_informer.tpl',
      1 => 1534613055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13613843225b7c59e84d9590-95934419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparison' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b7c59e84decc1_35496246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7c59e84decc1_35496246')) {function content_5b7c59e84decc1_35496246($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
comparison">
        <i class="compare_icon"></i>
        <span class="informer_name tablet-hidden" data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
        <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
)</span>
    </a>
<?php } else { ?>
    <div>
        <i class="compare_icon"></i>
        <span class="informer_name tablet-hidden" data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
    </div>
<?php }?>
<?php }} ?>
