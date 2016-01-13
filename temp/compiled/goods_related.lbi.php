<?php if ($this->_var['related_goods']): ?>
 <div class="onlyPageX">
    <h3>相关商品</h3>
    <ul class="clearfix">
     <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
      <li>
      	<dl>
        	<dt><a class="track" href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank"><img alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" width="224" height="224"></a></dt>
            <dd class="name"><a class="track" href="<?php echo $this->_var['releated_goods_data']['url']; ?>" target="_blank"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></dd>
            <dd class="price">
            	<span><em><?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?><?php else: ?>
<?php echo $this->_var['releated_goods_data']['shop_price']; ?>
<?php endif; ?></em></span>
				
               <a onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,this);" class="btns">加入购物车</a>
            </dd>
        </dl>
      
        <p></p>
                
       </li>  
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>

<?php endif; ?>
