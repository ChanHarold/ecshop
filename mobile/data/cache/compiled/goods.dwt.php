<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
  <div class="ect-bg">
    <header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg"> <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> <span><?php echo $this->_var['title']; ?></span> <a href="javascript:;"  onClick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune icon-write"></a></header>
    <nav class="ect-nav ect-nav-list" style="display:none;"> <?php echo $this->fetch('library/page_menu.lbi'); ?> </nav>
  </div>
  
  <div id="focus" class="focus goods-focus ect-padding-lr ect-margin-tb">
    <div class="hd">
      <ul>
      </ul>
    </div>
    <div class="bd">
      <ul id="Gallery">
        <li><a href="<?php echo $this->_var['goods']['goods_img']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <?php if ($this->_foreach['no']['iteration'] > 1): ?>
        <li><a href="<?php echo $this->_var['picture']['img_url']; ?>"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['picture']['img_desc']; ?>" /></a></li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
  </div>
  
  <div class="goods-info ect-padding-tb"> 
    
    <section class="ect-margin-tb ect-margin-lr goods-title">
      <h4 class="title pull-left"><?php echo $this->_var['goods']['goods_style_name']; ?></h4>
      <span class="pull-right text-center <?php if ($this->_var['sc'] == 1): ?>ect-colory<?php endif; ?> ect-padding-lr" onClick="collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id='ECS_COLLECT'> <i class="fa <?php if ($this->_var['sc'] == 1): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i><br>
      <?php echo $this->_var['lang']['btn_collect']; ?> </span> </section>
    <section class="ect-margin-tb ect-margin-lr ">
      <p><span class="pull-left"><?php echo $this->_var['lang']['amount']; ?>：<b class="ect-colory" id="ECS_GOODS_AMOUNT"></b></span><span class="pull-right"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['sales_count']; ?> <?php echo $this->_var['lang']['piece']; ?></span></p>
      <p><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['lang']['promote_price']; ?><?php else: ?><?php echo $this->_var['lang']['shop_price']; ?><?php endif; ?><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
        <?php echo $this->_var['goods']['promote_price']; ?>  
        <?php else: ?> 
        <?php echo $this->_var['goods']['shop_price_formated']; ?> 
        <?php endif; ?> <small> <del><?php if ($this->_var['cfg']['SHOW_MARKETPRICE']): ?><?php echo $this->_var['goods']['market_price']; ?> <?php endif; ?></del></small>
	  </p>
	  <p><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><strong id="leftTime" class="price"><?php echo $this->_var['lang']['please_waiting']; ?></strong><?php endif; ?></p>
		 
    </section>
    <?php if ($this->_var['promotion']): ?>
    <section class="ect-margin-tb ect-margin-bottom0 ect-padding-tb goods-promotion ect-padding-lr ">
      <h5><b><?php echo $this->_var['lang']['activity']; ?>：</b></h5>
      <p class="ect-border-top ect-margin-tb"> 
        <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
        <?php if ($this->_var['item']['type'] == "snatch"): ?> 
        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['snatch']; ?>"><i class="label tbqb"><?php echo $this->_var['lang']['snatch_act']; ?></i> [<?php echo $this->_var['lang']['snatch']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
        <?php elseif ($this->_var['item']['type'] == "group_buy"): ?> 
        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['group_buy']; ?>"><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> [<?php echo $this->_var['lang']['group_buy']; ?>]<i class="pull-right fa fa-angle-right"></i></a> 
        <?php elseif ($this->_var['item']['type'] == "auction"): ?> 
        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['auction']; ?>"><i class="label pm"><?php echo $this->_var['lang']['auction_act']; ?></i> [<?php echo $this->_var['lang']['auction']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
        <?php elseif ($this->_var['item']['type'] == "favourable"): ?> 
        <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"> 
        <?php if ($this->_var['item']['act_type'] == 0): ?> 
        <i class="label mz"><?php echo $this->_var['lang']['favourable_mz']; ?></i> 
        <?php elseif ($this->_var['item']['act_type'] == 1): ?> 
        <i class="label mj"><?php echo $this->_var['lang']['favourable_mj']; ?></i> 
        <?php elseif ($this->_var['item']['act_type'] == 2): ?> 
        <i class="label zk"><?php echo $this->_var['lang']['favourable_zk']; ?></i> 
        <?php endif; ?><?php echo $this->_var['item']['act_name']; ?> <i class="pull-right fa fa-angle-right"></i></a> 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </p>
    </section>
    <?php endif; ?> 
    
    
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <section class="ect-padding-lr ect-padding-tb goods-option">
        <div class="goods-optionc"> 
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?>
          <div class="goods-option-con"> <span><?php echo $this->_var['spec']['name']; ?>：</span>
            <div class="goods-option-conr"> 
               
              <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
              <?php if ($this->_var['cfg']['GOODSATTR_STYLE'] == 1): ?> 
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?></label>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php else: ?>
              <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?> 
              <?php else: ?> 
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]</label>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?> 
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
        <div class="goods-num"> <span class="pull-left"><?php echo $this->_var['lang']['number']; ?>：</span> 
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
          <div class="input-group pull-left wrap"><span class="input-group-addon sup" onClick="changePrice('1')">-</span>
            <input type="text" class="form-contro form-num"  name="number" id="goods_number" autocomplete="off" value="1" onFocus="back_goods_number()"  onblur="changePrice('2')"/>
            <span class="input-group-addon plus" onClick="changePrice('3')">+</span></div>
          <?php else: ?>
          <input type="text" class="form-contro form-num" readonly value="<?php echo $this->_var['goods']['goods_number']; ?> "/>
          <?php endif; ?> 
        </div>
      </section>
      <section class="goods-more-a"> 
      <a class="ect-padding-lr ect-padding-tb" href="<?php echo url('goods/info',array('id'=>$this->_var['goods']['goods_id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_brief']; ?></span> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
      <a class="ect-padding-lr ect-padding-tb" href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_comment']; ?></span> <span class="pull-right"><span class="ect-color"><?php echo $this->_var['comments']['count']; ?></span><?php echo $this->_var['lang']['comment_num']; ?> <span class="ect-color"><?php echo $this->_var['comments']['favorable']; ?>%</span><?php echo $this->_var['lang']['favorable_comment']; ?> <i class="fa fa-chevron-right"></i></span></a> 
      </section>
      <div class="ect-padding-lr ect-padding-tb goods-submit">
        <div><a type="botton" class="btn btn-info ect-btn-info ect-colorf ect-bg" href="javascript:addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['lang']['buy_now']; ?></a></div>
      </div>
      <section class="user-tab ect-border-bottom0" style="display:none;">
        <div id="is-nav-tabs" style="height:3.15em; display:none;"></div>
        
        <ul class="nav nav-tabs text-center">
          <li class="col-xs-4 active"><a href="#one" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['goods_brief']; ?></a></li>
          <li class="col-xs-4"><a href="#two" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['goods_attr']; ?></a></li>
          <li class="col-xs-4"><a href="#three" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['user_comment']; ?>(<?php echo $this->_var['goods']['comment_count']; ?>)</a></li>
        </ul>
        
        <div class="tab-content">
          <div class="tab-pane tab-info active" id="one"> <?php echo $this->_var['goods']['goods_desc']; ?></div>
          <div class="tab-pane tab-att" id="two">
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
              <tr>
                <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
              </tr>
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <tr>
                <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
                <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
          </div>
          <div class="tab-pane tab-msg" id="three">
            <ul class="msg">
              <?php echo $this->fetch('library/comments.lbi'); ?>
            </ul>
          </div>
        </div>
      </section>
    </form>
  </div>
  <div class="goods-related ect-padding-lr ect-padding-tb">
    <p><strong><?php echo $this->_var['lang']['releate_goods']; ?>：</strong></p>
    
    <div id="picScroll" class="picScroll">
      <div class="hd">
        <ul>
        </ul>
      </div>
      <div class="bd">
        <ul>
          <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_50697700_1452655486');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_50697700_1452655486']):
        $this->_foreach['goods']['iteration']++;
?>
          <li><a href="<?php echo $this->_var['goods_0_50697700_1452655486']['url']; ?>"><img _src="<?php echo $this->_var['goods_0_50697700_1452655486']['goods_thumb']; ?>" src="<?php echo $this->_var['goods_0_50697700_1452655486']['goods_thumb']; ?>" /></a>
            <p class="ect-color"> 
              <?php if ($this->_var['goods_0_50697700_1452655486']['promote_price']): ?> 
              <?php echo $this->_var['goods_0_50697700_1452655486']['formated_promote_price']; ?>
              <?php else: ?> 
              <?php echo $this->_var['goods_0_50697700_1452655486']['shop_price']; ?>
              <?php endif; ?> 
            </p>
            <p class="text-left"><?php echo $this->_var['goods_0_50697700_1452655486']['short_name']; ?></p>
          </li>
          <?php if ($this->_foreach['goods']['iteration'] % 3 == 0): ?></ul><ul><?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    
     
  </div>
  <footer class="logo"><a href="http://www.ectouch.cn" title="ECTouch官网" target="_blank"><img src="__TPL__/images/copyright.png" width="176" height="60"></a></footer>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript" src="__TPL__/js/lefttime.js"></script> 
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){Code.photoSwipe('a', '#Gallery');}, false);


/*倒计时*/
var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
var goodsattr_style = 1;
var goodsId = <?php echo $this->_var['goods_id']; ?>;

var gmt_end_time = "<?php echo empty($this->_var['goods']['gmt_end_time']) ? '0' : $this->_var['goods']['gmt_end_time']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;

var use_how_oos = <?php echo C('use_how_oos');?>;
onload = function(){
  changePrice(2);
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
function back_goods_number(){
 var goods_number = document.getElementById('goods_number').value;
  document.getElementById('back_number').value = goods_number;
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice(type)
{
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  if(type == 1){qty--;}
  if(type == 3){qty++;}
  if(qty <=0 ){qty=1;}
  if(!/^[0-9]*$/.test(qty)){qty = document.getElementById('back_number').value;}
  document.getElementById('goods_number').value = qty;
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  $.get('<?php echo url("goods/price");?>', {'id':goodsId,'attr':attr,'number':qty}, function(data){
    changePriceResponse(data);
  }, 'json');
}


/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
    alert(res.err_msg);
  } else {
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
    alert(res.err_msg);
  } else {
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

/*判断user-tab是否距顶，距顶悬浮*/
var nav_tabs_top = $(".user-tab .nav-tabs").offset().top;//获取nav-tabs距离顶部的位
function func_scroll(){//定义一个事件效果置
	var documentTop = $(document).scrollTop();//获取滚动条距离顶部距离
	if(nav_tabs_top <= documentTop){
		$(".user-tab").addClass("user-tab-fixed");
		$("#is-nav-tabs").css("display","block");
	}else{
		$(".user-tab").removeClass("user-tab-fixed");
		$("#is-nav-tabs").css("display","none");		
	}
}

window.onscroll = function () {
	 func_scroll();
}
</script> 
<script type="text/javascript">
				TouchSlide({ 
					slideCell:"#picScroll",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:"true", //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});
			</script>
</body></html>