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
<link href="themes/yunchaoshi/login.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
<body>
<?php echo $this->fetch('library/page_header_login.lbi'); ?> 
<script>
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
</script> 

 
<?php if ($this->_var['action'] == 'login'): ?>

<div id="main" class="cle">
  <div class="box-pic" id="login-pic">
    <div class="img"> 
       
      
      <img src="themes/yunchaoshi/images/login-box-bg.png" width="455" height="455"> </div>
  </div>
  <div class="g_box">
    <div id="login-box">
      <h2><span>会员登录</span></h2>
      <div class="login-box2">
      <div class="form-bd">
        <div class="form_box cle" id="login-nala">
          <div class="login_box" id="login-nala-form" >
            <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
              <ul class="form">
                <li class="text_input">
                 <span class="username"></span>
                  <input name="username" type="text" class="text"/>
                </li>
                <li class="text_input"><span class="password"></span>
                  <input name="password" type="password" class="text"/>
                </li>
                <?php if ($this->_var['enabled_captcha']): ?>
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
                <li class="last">
                  <input type="hidden" name="act" value="act_login" />
                  <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                  <input type="submit" name="submit" class="btn" value="登 录">
                </li>
              </ul>
            </form>
          </div>
        </div>
        <div class="forget_pass cle">
        	<a href="user.php?act=get_password">找回密码</a><a href="user.php?act=register">免费注册</a>
        </div>
      </div>
      <ul class="form other-form">
        <li>
          <h5>使用第三方帐号登录</h5>
        </li>
        <li class="other-login"> <a class="sina" target="_blank" href="user.php?act=oath&amp;type=weibo"></a> <a class="qq" target="_blank" href="user.php?act=oath&amp;type=qq"></a> <a class="taobao tb-link" target="_blank" href="user.php?act=oath&amp;type=alipay"></a> </li>
      </ul>
      </div>
    </div>
  </div>
</div>

<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'register'): ?> 
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
  </div>
</div>
<?php else: ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div id="main" class="cle">
  <div class="box-pic" id="login-pic">
    <div class="img"> 
       
      
      <img src="themes/yunchaoshi/images/login-box-bg.png" width="455" height="455"> </div>
  </div>
  <div class="g_box">
    <div id="register_box">
      <form action="user.php" method="post" name="formUser" onsubmit="return register();">
        <input type="hidden" value="C4E1AB9A7DE79D7C750E8916875E7DBE" id="validate">
        <h2>
          <div class="trig"><font>已有账号?</font><a href="user.php" class="trigger-box">登录</a> </div>
          <span>注册</span></h2>
        <div class="register_infor">
          <input type="hidden" id="sendtype">
          <ul>
            <li class="input_box"> <span class="username common"></span>
              <input type="text" name="username" id="username" onblur="is_registered(this.value);" onkeyup="is_registered(this.value);">
              </li>
            <li class="error_box" id="username_notice"> <em></em> </li>
            <li class="input_box"> <span class="email common"></span>
              <input name="email" type="text" id="email" onblur="checkEmail(this.value);" onkeyup="checkEmail(this.value);">
             </li>
            <li class="error_box" id="email_notice"><em></em> </li>
            <li class="input_box"> <span class="psw common"></span>
              <input type="password" name="password" id="password1" onblur="check_password(this.value);" onkeyup="check_password(this.value);checkIntensity(this.value);">
              </li>
            <li class="error_box" id="password_notice"> <em></em> </li>
            <li class="input_box"> <span class="repsw common"></span>
              <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);" onkeyup="check_conform_password(this.value);">
              </li>
            <li class="error_box" id="conform_password_notice"> <em></em> </li>
            
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
            
            <?php if ($this->_var['field']['id'] == 6): ?>
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<?php if ($this->_var['field']['id'] == 6): ?>
          <li style="margin-bottom:24px;">
          <select name='sel_question'>
              <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
              <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
            </select>
         </li>
         <li class="input_box" style="margin-bottom:24px;">
          <label for="username" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?> style="display:none;"><?php echo $this->_var['field']['reg_field_name']; ?></label>
	  		<font><?php echo $this->_var['lang']['passwd_answer']; ?></font><input name="passwd_answer" type="text" size="25" class="text" maxlengt='20' style="padding-left:5px;"/>
        </li>
	<?php else: ?>
     <li class="input_box" style="margin-bottom:24px;">
     	 <label for="username" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?> style="display:none;"><?php echo $this->_var['field']['reg_field_name']; ?></label>
         <font><?php echo $this->_var['field']['reg_field_name']; ?></font> <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="text" style="padding-left:5px;"/>
       </li>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
            
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
            <?php if ($this->_var['enabled_captcha']): ?>
            <li class="security_code input_box" style="overflow:visible;"> <span class=""></span>
             <input type="text" class="code_input" name="captcha" maxlength="6" placeholder="验证码">
              <span class="error_icon"></span> <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </li>
            <li class="error_box"> <em></em> </li>
            <?php endif; ?>
            <li class="lizi_law">
              <label>
                <input name="agreement" type="checkbox" value="1" checked="checked"  tabindex="5" class="remember-me"/>
                <?php echo $this->_var['lang']['agreement']; ?></label>
            </li>
            <li class="error_box"> <em></em> </li>
            <li class="go2register"> 
             <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input name="Submit" type="submit" value="同意协议并注册" class="btn submit_btn">
          </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>

<?php endif; ?> 
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'get_password'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
        </tr>
        <tr>
          <td width="40%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
          <td width="60%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
          <td><input name="email" type="text" size="30" class="inputBg" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="send_pwd_email" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'qpassword_name'): ?>

<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
        </tr>
        <tr>
          <td width="40%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
          <td width="60%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="get_passwd_question" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'get_passwd_question'): ?>

<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
        </tr>
        <tr>
          <td width="40%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
          <td width="60%"><?php echo $this->_var['passwd_question']; ?></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
          <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
        </tr>
        <?php if ($this->_var['enabled_captcha']): ?>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
          <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="check_answer" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['action'] == 'reset_password'): ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <br />
      <table width="80%" border="0" align="center">
        <tr>
          <td><?php echo $this->_var['lang']['new_password']; ?></td>
          <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
        </tr>
        <tr>
          <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 
 
<div class="footer_end">Copyright ©2015 zzycs.com 云超市 版权所有 豫ICP备14005578号-1</div>
</body>
<script type="text/javascript">

var fn=function(){
	var func=function(ele,ele2){
		if(ele.val()==""){
			ele2.show();
		}else{
			ele2.hide();
		}
	}
	$("input").each(function(){
		var p=$(this).siblings("font"),self=$(this);
		if(self.val()!=""){
			p.hide();
		}
		$(this).focus(function(){
			func(self,p);
		});
		$(this).keyup(function(){
			self.focus();
			func(self,p);
		});
		$(this).blur(function(){
			func(self,p);
		});
		p.click(function(){
			self.focus();
			func(self,p);
		});
	});
	
	
	
}

$(function(){
	fn();
});


var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
