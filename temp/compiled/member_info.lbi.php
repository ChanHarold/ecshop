<?php if ($this->_var['user_info']): ?>
<a href="user.php" class=""><?php echo $this->_var['user_info']['username']; ?></a>&nbsp;[<a href="user.php?act=logout">退出</a>]</li>
<?php else: ?>
<a href="user.php" rel="nofollow">请登录</a><s></s><a href="user.php?act=register" rel="nofollow">快速注册</a>
<?php endif; ?>        
            
