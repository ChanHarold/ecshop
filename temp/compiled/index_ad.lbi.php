<div class="index-slide" id="index-slide">
    <ul>
        <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_74586100_1450394889');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_74586100_1450394889']):
?>
      <li>
        <a target="_blank" href="<?php echo $this->_var['index_ad_0_74586100_1450394889']['url']; ?>" ><img src="<?php echo $this->_var['index_ad_0_74586100_1450394889']['src']; ?>" /></a>
       </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </ul>
    <div class="trigger-box">
      <div class="triggers">
        <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_74597100_1450394889');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_74597100_1450394889']):
        $this->_foreach['foo']['iteration']++;
?>
      <a href="javascript:;" <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="current"<?php endif; ?>></a>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
</div>