<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/yunchaoshi/goods.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->smarty_insert_scripts(array('files'=>'magiczoomplus.js,easydialog.min.js,lizi_goods.js')); ?>
<div id="wrapper">
	<?php echo $this->fetch('library/ur_here.lbi'); ?> 
    <?php if ($this->_var['related_cat']): ?>
  	<div class="search-options">
    	<dl>
        	<dt>分类</dt>
            <dd>
            	<div class="items clearfix">
                	<div class="link">
                    	<?php $_from = $this->_var['related_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                        <a href="<?php echo $this->_var['cat']['url']; ?>" class="track"><?php echo $this->_var['cat']['cat_name']; ?></a>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                </div>
            </dd>
        </dl>
    </div>
     <?php endif; ?>
  <div class="detail cle"> 
     
    <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
    <form action="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      
      
      <div class="item-info" id="item-info">
        <dl class="loaded">
          
          <dt class="product_name">
            <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
          </dt>
          
          
          <dd class="property">
            <ul>
            	<?php if ($this->_var['goods']['is_shipping']): ?>
              <li> <span class="lbl"><?php echo $this->_var['lang']['goods_free_shipping']; ?></span> </li>
              
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_goodssn']): ?>
              <li> <span class="lbl"><?php echo $this->_var['lang']['goods_sn']; ?></span> <em><?php echo $this->_var['goods']['goods_sn']; ?></em> </li>
              
              <?php endif; ?> 
              
              <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?> 
              <?php if ($this->_var['goods']['goods_number'] == 0): ?>
              <li> <span class="lbl"><?php echo $this->_var['lang']['goods_number']; ?></span> <em><?php echo $this->_var['lang']['stock_up']; ?></em> </li>
              
              <?php else: ?>
              <li> <span class="lbl"><?php echo $this->_var['lang']['goods_number']; ?></span> <em><?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></em> </li>
              <?php endif; ?> 
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_addtime']): ?>
              <li> <span class="lbl"><?php echo $this->_var['lang']['add_time']; ?></span> <em><?php echo $this->_var['goods']['add_time']; ?></em> </li>
              
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_goodsweight']): ?>
              <li> <span class="lbl"><?php echo $this->_var['lang']['goods_weight']; ?></span> <em><?php echo $this->_var['goods']['goods_weight']; ?></em> </li>
              
              <?php endif; ?> 
              <?php if ($this->_var['cfg']['show_marketprice']): ?>
              <li> <span class="lbl"> <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
                <span class="unit"> <strong class="nala_price" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['promote_price']; ?></strong> </span> 
                <?php else: ?> 
                <span class="lbl"><?php echo $this->_var['lang']['shop_price']; ?></span> <span class="unit"> <strong class="nala_price red" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></strong> </span>
                <?php endif; ?> </span> <em class="cancel"><?php echo $this->_var['goods']['market_price']; ?></em> </li>
              <?php endif; ?>
              
              <?php if ($this->_var['goods']['give_integral'] > 0): ?>
              
              <li><span><?php echo $this->_var['lang']['goods_give_integral']; ?>可获<em class="red"><?php echo $this->_var['goods']['give_integral']; ?></em><?php echo $this->_var['points_name']; ?></span></li>
              <?php endif; ?> 
              
              <?php if ($this->_var['cfg']['use_integral']): ?>
              <li><span><?php echo $this->_var['lang']['goods_integral']; ?><em class="red"><?php echo $this->_var['goods']['integral']; ?></em><?php echo $this->_var['points_name']; ?></span></li>
              <?php endif; ?>
              
    		   <li class="zhekou"><span>优惠</span><label><?php echo $this->_var['goods']['save_price']; ?></label></li>
                
               <li class="comment"><span class="lbl">评价</span><span><cite class="ping_star2"><i style="width:<?php echo $this->_var['comment_percent']['haoping_percent']; ?>%;"></i></cite><em><a href="#pjxqitem" id="pjxqitem_trig"><?php echo $this->_var['goods']['comments_number']; ?>人评价</a></em></span></li>
            
              <li><span class="lbl">近期销售：</span><span class="sales_num"><em><?php echo $this->_var['goods']['sales_volume']; ?>件</em></span></li>
              
            </ul>
          </dd>
          
           
          
          
          
          <dd class="tobuy-box cle">
            <ul class="sku">
              
               
              <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
              <?php if ($this->_var['spec']['attr_type'] == 1): ?>
              
              <li class="sku_box cle" id="sku_box"> <span class="lbl"><?php echo $this->_var['spec']['name']; ?></span>
                <div id="sku_list" class="sku_list cle"> 
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                  <a <?php if ($this->_var['key'] == 0): ?>class="selected"<?php endif; ?> href="javascript:;"><?php echo $this->_var['value']['label']; ?><span class="icon_bg">已选中</span>
                  <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" style="display:none;" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                  </a> 
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                  
                </div>
              </li>
              
              <?php else: ?>
              
              <li class="sku_box cle" id="sku_box"> <span class="lbl"><?php echo $this->_var['spec']['name']; ?></span>
                <div id="sku_list" class="sku_list cle"> 
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                    <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                    <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                  </a> 
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                </div>
              </li>
              
              <?php endif; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              
              
              <li class="skunum_li cle"> <span class="lbl">数&nbsp;&nbsp;&nbsp;量</span>
                <div class="skunum" id="skunum"> <span class="minus" title="减少1个数量"><i>-</i></span>
                  <input id="number" name="number" type="text" min="1" value="1" onchange="countNum(0)">
                  <span class="add" title="增加1个数量"><i>+</i></span> <cite class="storage"></cite> </div>
              </li>
              
              
              <li class="add_cart_li"><a href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn" id="buy_btn">加入购物车</a> <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" class="graybtn" id="fav-btn">收藏</a> </li>
            </ul>
          </dd>
        </dl>
        <div class="share"></div>
      </div>
    </form>







<script>


function dd(){
var s = $("#shuliang").val();
var c = isNaN($('#shuliang').val());

var reg = /^\d+$/;
    if (!s.match(reg)){
        alert('请输入数量');
        $('#youbian').val(" ");
    }else{    
       var code =  $("#youbian").val();
       
$.ajax({  
        type: "POST",  
        url: 'goods.php?act=jishuanqi',  
        dataType : "json",  // 指定返回类型  
        data:{code1:code} ,  // 传递到后台的参数  
        success: function(data)   
        {  
	


	  var html = "<option selected='selected' value='-1'>请选择地区</option>";
           $.each(data, function(index,values){   // 解析出data对应的Object数组  
		$.each(values,function(index3,v){
		   html +="<option value='"+v+"'>"+v+"</option> ";
			});
     
          });  
		$("#xiala").html('').append(html);
        },  
	 
        error : function()  
        {  
            alert("系统出现问题");      
        }  
});  


    }    


}

function jisuan(){
var weight = $('#zhongliang').val();
if(weight == ""){
  alert("请输入重量");

}else{
var chang = "<?php echo $this->_var['goods']['other_long']; ?>"; //长
var kuan = "<?php echo $this->_var['goods']['other_wide']; ?>"; //宽
var gao  ="<?php echo $this->_var['goods']['other_high']; ?>";//高
var zhongliang = "<?php echo $this->_var['goods']['goods_weight']; ?>";//重量
var shou = document.getElementById('shou').innerText;
var xu = document.getElementById('xu').innerText;
var zuidi = document.getElementById('zuidi').innerText;
var zhongliang1 = $('#zhongliang').val();
var shuliang = $('#shuliang').val();
shuliang = parseFloat(shuliang);
var zl = zhongliang1 * 1000 ;
zl = parseInt(zl);
var p = parseFloat("1.2419");

if(zl < 1000){
sum = shou + xu ;
var pp = parseFloat(sum);
sum1 = pp*p;
if(sum1 < zuidi){

$("#sum").html("").append(zuidi);
}
}else{


var c = zl /1000;

var c1 = Math.ceil(c);

var sum = xu * (c1-1);

// alert(sum);
var int1 = parseFloat(sum);
var int2 = parseFloat(c1);
var int3 = parseFloat(shou);
// alert(int2);
sun1 = (int3 + int1) * shuliang;
sun2 = sun1 * p;
sun3 = sun2.toFixed(2);
$("#sum").html("").append(sun3);
alert(sun3);
var s= zhongliang1,num;
num=s.match(/\d+(\.\d+)?/g);

var t = zhongliang,nbm;
nbm=t.match(/\d+(\.\d+)?/g);

nbm = nbm*1000;

// if(num <= nbm)
// {




// var cc = chang * kuan *gao;
// var dd = chang * kuan *gao *250;
// // dd= Math.ceil(dd);
// // if(dd<cc){

// // alert(num);
// // alert(shou);
// // alert(xu);
// var sum = shou + xu * num;
// var sum1 = sum *p;
// alert(sum);

// }



  // alert("123");

}

// var c = $('#xiala option:selected') .val();//选中的值




}


}

function ww(){
  var code =  $("#youbian").val();
  var cc = $('#xiala option:selected') .val();
// alert(cc);
if(code == ""){
  alert("请输入邮编");
}else if(cc == -1){
  alert("请选择地区");
}else{

var code = $('#xiala option:selected') .val();
$.ajax({  
        type: "POST",  
        url: 'goods.php?act=jishuan',  
        dataType : "json",  // 指定返回类型  
        data:{code1:code} ,  // 传递到后台的参数  
        success: function(data)   
        {  
  


    var html = "";
           $.each(data, function(index,values){   // 解析出data对应的Object数组  
    // $.each(values,function(index3,v){
      html += "<div id='shou'>"+values.BasicCharge+"</div>";
      html +="<div id='xu'>"+values.PerKg+"</div>";
      html +="<div id='zuidi'>"+values.MinCharge+"</div>";
      // });
     
          });  
    $("#ww").html('').append(html);
        },  
   
        error : function()  
        {  
            alert("系统出现问题");      
        }  
});  


}

}



</script>


  <div id="ww" style="display:none;"></div>

    <?php echo $this->fetch('library/baozheng.lbi'); ?> </div>
  <div class="detail_bgcolor">

  	<form action="javascript:jisuan()" method="post" name="jishuanqi" id="jishuanqi" style ='width: 500px;border:solid 1px #999;'>
  	数量:<input id ="shuliang" vaule ="1" type='text'/><br/>
  	邮编:<input id ="youbian"  type='text'  onblur="dd()"; />地区:<select id="xiala" class='xiala'> 
	</select><br>
  	
<!--   	<?php $_from = $this->_var['myArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'foo');if (count($_from)):
    foreach ($_from AS $this->_var['foo']):
?>
	<select name=""> 
	<option value="$foo">$foo</option> 
	<?php echo $this->_var['foo']; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 -->

	

重量:<input id ="zhongliang" type='text' readOnly="true" onclick="ww()" /><br/>
	<input type='submit'  readOnly="true" value="计算">
    <div id='sum' style="font-size:16px;color:red;"></div>
	</select> 
	</form>
    <div class="z-detail-box cle">
      <div class="z-detail-left">
       
<?php echo $this->fetch('library/goods_related.lbi'); ?>
 
      	<div class="shangpin_info clearfix">
        	<div class="sp_info_right">
                <div class="tabs_bar_warp">
                  <div class="tabs_bar" id="tabs_bar">
                    <ul>
                      <li class="current_select"> <a class="spxqitem" rel="nofollow" href="javascript:void(0);">商品介绍</a> </li>
                      <li class=""><a class="pjxqitem" href="javascript:void(0);" name="pjxqitem" rel="nofollow">商品评论</a></li>
                      <li class="tab-buy" id="tab-buy"><strong id="ECS_SHOPPRICE_TOP"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong><a class="btn" href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>);">购 买</a></li>
                    </ul>
                  </div>
                </div>
                <div class="product_tabs">
                  <div class="sectionbox z-box" id="spxqitem">
                    <div class="spxq_main">
                      <div class="spsx">
                      	  <dl class="clearfix">
                          		<dd><p>商品名称： <?php echo $this->_var['goods']['goods_name']; ?></p></dd>
                                <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                                <dd><p>商品品牌： <?php echo $this->_var['goods']['goods_brand']; ?></p></dd>
                                 <?php endif; ?> 
                                 <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
                              
                                  <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                                  <dd><p><?php echo htmlspecialchars($this->_var['property']['name']); ?>： <?php echo $this->_var['property']['value']; ?></p></dd>
                                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                          </dl>
                          
                      </div>
                      <h2 class="tit tit3" style="background:url(themes/yunchaoshi/images/commend_tit1.png) no-repeat center center; height:40px;"></h2>
                      <div class="spxq_dec"><?php echo $this->_var['goods']['goods_desc']; ?></div>
                    </div>
                  </div>
                  <div class="z-box sectionbox sectionbox2">
                  	<?php echo $this->fetch('library/comments.lbi'); ?>
                  </div>
                </div>
            </div>
            <div class="sp_info_left"><?php echo $this->fetch('library/top10_category.lbi'); ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="add_ok" id="cart_show">
    <div class="tip">
        <i class="iconfont"></i>商品已成功加入购物车
    </div>
    <div class="go">
        <a href="javascript:easyDialog.close();" class="back">&lt;&lt;继续购物</a>
        <a href="flow.php" class="btn">去结算</a>
    </div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);

  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    
    if (document.getElementById('ECS_SHOPPRICE'))
      document.getElementById('ECS_SHOPPRICE').innerHTML = res.result;
	 if (document.getElementById('ECS_SHOPPRICE_TOP'))
      document.getElementById('ECS_SHOPPRICE_TOP').innerHTML = res.result;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	
  }
}




</script>
</html>
