<div class="clearfix">
	<div class="hot_left"><?php 
$k = array (
  'name' => 'ads',
  'num' => '1',
  'id' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    <div class="hot_right">
    	<?php if ($this->_var['hot_goods']): ?>
    	<div class="clearfix">
        	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_74737600_1450394889');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_74737600_1450394889']):
?>
        	<dl>
            	<dt><a href="<?php echo $this->_var['goods_0_74737600_1450394889']['url']; ?>" target="_blank"><img height="230" width="230" alt="<?php echo htmlspecialchars($this->_var['goods_0_74737600_1450394889']['name']); ?>" src="<?php echo $this->_var['goods_0_74737600_1450394889']['thumb']; ?>"></a></dt>
                <dd>
                	<p class="name"><a href="<?php echo $this->_var['goods_0_74737600_1450394889']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_74737600_1450394889']['short_style_name']; ?></a></p>
                    <p class="price"><span><?php if ($this->_var['goods_0_74737600_1450394889']['promote_price'] != ""): ?> 
          <?php echo $this->_var['goods_0_74737600_1450394889']['promote_price']; ?> 
          <?php else: ?> 
          <?php echo $this->_var['goods_0_74737600_1450394889']['shop_price']; ?> 
          <?php endif; ?></span><del><?php echo $this->_var['goods_0_74737600_1450394889']['market_price']; ?></del></p>
          			<p class="adds"><a onclick="addToCart(<?php echo $this->_var['goods_0_74737600_1450394889']['id']; ?>,this);" class="btns">加入购物车</a></p>
                </dd>
            </dl>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
        <?php endif; ?> 
    </div>
    
</div>
<div class="hot_ads"><?php 
$k = array (
  'name' => 'ads',
  'num' => '1',
  'id' => '4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>

