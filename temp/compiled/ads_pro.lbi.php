<?php if ($this->_var['pName'] == 'displayW'): ?>
<div class="aside"> <a class="s-link" target="_blank" href="<?php echo $this->_var['ad']['ad_link']; ?>"></a>
  <h3><?php echo $this->_var['ad']['link_man']; ?></h3>
  <div class="s-ext"><b><?php echo $this->_var['ad']['link_email']; ?></b></div>
</div>
<a class="s-img" target="_blank" href="<?php echo $this->_var['ad']['ad_link']; ?>"> <img src="<?php echo $this->_var['src']; ?>" width="<?php echo $this->_var['ad']['ad_width']; ?>" height="<?php echo $this->_var['ad']['ad_height']; ?>"> </a>
<?php else: ?>

<a target="_blank" href="<?php echo $this->_var['ad']['ad_link']; ?>"> <img src="<?php echo $this->_var['src']; ?>" width="<?php echo $this->_var['ad']['ad_width']; ?>" height="<?php echo $this->_var['ad']['ad_height']; ?>"/> </a> 
<?php endif; ?>