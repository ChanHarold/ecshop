<?php if ($this->_var['new_goods']): ?>
<div class="title_new">新品推荐</div>
<div class="goods_new2" id="goods_new">
	<ul>
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  		<li>
        	<dl>
            	<dt><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a></dt>
                <dd class="name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></dd>
                <dd class="price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?></dd>
          		<dd class="buys"><a onclick="addToCart(<?php echo $this->_var['goods']['id']; ?>,this);" class="btns">加入购物车</a></dd>
            </dl>
        </li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  	</ul>
  
</div>
<?php endif; ?>

<script>
	$(function(){
		function Scroll2(id,l,r,auto){
			this.id=$("#"+id);
			this.ul=this.id.find("ul");
			this.li=this.ul.find("li");
			this.done=true;
			var _this=this;
			this.init.apply(this,arguments);
			
		}
		
		Scroll2.prototype={
			init:function(){
				this.ul.css("width",this.li.outerWidth()*this.li.length);
				this.event();
				this.auto();
			},
			auto:function(){
				var me=this;
				this.timer=null;
				this.timer=setInterval(function(){
					me.ul.animate({left:-me.li.outerWidth()},"fast",function(){
						me.ul=me.id.find("ul");
						me.li=me.id.find("li");
						me.ul.append(me.li.eq(0));
						me.ul.css("left",0);
					});
				},5000);
				
			},
			event:function(){
				var self=this;
				this.id.hover(function(){
					clearInterval(self.timer);
				},function(){
					self.auto();
				});
			}
		}
		new Scroll2("goods_new");
	});
</script>