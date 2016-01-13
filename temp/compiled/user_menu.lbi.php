
<div class="slidebar">
    <h3 class="my_nala">
        <a href="user.php">会员中心</a>
    </h3>
    <ul class="slide_item">

        <li class="item">
            <div class="root_node">订单中心</div>
            <ul>
                <li>
                    <a class="<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>on<?php endif; ?>" href="user.php?act=order_list"><?php echo $this->_var['lang']['label_order']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                    
                     <a class="<?php if ($this->_var['action'] == 'address_list'): ?>on<?php endif; ?>" href="user.php?act=address_list"><?php echo $this->_var['lang']['label_address']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                     
                     <a class="<?php if ($this->_var['action'] == 'booking_list'): ?>on<?php endif; ?>" href="user.php?act=booking_list"><?php echo $this->_var['lang']['label_booking']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                </li>
            </ul>
        </li>
        
        <li class="item">
            <div class="root_node">会员中心</div>
            <ul>
                <li>
                    <a class="<?php if ($this->_var['action'] == 'profile'): ?>on<?php endif; ?>" href="user.php?act=profile"><?php echo $this->_var['lang']['label_profile']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                    
                     <a class="<?php if ($this->_var['action'] == 'collection_list'): ?>on<?php endif; ?>" href="user.php?act=collection_list"><?php echo $this->_var['lang']['label_collection']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>

                     
                      <a class="<?php if ($this->_var['action'] == 'message_list'): ?>on<?php endif; ?>" href="user.php?act=message_list"><?php echo $this->_var['lang']['label_message']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                      
                       <a class="<?php if ($this->_var['action'] == 'affiliate'): ?>on<?php endif; ?>" href="user.php?act=affiliate"><?php echo $this->_var['lang']['label_affiliate']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                       
                        <a class="<?php if ($this->_var['action'] == 'comment_list'): ?>on<?php endif; ?>" href="user.php?act=comment_list"><?php echo $this->_var['lang']['label_comment']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                     
                </li>
               
            </ul>
        </li>
        
         <li class="item">
            <div class="root_node">账户中心</div>
            <ul>
                <li>
                    <a class="<?php if ($this->_var['action'] == 'bonus' || $this->_var['action'] == 'order_detail'): ?>on<?php endif; ?>" href="user.php?act=bonus"><?php echo $this->_var['lang']['label_bonus']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                    
                     <a class="<?php if ($this->_var['action'] == 'track_packages'): ?>on<?php endif; ?>" href="user.php?act=track_packages"><?php echo $this->_var['lang']['label_track_packages']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
                     
                     <a class="<?php if ($this->_var['action'] == 'account_log'): ?>on<?php endif; ?>" href="user.php?act=account_log"><?php echo $this->_var['lang']['label_user_surplus']; ?><img src="themes/yunchaoshi/images/arrow_2.png" /></a>
             
                </li>
               
            </ul>
        </li>

    </ul>

</div>



