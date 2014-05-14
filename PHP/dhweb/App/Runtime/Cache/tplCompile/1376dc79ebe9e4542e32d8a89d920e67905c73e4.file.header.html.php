<?php /* Smarty version Smarty-3.0.7, created on 2013-01-14 11:57:03
         compiled from "./App/Tpl/duohuostudio/Home/header.html" */ ?>
<?php /*%%SmartyHeaderCode:3083450f3820feee4e8-01305877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1376dc79ebe9e4542e32d8a89d920e67905c73e4' => 
    array (
      0 => './App/Tpl/duohuostudio/Home/header.html',
      1 => 1358135821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3083450f3820feee4e8-01305877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="header">
        <div id="top">
        <div class="top_left"><a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
" id="logo"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/logo.jpg" width="320" height="87" alt="多火工作室" /><cite>腾讯CDC</cite></a></div>
        <div class="top_right">
        	<p class="qq">QQ在线沟通
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=283789682&site=qq&menu=yes"><img border="0" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/qq_logo.gif" width="30" height="36" alt="点击这里给我发消息" title="点击这里给我发消息" /></a>南京信息工程工程大学大学生活动中心201室</p>
           
        </div>
        </div>
    </div>
	
   <!--跑马banner-->
   <div id="banner">
        <div id="glume">
        <ul class="Limg">
        <li style="z-index: 0; opacity: 1;" class="bg_2"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/20010528_2.jpg" width="950" height="340" /></a></li>
        <li style="z-index: 0; opacity: 1;" class="bg_3"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/20010528_3.jpg" width="950" height="340" /></a></li>
        <li style="z-index: 0; opacity: 1;" class="bg_4"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/20010528_4.jpg" width="950" height="340" /></a></li>
        <li style="z-index: 0; opacity: 1;" class="bg_5"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/20010528_5.jpg" width="950" height="340" /></a></li>
        <li style="z-index: 0; opacity: 1;" class="bg_6"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/20010528_6.jpg" width="950" height="340" /></a></li>
        <li style="z-index: 1; opacity: 1;" class="bg_1"><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/banner_img.jpg" width="950" height="340" /></a></li>
        
        
        </ul>
        
        <p class="Nubbt">
        <span class="on">1</span>
        <span class="">2</span>
        <span class="">3</span>
        <span class="">4</span>
        <span class="">5</span>
        <span class="">6</span>
        </p>
        <p></p>
      </div>
  <div class="clear"></div>
  </div>
	<!-- END SLIDER -->
	
	<!--banner js-->
<script language="javascript" type="text/javascript">
(function(){
    if(!Function.prototype.bind){
        Function.prototype.bind = function(obj){
            var owner = this,args = Array.prototype.slice.call(arguments),callobj = Array.prototype.shift.call(args);
            return function(e){e=e||top.window.event||window.event;owner.apply(callobj,args.concat([e]));};
        };
    }
})();
var glume = function(id){
    this.ctn = document.getElementById(id);
    this.adLis = null;
    this.btns = null;
    this.animStep = 0.1;//动画速度0.1～0.9
    this.switchSpeed = 5;//自动播放间隔(s)
    this.defOpacity = 1;
    this.tmpOpacity = 1;
    this.crtIndex = 0;
    this.crtLi = null;
    this.adLength = 0;
    this.timerAnim = null;
    this.timerSwitch = null;
    this.init();
};
//给glume加原型数据
glume.prototype = {
    fnAnim:function(toIndex){
        if(this.timerAnim){window.clearTimeout(this.timerAnim);}
        if(this.tmpOpacity <= 0){
            this.crtLi.style.opacity = this.tmpOpacity = this.defOpacity;
            this.crtLi.style.filter = 'Alpha(Opacity=' + this.defOpacity*100 + ')';
            this.crtLi.style.zIndex = 0;
            this.crtIndex = toIndex;
            return;
        }
        this.crtLi.style.opacity = this.tmpOpacity = this.tmpOpacity - this.animStep;
        this.crtLi.style.filter = 'Alpha(Opacity=' + this.tmpOpacity*100 + ')';
        this.timerAnim = window.setTimeout(this.fnAnim.bind(this,toIndex),50);
    },
    fnNextIndex:function(){
        return (this.crtIndex >= this.adLength-1)?0:this.crtIndex+1;
    },
    fnSwitch:function(toIndex){
        if(this.crtIndex==toIndex){return;}
        this.crtLi = this.adLis[this.crtIndex];
        for(var i=0;i<this.adLength;i++){
            this.adLis[i].style.zIndex = 0;
        }
        this.crtLi.style.zIndex = 2;
        this.adLis[toIndex].style.zIndex = 1;
        for(var i=0;i<this.adLength;i++){
            this.btns[i].className = '';
        }
        this.btns[toIndex].className = 'on'
        this.fnAnim(toIndex);
    },
    fnAutoPlay:function(){
        this.fnSwitch(this.fnNextIndex());
    },
    fnPlay:function(){
        this.timerSwitch = window.setInterval(this.fnAutoPlay.bind(this),this.switchSpeed*1000);//zhebian *1000将相应的毫秒转化为秒了
    },
    fnStopPlay:function(){
        window.clearTimeout(this.timerSwitch);
    },
    init:function(){
        this.adLis = this.ctn.getElementsByTagName('li');
        this.btns = this.ctn.getElementsByTagName('p')[0].getElementsByTagName('span');
        this.adLength = this.adLis.length;
        for(var i=0,l=this.btns.length;i<l;i++){
            with({i:i}){
                this.btns[i].index = i;
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
            }
        }
        this.adLis[this.crtIndex].style.zIndex = 2;
        this.fnPlay();
        this.ctn.onmouseover = this.fnStopPlay.bind(this);
        this.ctn.onmouseout = this.fnPlay.bind(this);
    }
};
var player1 = new glume('glume');
</script>