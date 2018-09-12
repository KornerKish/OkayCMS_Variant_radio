<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-09-12 20:02:49
         compiled from "C:\OSPanel\domains\OkayCMS2\design\okay_shop\html\features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5327456325b9946b93c87f7-62635262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33eac0dd7202d508ee8e8597bb5b554e2b9876c0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\OkayCMS2\\design\\okay_shop\\html\\features.tpl',
      1 => 1534613055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5327456325b9946b93c87f7-62635262',
  'function' => 
  array (
    'categories_tree_sidebar' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'category' => 0,
    'lang' => 0,
    'categories' => 0,
    'level' => 0,
    'c' => 0,
    'lang_link' => 0,
    'prices' => 0,
    'features' => 0,
    'products' => 0,
    'other_filters' => 0,
    'link_tag' => 0,
    'furl' => 0,
    'f' => 0,
    'brand' => 0,
    'b' => 0,
    'key' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b9946b94b5686_59222132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9946b94b5686_59222132')) {function content_5b9946b94b5686_59222132($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['category']->value->subcategories&&$_smarty_tpl->tpl_vars['category']->value->has_children_visible)||($_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories&&$_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->has_children_visible)) {?>
<div class="catalog_nav filters tablet-hidden">
    <div class="h2 filter_name">
        <span data-language="features_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_catalog;?>
</span>
    </div>
    <div class="filters">
        <?php if (!function_exists('smarty_template_function_categories_tree_sidebar')) {
    function smarty_template_function_categories_tree_sidebar($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree_sidebar']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <div class="level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?>catalog_menu <?php } else { ?>subcatalog <?php }?>">
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                    <div class="catalog_item has_child">
                        <<?php if ($_smarty_tpl->tpl_vars['c']->value->id==$_smarty_tpl->tpl_vars['category']->value->id) {?>b<?php } else { ?>a<?php }?> class="catalog_link<?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?> sub_cat<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </<?php if ($_smarty_tpl->tpl_vars['c']->value->id==$_smarty_tpl->tpl_vars['category']->value->id) {?>b<?php } else { ?>a<?php }?>>
                    </div>
                <?php }?>
                <?php } ?>
            </div>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

        <?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories&&$_smarty_tpl->tpl_vars['category']->value->has_children_visible) {?>
            <?php smarty_template_function_categories_tree_sidebar($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>1));?>

        <?php } elseif ($_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories&&$_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->has_children_visible) {?>
            <?php smarty_template_function_categories_tree_sidebar($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['category']->value->path[$_smarty_tpl->tpl_vars['category']->value->level_depth-2]->subcategories,'level'=>1));?>

        <?php }?>
    </div>
</div>
<?php }?>


<?php if (($_smarty_tpl->tpl_vars['category']->value->brands||$_smarty_tpl->tpl_vars['prices']->value||$_smarty_tpl->tpl_vars['features']->value)&&count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
    <div class="filters_heading fn_switch lg-hidden">
        <span data-language="filters"><?php echo $_smarty_tpl->tpl_vars['lang']->value->filters;?>
</span>
        <i class="angle_icon"></i>
    </div>

    <div class="filters tablet-hidden">
        
        <?php if ($_smarty_tpl->tpl_vars['prices']->value&&count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
            <div class="h2 filter_name">
                <span data-language="features_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
</span>
            </div>

            <div class="filter_group">
                
                <div id="fn_slider_price"></div>

                
                <div class="price_range">
                    <div class="price_label">
                        <input class="min_input" id="fn_slider_min" name="p[min]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->min)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->min : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->min;?>
" type="text">
                    </div>

                    <div class="price_label max_price">
                        <input class="max_input" id="fn_slider_max" name="p[max]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->max)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->max : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->max;?>
" type="text">
                    </div>
                </div>
            </div>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['other_filters']->value) {?>
            
            <div class="h2 filter_name">
                <span data-language="features_manufacturer"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_other_filter;?>
</span>
            </div>
            <div class="filter_group">
                
                <div class="filter_item">
                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('filter'=>null,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp1, null, 0);?>
                    <<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
 class="filter_link<?php if ($_smarty_tpl->tpl_vars['link_tag']->value=='span') {?> fn_filter_link<?php }?><?php if (!$_GET['filter']) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                        <i class="filter_indicator"></i>
                        <span data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                    </<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
>
                </div>
                
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <div class="filter_item">
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('filter'=>$_smarty_tpl->tpl_vars['f']->value->url,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp2, null, 0);?>
                        <<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
 class="filter_link<?php if ($_smarty_tpl->tpl_vars['link_tag']->value=='span') {?> fn_filter_link<?php }?><?php if ($_GET['filter']&&in_array($_smarty_tpl->tpl_vars['f']->value->url,$_GET['filter'])) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                            <i class="filter_indicator"></i>
                            <span data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span>
                        </<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
>
                    </div>
                <?php } ?>
            </div>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['category']->value->brands) {?>
            
            <div class="h2 filter_name">
                <span data-language="features_manufacturer"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_manufacturer;?>
</span>
            </div>
            <div class="filter_group">
                
                <div class="filter_item">
                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>null,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp3, null, 0);?>
                    <<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
 class="filter_link<?php if ($_smarty_tpl->tpl_vars['link_tag']->value=='span') {?> fn_filter_link<?php }?><?php if (!$_smarty_tpl->tpl_vars['brand']->value->id&&!$_GET['b']) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                        <i class="filter_indicator"></i>
                        <span data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                    </<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
>
                </div>
                
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                    <div class="filter_item">
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp4, null, 0);?>
                        <<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
 class="filter_link<?php if ($_smarty_tpl->tpl_vars['link_tag']->value=='span') {?> fn_filter_link<?php }?><?php if ($_smarty_tpl->tpl_vars['brand']->value->id==$_smarty_tpl->tpl_vars['b']->value->id||$_GET['b']&&in_array($_smarty_tpl->tpl_vars['b']->value->id,$_GET['b'])) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                             <i class="filter_indicator"></i>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
>
                    </div>
                <?php } ?>
            </div>
        <?php }?>
        
        
        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
                
                <div class="h2 filter_name" data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>

                <div class="filter_group">
                    
                    <div class="filter_item">
                        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>null,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp5, null, 0);?>
                        <<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
 class="filter_link<?php if ($_smarty_tpl->tpl_vars['link_tag']->value=='span') {?> fn_filter_link<?php }?><?php if (!$_GET[$_smarty_tpl->tpl_vars['key']->value]) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                            <i class="filter_indicator"></i>
                            <span data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                        </<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
>
                    </div>
                    
                    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
                        <div class="filter_item">
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['o']->value->translit,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp6, null, 0);?>
                            <<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
 class="filter_link<?php if ($_smarty_tpl->tpl_vars['link_tag']->value=='span') {?> fn_filter_link<?php }?><?php if ($_GET[$_smarty_tpl->tpl_vars['f']->key]&&in_array($_smarty_tpl->tpl_vars['o']->value->translit,$_GET[$_smarty_tpl->tpl_vars['f']->key])) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                <i class="filter_indicator"></i>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </<?php echo $_smarty_tpl->tpl_vars['link_tag']->value;?>
>
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
