<div class="sort">
  <div class="bd">
    <form method="GET" name="listform">
      <a title="销量" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>class="curr"<?php endif; ?> rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">销量</span></a> <a title="价格" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>class="curr"<?php endif; ?> rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">价格</span></a> <a title="上架时间" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>class="curr"<?php endif; ?>rel="nofollow"><span class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>">上架时间</span></a>
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
    </form>
  </div>
  <div class="search_num">共<b><?php echo $this->_var['pager']['record_count']; ?></b>个商品 <span id="search_btn" class="search_btn"><a <?php if ($this->_var['pager']['page_prev']): ?>href="<?php echo $this->_var['pager']['page_prev']; ?>"<?php else: ?>href="javascript:void(0);"<?php endif; ?> class="iconfont"></a> <span> 
    <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['pager']['page'] == $this->_var['key']): ?><em><?php echo $this->_var['key']; ?></em><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>/<?php echo $this->_var['pager']['page_count']; ?> </span> <a <?php if ($this->_var['pager']['page_next']): ?>href="<?php echo $this->_var['pager']['page_next']; ?>"<?php else: ?>href="javascript:void(0);"<?php endif; ?> class="iconfont"></a> </span> </div>
</div>
<div class="productlist">
  <ul class="cle">
    
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_85593400_1450427178');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_85593400_1450427178']):
?> 
    <?php if ($this->_var['goods_0_85593400_1450427178']['goods_id']): ?>
    <li> 
    	<dl>
    	<dt><a href="<?php echo $this->_var['goods_0_85593400_1450427178']['url']; ?>" target="_blank" class="productitem"> <span class="productimg"> <img width="150" height="150" title="<?php echo $this->_var['goods_0_85593400_1450427178']['goods_name']; ?>" alt="<?php echo $this->_var['goods_0_85593400_1450427178']['goods_name']; ?>" src="<?php echo $this->_var['goods_0_85593400_1450427178']['goods_thumb']; ?>" style="display: block;"> </span>
    <span class="productname"><?php echo $this->_var['goods_0_85593400_1450427178']['goods_name']; ?></span> <span class="nalaprice xszk"><b> 
      <?php if ($this->_var['goods_0_85593400_1450427178']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_85593400_1450427178']['promote_price']; ?> <?php else: ?><?php echo $this->_var['goods_0_85593400_1450427178']['shop_price']; ?><?php endif; ?> 
      </b></span></a> </dt><dd><a onclick="addToCart(<?php echo $this->_var['goods_0_85593400_1450427178']['goods_id']; ?>,this)" class="btns" target="_blank" rel="nofollow">加入购物车</a></dd>
      </dl> </li>
    
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php if ($this->_var['pager']['page'] != $this->_var['pager']['page_count']): ?>
    <li> <a id="nextpage" class="nextpage" href="<?php echo $this->_var['pager']['page_next']; ?>"><i></i></a> </li>
    <?php endif; ?>
  </ul>
  <br clear="all">
</div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
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
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>