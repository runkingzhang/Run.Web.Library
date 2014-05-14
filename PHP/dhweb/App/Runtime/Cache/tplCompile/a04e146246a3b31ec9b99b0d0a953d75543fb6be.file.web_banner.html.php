<?php /* Smarty version Smarty-3.0.7, created on 2012-03-16 16:32:30
         compiled from "./App/Tpl/duohuo/Home/web_banner.html" */ ?>
<?php /*%%SmartyHeaderCode:243104f62fa9ec2b2e0-85624955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a04e146246a3b31ec9b99b0d0a953d75543fb6be' => 
    array (
      0 => './App/Tpl/duohuo/Home/web_banner.html',
      1 => 1331886748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243104f62fa9ec2b2e0-85624955',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script type="text/javascript">function cdcAjax(url, callbackFunction){return microAjax(url, callbackFunction);}</script>

<!--跑马banner-->
  <div id="glume">
	<ul class="Limg">
    <li style="z-index: 0; opacity: 1;" class="bg_1"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner1.jpg"></a></li>
    <li style="z-index: 0; opacity: 1;" class="bg_2"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner2.jpg"></a></li>
    <li style="z-index: 0; opacity: 1;" class="bg_3"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner3.jpg"></a></li>
    <li style="z-index: 0; opacity: 1;" class="bg_4"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner4.jpg"></a></li>
    <li style="z-index: 1; opacity: 1;" class="bg_5"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner5.jpg"></a></li>
    <li style="z-index: 0; opacity: 1;" class="bg_6"><a href="javascript:;" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner6.jpg"></a></li>
    
    </ul>
    <cite class="Nubbt">
    <span class="">1</span>
    <span class="">2</span>
    <span class="">3</span>
    <span class="">4</span>
    <span class="on">5</span>
    <span class="">6</span>
    </cite>
  </div>

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
    this.switchSpeed = 4;//自动播放间隔(s)
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
        this.btns = this.ctn.getElementsByTagName('cite')[0].getElementsByTagName('span');
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
<!--跑马banner End-->
