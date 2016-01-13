<a href="flow.php" class="a"></a>
    	<i><?php echo $this->_var['number']; ?></i>
    	<div class="shop_wrap" id="shop_wrap">
        	<?php if ($this->_var['cart_list']): ?>
        	<div class="goods_wrap">
            	<?php $_from = $this->_var['cart_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_77616400_1450394889');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_77616400_1450394889']):
?>
            	<dl>
                	<dt><a href="<?php echo $this->_var['goods_0_77616400_1450394889']['url']; ?>"><img src="<?php echo $this->_var['goods_0_77616400_1450394889']['thumb']; ?>" /></a></dt>
                    <dd class="name"><a href="<?php echo $this->_var['goods_0_77616400_1450394889']['url']; ?>"><?php echo $this->_var['goods_0_77616400_1450394889']['short_name']; ?></a></dd>
                    <dd class="price"><p><span><?php echo $this->_var['goods_0_77616400_1450394889']['shop_price']; ?></span>x<font><?php echo $this->_var['goods_0_77616400_1450394889']['goods_number']; ?></font></p><a href="javascript:deleteCartGoods(<?php echo $this->_var['goods_0_77616400_1450394889']['rec_id']; ?>);deleteCartGoods2(<?php echo $this->_var['goods_0_77616400_1450394889']['rec_id']; ?>);">删除</a></dd>
                </dl>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             
            </div>
            <div class="attr">
            	<dl>
                	<dt>共<span><?php echo $this->_var['number']; ?></span>件商品</dt>
                    <dd>总计：<span><?php echo $this->_var['amount']; ?></span></dd>
                </dl>
                <div><a href="flow.php" class="btns">去购物车结算</a></div>
            </div>
            <?php else: ?>
            	<div class="no_shopping"><p>购物车中还没有商品，赶紧选购吧！</p></div>
            <?php endif; ?>
        </div>

<script type="text/javascript">
function deleteCartGoods2(rec_id)
{
	Ajax.call('delete_cart_goods2.php', 'id='+rec_id, deleteCartGoodsResponse2, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse2(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO2").html(res.content);
  }
}
</script> 