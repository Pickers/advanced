<div class="top_right">
<?php echo CHtml::link('结算', array('/order/checkout'))?>&nbsp;|&nbsp;
<?php echo CHtml::link('购物车', array('/cart'))?>(<font style="color:red"><?php echo $this->getCount() ?></font>)&nbsp;|&nbsp;
<?php if(Yii::app()->user->isGuest){?>
<?php echo CHtml::link('登录', array('/user/login'))?>&nbsp;|&nbsp;<?php echo CHtml::link('注册', array('/user/registration'))?>&nbsp;|&nbsp;
<?php }else{?>
欢迎您，<?php echo Yii::app()->user->name ?>&nbsp;|&nbsp;<?php echo CHtml::link('会员中心', array('/member'))?>&nbsp;|&nbsp;<?php echo CHtml::link('退出', array('/user/logout'))?></div>
<?php } ?>
<a href="<?php echo Yii::app()->createUrl('/translate/translate/set', array('lang'=>'zh_cn')) ?>" class="current">中文</a>
&nbsp;/&nbsp;<a href="<?php echo Yii::app()->createUrl('/translate/translate/set', array('lang'=>'en')) ?>">English</a>
</div>