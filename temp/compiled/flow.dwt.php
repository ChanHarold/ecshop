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
<link href="themes/yunchaoshi/cart.css" rel="stylesheet" type="text/css" />
<link href="themes/yunchaoshi/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'lizi_flow.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js,lizi_common.js')); ?>
<?php echo $this->fetch('library/ur_here.lbi'); ?> 
<?php if ($this->_var['step'] == "cart"): ?> 
 

<?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div id="main">
  <div class="cart-box" id="cart-box">
    <div class="hd"> <span class="no2" id="itemsnum-top">商品名称</span> <span class="no4">单价</span> <span>数量</span> <span>小计</span> <span>操作</span></div>
    <div class="goods-list">
      <ul>
        
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li class="cle hover"> 
          
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
          
          <div class="pic"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"> <img alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a> </div>
          <div class="name"> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> 
            <?php if ($this->_var['show_goods_attribute'] == 1): ?> 
            <span style="color:#FF0000"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></span> 
            <?php endif; ?> 
            <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
            <?php endif; ?> 
            <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
            <?php endif; ?></a>
            <p> </p>
          </div>
          
          <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
          <div class="pic"> <img src="themes/yunchaoshi/images/czlb.png"></div>
          <div class="name"> <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
            <p>
            
            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
              <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            </p>
          </div>
          <?php else: ?>
          <div class="pic"> <img src="themes/yunchaoshi/images/yhcx.png"></div>
          <div class="name"><?php echo $this->_var['goods']['goods_name']; ?>
            <p></p>
          </div>
          <?php endif; ?>
          <div class="price-xj">
            <p><em><?php echo $this->_var['goods']['goods_price']; ?></em></p>
          </div>
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
          <div class="nums"> <span class="minus" title="减少1个数量" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" >-</span>
            <input type="text" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>"  onchange="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,0)">
            <span class="add" title="增加1个数量" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);">+</span> </div>
          <?php else: ?> 
         <div class="nums" style="text-indent:35px; font-size:14px;"> <?php echo $this->_var['goods']['goods_number']; ?> </div>
          <?php endif; ?>
          <div class="price-xj"><span></span> <em id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></em> </div>
          <div class="del"> <a class="btn-del" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>';">删除</a> </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    
    <div class="fd cle">
    <p>总价：<span class="red"><strong id="totalSkuPrice"><?php echo $this->_var['total']['goods_price']; ?></strong></span></p>
      
      <div class="fr" id="price-total">
        <p><a href="flow.php?step=checkout" class="btn">去结算</a><a href="./" class="btn" style="background:#F12444;">继续购物</a></p>
      </div>
    </div>
  </div>
</div>

<?php if ($_SESSION['user_id'] > 0): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
</div>
<div class="blank"></div>
<?php endif; ?> 

<?php if ($this->_var['fittings_list']): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?> 
<script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
<?php endif; ?> 

<?php endif; ?> 

<?php if ($this->_var['favourable_list']): ?>
<div class="flowBox cart_main2">
  <h6><span><?php echo $this->_var['lang']['label_favourable']; ?></span></h6>
  <?php $_from = $this->_var['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'favourable');if (count($_from)):
    foreach ($_from AS $this->_var['favourable']):
?>
  <form action="flow.php" method="post">
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#ccc">
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_name']; ?></td>
        <td bgcolor="#ffffff"><strong><?php echo $this->_var['favourable']['act_name']; ?></strong></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_period']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['start_time']; ?> --- <?php echo $this->_var['favourable']['end_time']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_range']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['lang']['far_ext'][$this->_var['favourable']['act_range']]; ?><br />
          <?php echo $this->_var['favourable']['act_range_desc']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_amount']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['favourable']['formated_min_amount']; ?> --- <?php echo $this->_var['favourable']['formated_max_amount']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['favourable_type']; ?></td>
        <td bgcolor="#ffffff"><span class="STYLE1"><?php echo $this->_var['favourable']['act_type_desc']; ?></span> 
          <?php if ($this->_var['favourable']['act_type'] == 0): ?> 
          <?php $_from = $this->_var['favourable']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?><br />
          <input type="checkbox" value="<?php echo $this->_var['gift']['id']; ?>" name="gift[]" />
          <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" class="f6"><?php echo $this->_var['gift']['name']; ?></a> [<?php echo $this->_var['gift']['formated_price']; ?>] 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?></td>
      </tr>
      <?php if ($this->_var['favourable']['available']): ?>
            <tr>
              <td align="right" bgcolor="#ffffff">&nbsp;</td>
              <td align="center" bgcolor="#ffffff"><input type="submit" class="btn" alt="Add to cart"  border="0" style="font-size: 16px;
padding: 10px 20px 12px; height:auto; cursor:pointer; border:none;" value="加入购物车" /></td>
            </tr>
            <?php endif; ?>
    </table>
    <input type="hidden" name="act_id" value="<?php echo $this->_var['favourable']['act_id']; ?>" />
    <input type="hidden" name="step" value="add_favourable" />
  </form>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>

<?php endif; ?> 

<?php if ($this->_var['step'] == "consignee"): ?>
<div class="cle cart_main"> 
   
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?> 
  <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
  <div class="aui_outer"> 
     
    <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
    <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
      <?php echo $this->fetch('library/consignee.lbi'); ?>
<scrpit>
</script>
    </form>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['step'] == "checkout"): ?>
<style>
	.here {display:none;}
	
</style>
<div class="cle cart_main cart_mains" style="margin-top:15px;">  
  <div class="flowBox_cart">
    <h6 class="h6"><span style="padding-left:0px;">填写并核对订单信息</span></h6>
    <div class="flowBox_in">
      <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        // var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
        <div class="flowBox" >
          <h6 class="b1"><span>收货地址</span><a href="flow.php?step=consignee" class="f6"><?php echo $this->_var['lang']['modify']; ?></a></h6>
          <div class="flows clearfix">
          	<div class="flows2">
            	<b><img src="themes/yunchaoshi/images/sett_green.png" /></b>
            	<div>
                	<dl>
                    	<dd><?php echo $this->_var['lang']['consignee_name']; ?>：<span><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></span></dd>
                        <dd><?php if ($this->_var['total']['real_goods_count'] > 0): ?><?php echo $this->_var['lang']['detailed_address']; ?>：<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>&nbsp;<?php endif; ?></dd>
                        <dd><?php echo $this->_var['lang']['phone']; ?>：<?php echo $this->_var['consignee']['tel']; ?>&nbsp;</dd>
                        <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
                        <dd><?php echo $this->_var['lang']['sign_building']; ?>：<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>&nbsp;</dd>
                        <dd><?php echo $this->_var['lang']['deliver_goods_time']; ?>：<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?></dd>
                         <?php endif; ?>
                    </dl>
                </div>
            </div>
          </div>
        </div>
        <div class="blank"></div>
         <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
        <div class="flowBox">
          <h6 class="b2"><span>付款方式</span></h6>
          
          <div class="payment" id="paymentTable">
          	<div class="flows">
                <dl>
                <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?> 
                
                <dd><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/><span><?php echo $this->_var['payment']['pay_name']; ?></span></dd>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </dl>
            </div>
          </div>
          
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
            
          </table>
        </div>
        <?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?>
        <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
        
        <div class="blank"></div>
        <?php else: ?>
        <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?> 
        <div class="flowBox" style="border:">
          <h6 class="b4"><span><?php echo $this->_var['lang']['goods_list']; ?></span><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f6"><?php echo $this->_var['lang']['modify']; ?></a><?php endif; ?></h6>
          <div class="flows flow_table">
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
              <?php if ($this->_var['show_marketprice']): ?>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['market_prices']; ?></th>
              <?php endif; ?>
              <th bgcolor="#ffffff"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['number']; ?></th>
              <th bgcolor="#ffffff"><?php echo $this->_var['lang']['subtotal']; ?></th>
            </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr align="center">
              <td bgcolor="#ffffff"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50"/></a><?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
                <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
                  <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
                  <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
                
                <?php else: ?> 
                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a> 
                <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
                <?php elseif ($this->_var['goods']['is_gift']): ?> 
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
                <?php endif; ?> 
                <?php endif; ?> 
                <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?></td>
              <td bgcolor="#ffffff"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
              <?php if ($this->_var['show_marketprice']): ?>
              <td bgcolor="#ffffff"><?php echo $this->_var['goods']['formated_market_price']; ?></td>
              <?php endif; ?>
              <td bgcolor="#ffffff"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_number']; ?></td>
              <td bgcolor="#ffffff" style="color:#f00;"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php if (! $this->_var['gb_deposit']): ?>
            <tr align="right">
              <td bgcolor="#ffffff" colspan="7" style="border:none; font-size:14px;"><?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br />
                
                <?php endif; ?> 
                <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?></td>
            </tr>
            <?php endif; ?>
          </table>
          </div>
        </div>
       
        <div class="blank"></div>
        <?php if ($this->_var['pack_list']): ?>
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="packTable">
            <tr>
              <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
              <th width="35%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
              <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_free_money']; ?></td>
              <td valign="top" bgcolor="#ffffff" align="center"><?php if ($this->_var['pack']['pack_img']): ?> 
                <a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a> 
                <?php else: ?> 
                <?php echo $this->_var['lang']['no']; ?> 
                <?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        </div>
        <div class="blank"></div>
        <?php endif; ?> 
        
        <?php if ($this->_var['card_list']): ?>
        <div class="flowBox"  style="display:none;">
          <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="cardTable">
            <tr>
              <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
              <th bgcolor="#ffffff" width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
              <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th bgcolor="#ffffff" scope="col"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  /></td>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_card_fee']; ?></td>
              <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_free_money']; ?></td>
              <td valign="top" align="center" bgcolor="#ffffff"><?php if ($this->_var['card']['card_img']): ?> 
                <a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a> 
                <?php else: ?> 
                <?php echo $this->_var['lang']['no']; ?> 
                <?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td bgcolor="#ffffff"></td>
              <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
              <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
            </tr>
          </table>
        </div>
        <div class="blank"></div>
        <?php endif; ?>
        
        <div class="flowBox">
          <h6><span><?php echo $this->_var['lang']['other_info']; ?></span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <?php if ($this->_var['allow_use_surplus']): ?>
            <tr>
              <td width="20%" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_surplus']; ?>: </strong></td>
              <td bgcolor="#ffffff"><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
                <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?> 
            <?php if ($this->_var['allow_use_integral']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_integral']; ?></strong></td>
              <td bgcolor="#ffffff"><input name="integral" type="text" class="input" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
                <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?> 
            <?php if ($this->_var['allow_use_bonus']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_bonus']; ?>:</strong></td>
              <td bgcolor="#ffffff"> <?php echo $this->_var['lang']['select_bonus']; ?>
                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                  <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>
                <?php echo $this->_var['lang']['input_bonus_no']; ?>
                <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                <input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" /></td>
            </tr>
            <?php endif; ?> 
            <?php if ($this->_var['inv_content_list']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['invoice']; ?>:</strong>
                <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> /></td>
              <td bgcolor="#ffffff"><?php if ($this->_var['inv_type_list']): ?> 
                <?php echo $this->_var['lang']['invoice_type']; ?>
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;">
                  
                  
                  
                  
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>
                
                
                
                </select>
                
                <?php endif; ?> 
                <?php echo $this->_var['lang']['invoice_title']; ?>
                <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                <?php echo $this->_var['lang']['invoice_content']; ?>
                <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">
                  
                  
                  
                  

                <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>

                
                
                
                
                </select></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
            </tr>
            <?php if ($this->_var['how_oos_list']): ?>
            <tr>
              <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
              <td bgcolor="#ffffff"><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                
                <label>
                  <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
                  <?php echo $this->_var['how_oos_name']; ?></label>
                
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
            </tr>
            <?php endif; ?>
          </table>
        </div>
        <div class="blank"></div>
        <div class="flowBox flow_jiesuan" style="border-bottom:none;">
          <h6><span></span></h6>
          <?php echo $this->fetch('library/order_total.lbi'); ?>
          <div class="flow_submit">
            <input type="submit" value="提交订单"/>
            <input type="hidden" name="step" value="done" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['step'] == "done"): ?> 

<div class="cle cart_main">
  <div class="flowBox" style="margin:30px auto 70px auto;">
    <h6 style="text-align:center; height:30px; line-height:30px;"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:red"><?php echo $this->_var['order']['order_sn']; ?></font></h6>
    <table width="99%" align="center" border="0" cellpadding="15" cellspacing="0" bgcolor="#fff" style="border:1px solid #ddd; margin:20px auto;" >
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>: <strong><?php echo $this->_var['order']['pay_name']; ?></strong>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['total']['amount_formated']; ?></strong></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['order']['pay_desc']; ?></td>
      </tr>
      <?php if ($this->_var['pay_online']): ?> 
      
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
      </tr>
      <?php endif; ?>
    </table>
    <?php if ($this->_var['virtual_card']): ?>
    <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;"> 
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
      <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <ul style="list-style:none;padding:0;margin:0;clear:both">
        <?php if ($this->_var['card']['card_sn']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['card_password']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['end_date']): ?>
        <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
        <?php endif; ?>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    <p style="text-align:center; margin-bottom:20px;"><?php echo $this->_var['order_submit_back']; ?></p>
  </div>
</div>
<?php endif; ?> 
<?php if ($this->_var['step'] == "login"): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
<script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		$(function(){
			$(".input_box").click(function(){
				$(this).find(".t_text").hide();	
				$(this).find("input").focus();
			})
			
			$(".input_box").focusin(function(){
				$(this).find(".t_text").hide();
			})
		
			$(".input_box").focusout(function(){
				if($(this).find("input").val() == "")
				{
					$(this).find(".t_text").show();
				}
			})	
		})

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        

        </script> 


<div class="cle cart_main">
  <div class="g_box from_com" style="float:left;">
    <div id="login-box">
      <h2>
        <div class="trig">没有帐号？<a href="user.php?act=register" class="trigger-box">点击注册</a></div>
        登录</h2>
      <div class="form-bd" style="height:auto;">
        <div class="form_box cle" id="login-nala">
          <div class="login_box" id="login-nala-form" >
            <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
              <ul class="form">
                <li class="text_input"><span class="iconfont">Œ</span>
                  <input name="username" type="text"  class="text" placeholder="<?php echo $this->_var['lang']['label_username']; ?>"/>
                </li>
                <li class="text_input"><span class="iconfont">÷</span>
                  <input name="password" type="password" class="text" placeholder="<?php echo $this->_var['lang']['label_password']; ?>"/>
                </li>
                <?php if ($this->_var['enabled_login_captcha']): ?>
                <li class="security_code input_box"> <span class="t_text"><?php echo $this->_var['lang']['comment_captcha']; ?></span>
                  <input type="text" class="code_input" name="captcha" maxlength="6">
                   <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></li>
                <li class="blank" style="height:20px;"> </li>
                <?php endif; ?>
                
                <li class="login_param">
                  <p><a class="forget_psd" href="user.php?act=get_password">忘记密码?</a>
                    <label>
                      <input type="checkbox" value="1" name="remember" id="remember" class="remember-me">
                      <?php echo $this->_var['lang']['remember']; ?></label>
                  </p>
                </li>
                <li class="last" style="margin-bottom:0;">
                  <input type="submit" name="submit" class="btn" value="登 录">
                  <input name="act" type="hidden" value="signin" />
                </li>
                <li class="last"> 
                  
                  <?php if ($this->_var['anonymous_buy'] == 1): ?>
                  <input type="button" class="btn" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                  <?php endif; ?> 
                  
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g_box">
    <div id="register_box">
      <form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
        <h2>
          <div class="trig">已有账号? <a href="user.php" class="trigger-box">点击登录</a> </div>
          注册 </h2>
        <div class="register_infor">
          <input type="hidden" id="sendtype">
          <ul>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_username']; ?></span>
              <input type="text" name="username" id="username" onblur="is_registered(this.value);" onkeyup="is_registered(this.value);">
               </li>
            <li class="error_box" id="username_notice"> <em></em> </li>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_email']; ?></span>
              <input name="email" type="text" id="email" onblur="checkEmail(this.value);" onkeyup="checkEmail(this.value);">
               </li>
            <li class="error_box" id="email_notice"><em></em> </li>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_password']; ?></span>
              <input type="password" name="password" id="password1" onblur="check_password(this.value);" onkeyup="check_password(this.value);checkIntensity(this.value);">
               </li>
            <li class="error_box" id="password_notice"> <em></em> </li>
            <li class="input_box"> <span class="t_text"><?php echo $this->_var['lang']['label_confirm_password']; ?></span>
              <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);" onkeyup="check_conform_password(this.value);">
               </li>
            <li class="error_box" id="conform_password_notice"> <em></em> </li>
            
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
            
            <?php if ($this->_var['field']['id'] == 6): ?>
            <select name='sel_question'>
              <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
              <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
            </select>
            <li class="blank" style="height:10px;"></li>
            <li class="input_box"> <span class="t_text" <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?></span>
              <input name="passwd_answer" type="text"/>
               </li>
            <?php if ($this->_var['field']['is_need']): ?>
            <li class="error_box"> <em></em> </li>
            <?php endif; ?> 
            
            <?php else: ?>
            <li class="input_box"> <span class="t_text" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?></span>
              <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text"/>
              </li>
            <?php if ($this->_var['field']['is_need']): ?>
            <li class="error_box"><em></em></li>
            <?php endif; ?> 
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
            <?php if ($this->_var['enabled_register_captcha']): ?>
            <li class="security_code input_box"> <span class="t_text">验证码</span>
              <input type="text" class="code_input" name="captcha" maxlength="6">
               <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </li>
            <li class="error_box"> <em></em> </li>
            <?php endif; ?>
            <li class="lizi_law">
              <label>
                <input name="agreement" type="checkbox" value="1" checked="checked"  tabindex="5" class="remember-me"/>
                <?php echo $this->_var['lang']['agreement']; ?></label>
            </li>
            <li style="height:10px; line-height:10x; font-size:0;margin:0;padding:0;"></li>
            <li class="go2register">
              <input type="submit" name="Submit" class="btn submit_btn" value="<?php echo $this->_var['lang']['forthwith_register']; ?>" />
              <input name="act" type="hidden" value="signup" />
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>

 
<?php endif; ?> 

<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
