<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/yunchaoshi/category.css" rel="stylesheet" type="text/css" />
<style>
	.productlist{width:auto;}
</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'lizi_category.js')); ?>
<div id="wrapper"> 
   
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="main cle"> 
    
	<div class="search_goods">      
       <?php if ($this->_var['goods_list']): ?>
    <div class="sort">
  <div class="bd">
        <?php if ($this->_var['intromode'] == 'best'): ?>
         <span><?php echo $this->_var['lang']['best_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'new'): ?>
         <span><?php echo $this->_var['lang']['new_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'hot'): ?>
         <span><?php echo $this->_var['lang']['hot_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'promotion'): ?>
         <span><?php echo $this->_var['lang']['promotion_goods']; ?></span>
         <?php else: ?>
         <span><?php echo $this->_var['lang']['search_result']; ?></span>
         <?php endif; ?>
         
          <?php if ($this->_var['goods_list']): ?>
          <form action="search.php" method="post" name="listform" id="form" style="padding-left:10px; padding-top:5px; position:relative;">
              <select name="sort">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['sort'],'selected'=>$this->_var['pager']['search']['sort'])); ?>
              </select>
              <select name="order">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['order'],'selected'=>$this->_var['pager']['search']['order'])); ?>
              </select>
              <input type="image" name="imageField" src="themes/yunchaoshi/images/bnt_go.gif" alt="go" style="position:absolute; top:5px; left:175px;"/>
              <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              <?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?>
                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </form>
          <?php endif; ?>
  </div>
  <div class="search_num">共<b><?php echo $this->_var['pager']['record_count']; ?></b>个商品 <span class="search_btn" id="search_btn"><a <?php if ($this->_var['pager']['page_prev']): ?>href="<?php echo $this->_var['pager']['page_prev']; ?>"<?php else: ?>href="javascript:void(0);"<?php endif; ?> class="iconfont"></a> <span> 
    <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['pager']['page'] == $this->_var['key']): ?><em><?php echo $this->_var['key']; ?></em><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>/<?php echo $this->_var['pager']['page_count']; ?> </span> <a <?php if ($this->_var['pager']['page_next']): ?>href="<?php echo $this->_var['pager']['page_next']; ?>"<?php else: ?>href="javascript:void(0);"<?php endif; ?> class="iconfont"></a> </span> </div>
</div>
    <div class="productlist productlist2">
        <ul class="cle">    
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
          <?php if ($this->_var['goods']['goods_id']): ?>
          <li><dl><dt> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="productitem"> <span class="productimg"> <img width="250" height="250" title="<?php echo $this->_var['goods']['goods_name']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" style="display: block;"> </span>
    <span class="productname"><?php echo $this->_var['goods']['goods_name']; ?></span> <span class="nalaprice xszk"><b> 
      <?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?> <?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?> 
      </b></span></a></dt> <dd><a onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,this)" class="btns" target="_blank" rel="nofollow">加入购物车</a></dd> </dl></li>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          
        
        </ul>
        <br clear="all">
      </div>
      
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        <?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        <?php if ($this->_var['key'] != 'button_compare'): ?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php else: ?>
        var button_compare = '';
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


        var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
        window.onload = function()
        {
          Compare.init();
          fixpng();
        }
        var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
        var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
        var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
        </script>
        <?php else: ?>
        <div style="padding:20px 0px; text-align:center"><?php echo $this->_var['lang']['no_search_result']; ?></div>
        <?php endif; ?>
      <?php echo $this->fetch('library/pages.lbi'); ?> </div>
  </div>
   
  
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
