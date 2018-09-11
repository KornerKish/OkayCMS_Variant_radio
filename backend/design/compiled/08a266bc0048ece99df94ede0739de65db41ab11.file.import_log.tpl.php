<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-27 20:33:51
         compiled from "backend\design\html\import_log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18573418435b8435ff216bd0-45223107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a266bc0048ece99df94ede0739de65db41ab11' => 
    array (
      0 => 'backend\\design\\html\\import_log.tpl',
      1 => 1534613053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18573418435b8435ff216bd0-45223107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'logs_count' => 0,
    'keyword' => 0,
    'filter' => 0,
    'current_limit' => 0,
    'logs' => 0,
    'log' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b8435ff2d7be3_97103038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8435ff2d7be3_97103038')) {function content_5b8435ff2d7be3_97103038($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->import_log_products, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>



<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <?php if ($_smarty_tpl->tpl_vars['logs_count']->value) {?>
                <div class="box_heading heading_page">
                    <?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['logs_count']->value,'Найден','Найдено','Найдено');?>
 <?php echo $_smarty_tpl->tpl_vars['logs_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['logs_count']->value,'товар','товаров','товара');?>

                    <?php } else { ?>
                       <?php echo $_smarty_tpl->tpl_vars['logs_count']->value;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['logs_count']->value,'товар','товаров','товара');?>

                    <?php }?>
                </div>
            <?php } else { ?>
                <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_log_empty, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <?php }?>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
            <input type="hidden" name="module" value="ImportLogAdmin">
            <div class="input-group">
                <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                <span class="input-group-btn">
                    <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                </span>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="boxed_sorting">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select class="selectpicker" onchange="location = this.value;">
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'page'=>null,'limit'=>null,'filter'=>null),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['filter']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'page'=>null,'limit'=>null,'filter'=>'added'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='added') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_added, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'page'=>null,'limit'=>null,'filter'=>'updated'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='updated') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_updated, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        </select>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm 12">
                        <div class="pull-right">
                            <select onchange="location = this.value;" class="selectpicker">
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>10),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==10) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 10</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>25),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==25) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 25</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>50),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==50) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 50</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>100),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==100) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 100</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>200),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==200) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 200</option>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>500),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==500) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 500</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="okay_list">
                        
                        <div class="okay_list_head">
                           <div class="okay_list_heading okay_list_check">№</div>
                           <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                           <div class="okay_list_heading okay_list_log_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
 </div>
                            <div class="okay_list_heading okay_list_log_status">
                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_status, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                        </div>
                        
                        <div class="okay_list_body">
                            <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['log']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
 $_smarty_tpl->tpl_vars['log']->iteration++;
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_check"><?php echo $_smarty_tpl->tpl_vars['log']->iteration;?>
</div>
                                        <div class="okay_list_boding okay_list_photo">
                                           <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['log']->value->product->images), null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['log']->value->product_id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
" target="_blank">
                                                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->filename, ENT_QUOTES, 'UTF-8', true),55,55);?>
"/>
                                                </a>
                                            <?php } else { ?>
                                                <img height="55" width="55" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_log_name">
                                            <a class="link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['log']->value->product_id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value->variant_name) {?>
                                                <span class="text_grey">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
)</span>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_log_status">
                                            <?php if ($_smarty_tpl->tpl_vars['log']->value->status=='added') {?>
                                                <i class="fa fa-plus font-2xl text-success" title="<?php echo $_smarty_tpl->tpl_vars['log']->value->status;?>
"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['log']->value->status=='updated') {?>
                                                <i class="fa fa-refresh font-2xl text-info" title="<?php echo $_smarty_tpl->tpl_vars['log']->value->status;?>
"></i>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->import_log_empty, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }} ?>
