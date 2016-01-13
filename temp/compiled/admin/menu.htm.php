<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
<!--
var noHelp   = "<p align='center' style='color: #666'><?php echo $this->_var['lang']['no_help']; ?></p>";
var helpLang = "<?php echo $this->_var['help_lang']; ?>";
//-->
</script>

<style type="text/css">
body {
  background: #f7f7f7;
}
#tabbar-div {
  padding-left: 10px;
  height: 34px;
  padding-top: 0px;
}
#tabbar-div p {
  margin: 1px 0 0 0;
}
.tab-front {
  line-height: 33px;
  font-weight: bold;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer; font-size:14px; font-family:"΢���ź�"; color:#565656;
}
.tab-back {
  color: #F4FAFB;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
}
.tab-hover {
  color: #F4FAFB;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
  background: #2F9DB5;
}
#top-div
{
  padding: 3px 0 2px;
  background: #BBDDE5;
  margin: 5px;
  text-align: center;
}
#main-div {
  
 
}
#menu-list {
  padding: 0;
  margin: 0;
}
#menu-list ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
  color: #335B64;
}
#menu-list li {
 
  cursor: hand;
  cursor: pointer;
}
#menu-list li.collapse ul{}
#menu-list li span { 
 font-size:14px;padding: 0px 12px; color:#FFF; 


}

.collapse, .explode{
display: block;
border-bottom: 1px solid #11689c;
border-top: #1f9dd1 1px solid;width:100%; color:#FFF; line-height: 42px; text-align:left;}
#main-div a:visited, #menu-list a:link, #menu-list a:hover {
  color: #666
  text-decoration: none;
}
#menu-list a:active {
  color: #666;
}
.collapse , .explode {
 text-indent:40px;

}
.ico_1{background:#1480b3  url(images/menu_1.png) 9px  center no-repeat ;}
.ico_2{background:#1480b3  url(images/menu_2.png) 9px  center no-repeat ;}
.ico_3{background:#1480b3  url(images/menu_3.png) 9px  center no-repeat ;}
.ico_4{background:#1480b3  url(images/menu_4.png) 9px  center no-repeat ;}
.ico_5{background:#1480b3  url(images/menu_5.png) 9px  center no-repeat ;}
.ico_6{background:#1480b3  url(images/menu_6.png) 9px  center no-repeat ;}
.ico_7{background:#1480b3  url(images/menu_7.png) 9px  center no-repeat ;}
.ico_8{background:#1480b3  url(images/menu_8.png) 9px  center no-repeat ;}
.ico_9{background:#1480b3  url(images/menu_9.png) 9px  center no-repeat ;}
.ico_10{background:#1480b3  url(images/menu_10.png) 9px  center no-repeat ;}
.ico_11{background:#1480b3  url(images/menu_11.png) 9px  center no-repeat ;}
.ico_12{background:#1480b3  url(images/menu_12.png) 9px  center no-repeat ;}
.ico_13{background:#1480b3  url(images/menu_13.png) 9px  center no-repeat ;}
.ico_14{background:#1480b3  url(images/menu_14.png) 9px  center no-repeat ;}
.ico_15{background:#1480b3  url(images/menu_15.png) 9px  center no-repeat ;}
.ico_16{background:#1480b3  url(images/menu_16.png) 9px  center no-repeat ;}


.ico2_1{background:#1480b3  url(images/menu1_1.png) 9px  0px no-repeat ;}
.ico2_2{background:#1480b3  url(images/menu1_2.png) 9px  0px no-repeat ;}
.ico2_3{background:#1480b3  url(images/menu1_3.png) 9px  0px no-repeat ;}
.ico2_4{background:#1480b3  url(images/menu1_4.png) 9px  0px no-repeat ;}
.ico2_5{background:#1480b3  url(images/menu1_5.png) 9px  0px no-repeat ;}
.ico2_6{background:#1480b3  url(images/menu1_6.png) 9px  0px no-repeat ;}
.ico2_7{background:#1480b3  url(images/menu1_7.png) 9px  0px no-repeat ;}
.ico2_8{background:#1480b3  url(images/menu1_8.png) 9px  0px no-repeat ;}
.ico2_9{background:#1480b3  url(images/menu1_9.png) 9px  0px no-repeat ;}
.ico2_10{background:#1480b3  url(images/menu1_10.png) 9px  0px no-repeat ;}
.ico2_11{background:#1480b3  url(images/menu1_11.png) 9px  0px no-repeat ;}
.ico2_12{background:#1480b3  url(images/menu1_12.png) 9px  0px no-repeat ;}
.ico2_13{background:#1480b3  url(images/menu1_13.png) 9px  0px no-repeat ;}
.ico2_14{background:#1480b3  url(images/menu1_14.png) 9px  0px no-repeat ;}
.ico2_15{background:#1480b3  url(images/menu1_15.png) 9px  0px no-repeat ;}
.ico2_16{background:#1480b3  url(images/menu1_16.png) 9px  0px no-repeat ;}


#menu-list li.collapse {
  

}
 
.menu-item {font-size: 12px;
height: 30px;
line-height: 30px;
display: block;
font-weight: normal; background:#FFF
 
}
.menu-item a{font-size: 12px;
height: 30px;
line-height: 30px;
display: block; }
.menu-item a:hover{background-color:#f3f3f3; text-decoration:none;}
#help-title {
  font-size: 14px;
  color: #000080;
  margin: 5px 0;
  padding: 0px;
}
#help-content {
  margin: 0;
  padding: 0;
}
.tips {
  color: #CC0000;
}
.link {
  color: #000099;
}
</style>

</head>
<body>
<div id="tabbar-div">
<p>
  <span class="tab-front" id="menu-tab"><?php echo $this->_var['lang']['menu']; ?></span>
</p>
</div>
<div id="main-div">
<div id="menu-list">
<ul id="menu-ul">
<?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'menu');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['menu']):
        $this->_foreach['foo']['iteration']++;
?>
<?php if ($this->_var['menu']['action']): ?>
  <li class="collapse ico_<?php echo $this->_foreach['foo']['iteration']; ?>" key_data1="lis ico_<?php echo $this->_foreach['foo']['iteration']; ?>" key_data2="lis ico2_<?php echo $this->_foreach['foo']['iteration']; ?>"><a href="<?php echo $this->_var['menu']['action']; ?>" target="main-frame"><?php echo $this->_var['menu']['label']; ?></a></li>
<?php else: ?>
  <li class="collapse lis ico_<?php echo $this->_foreach['foo']['iteration']; ?>" key="<?php echo $this->_var['k']; ?>" name="menu" key_data1="lis ico_<?php echo $this->_foreach['foo']['iteration']; ?>" key_data2="lis ico2_<?php echo $this->_foreach['foo']['iteration']; ?>">
    <?php echo $this->_var['menu']['label']; ?>
    <?php if ($this->_var['menu']['children']): ?>
    <ul style="display:none;">
    <?php $_from = $this->_var['menu']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['key'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['key']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['key']['iteration']++;
?>
      <li class="menu-item"><a href="<?php echo $this->_var['child']['action']; ?>" target="main-frame"><?php echo $this->_var['child']['label']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <?php endif; ?>
  </li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 <script language="JavaScript" src="http://ecshop.ecmoban.com/menu_ext.php?charset=<?php echo $this->_var['charset']; ?>&lang=<?php echo $this->_var['help_lang']; ?>"></script>
</ul>
</div>
<div id="help-div" style="display:none">
<h1 id="help-title"></h1>
<div id="help-content"></div>
</div>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/global.js,../js/utils.js,../js/transport.js')); ?>
<script language="JavaScript">
<!--
var collapse_all = "<?php echo $this->_var['lang']['collapse_all']; ?>";
var expand_all = "<?php echo $this->_var['lang']['expand_all']; ?>";
var collapse = true;


var getClass=function(name){
	var ele=document.getElementById("menu-ul").getElementsByTagName("li"),arr=[];
	var reg=new RegExp("(^|\\s)"+name+"(\\s|$)");
	for(var i=0;i<ele.length;i++){
		if(reg.test(ele[i].className)){
			arr.push(ele[i]);
		}
	}
	return arr;
	
}

function toggleCollapse()
{
  var items = document.getElementsByTagName('LI');
  var span=document.getElementById('menu-ul').getElementsByTagName("span");
  for (i = 0; i < items.length; i++)
  {
    if (collapse)
    {
      if (items[i].className == "explode")
      {
        toggleCollapseExpand(items[i], "collapse");
      }
    }
    else
    {
      if ( items[i].className == "collapse")
      {
        toggleCollapseExpand(items[i], "explode");
        ToggleHanlder.Reset();
      }
    }
  }

  collapse = !collapse;
  var toggleImg = document.getElementById('toggleImg');
  if(toggleImg)
  {
	toggleImg.src = collapse ? 'images/menu_minus.gif' : 'images/menu_plus.gif';
	toggleImg.alt = collapse ? collapse_all : expand_all;
  }
}

function toggleCollapseExpand(obj, status)
{
	var lis=getClass("lis");
	var explode=getClass("explode");
	var ie=/ie 7/i.test(navigator.userAgent),dis=null;
	var ul=document.getElementById("menu-ul").getElementsByTagName("ul");
	
	
  if (obj.tagName.toLowerCase() == 'li' && obj.className != 'menu-item')
  {
    for (i = 0; i < obj.childNodes.length; i++)
    {
      if (obj.childNodes[i].tagName == "UL")
      {
        if (status == null)
        {
			if(ie){
					dis=obj.childNodes[1].style.display;
				}else{
					dis=obj.childNodes[1].style.display;
				}
          if (dis!= "none")
          {
			  
			  for(var j=0;j<ul.length;j++){
					ul[j].style["display"]="none";
					
				}
				
				if(ie){
            obj.childNodes[1].style.display = "none";
				}else{
					obj.childNodes[1].style.display = "none";
				}
            
			
            ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
			var s = obj.getAttribute("key_data1");
			
            obj.className = "collapse "+s;
          }
          else
          {
			  
			   for(var j=0;j<ul.length;j++){
					ul[j].style["display"]="none";
				}
				
            if(ie){
					obj.childNodes[1].style.display = "block";
				}else{
            obj.childNodes[1].style.display = "block";
				}
			for(var i=0;i<lis.length;i++){
					var tmp=lis[i].getAttribute("key_data1");
					lis[i].className="collapse "+tmp;
				}
            ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
			var s = obj.getAttribute("key_data2");
			
            obj.className = "explode "+s;
          }
          break;
        }
        else
        {
          if( status == "collapse")
          {
            ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
			var s = obj.getAttribute("key_data1");
			
            obj.className = "collapse "+s;
          }
          else
          {
            ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
			var s = obj.getAttribute("key_data2");
			
            obj.className = "explode "+s;
          }
		  if(ie){
          obj.childNodes[1].style.display = (status == "explode") ? "block" : "none";
				}else{
					obj.childNodes[1].style.display = (status == "explode") ? "block" : "none";
				}
         
        }
      }
    }
  }
}
document.getElementById('menu-list').onclick = function(e)
{
  var obj = Utils.srcElement(e);
  toggleCollapseExpand(obj);
}

document.getElementById('tabbar-div').onmouseover=function(e)
{
  var obj = Utils.srcElement(e);

  if (obj.className == "tab-back")
  {
    obj.className = "tab-hover";
  }
}

document.getElementById('tabbar-div').onmouseout=function(e)
{
  var obj = Utils.srcElement(e);

  if (obj.className == "tab-hover")
  {
    obj.className = "tab-back";
  }
}

document.getElementById('tabbar-div').onclick=function(e)
{
  var obj = Utils.srcElement(e);

 // var mnuTab = document.getElementById('menu-tab');
  var hlpTab = document.getElementById('help-tab');
  var mnuDiv = document.getElementById('menu-list');
  var hlpDiv = document.getElementById('help-div');

  //if (obj.id == 'menu-tab')
//  {
//    mnuTab.className = 'tab-front';
//    hlpTab.className = 'tab-back';
//    mnuDiv.style.display = "block";
//    hlpDiv.style.display = "none";
//  }

  if (obj.id == 'help-tab')
  {
    mnuTab.className = 'tab-back';
    hlpTab.className = 'tab-front';
    mnuDiv.style.display = "none";
    hlpDiv.style.display = "block";

    loc = parent.frames['main-frame'].location.href;
    pos1 = loc.lastIndexOf("/");
    pos2 = loc.lastIndexOf("?");
    pos3 = loc.indexOf("act=");
    pos4 = loc.indexOf("&", pos3);

    filename = loc.substring(pos1 + 1, pos2 - 4);
    act = pos4 < 0 ? loc.substring(pos3 + 4) : loc.substring(pos3 + 4, pos4);
    loadHelp(filename, act);
  }
}

/**
 * ����XML����
 */
function createDocument()
{
  var xmlDoc;

  // create a DOM object
  if (window.ActiveXObject)
  {
    try
    {
      xmlDoc = new ActiveXObject("Msxml2.DOMDocument.6.0");
    }
    catch (e)
    {
      try
      {
        xmlDoc = new ActiveXObject("Msxml2.DOMDocument.5.0");
      }
      catch (e)
      {
        try
        {
          xmlDoc = new ActiveXObject("Msxml2.DOMDocument.4.0");
        }
        catch (e)
        {
          try
          {
            xmlDoc = new ActiveXObject("Msxml2.DOMDocument.3.0");
          }
          catch (e)
          {
            alert(e.message);
          }
        }
      }
    }
  }
  else
  {
    if (document.implementation && document.implementation.createDocument)
    {
      xmlDoc = document.implementation.createDocument("","doc",null);
    }
    else
    {
      alert("Create XML object is failed.");
    }
  }
  xmlDoc.async = false;

  return xmlDoc;
}

//�˵�չ��״̬������
var ToggleHanlder = new Object();

Object.extend(ToggleHanlder ,{
  SourceObject : new Object(),
  CookieName   : 'Toggle_State',
  RecordState : function(name,state)
  {
    if(state == "collapse")
    {
      this.SourceObject[name] = state;
    }
    else
    {
      if(this.SourceObject[name])
      {
        delete(this.SourceObject[name]);
      }
    }
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie(this.CookieName, this.SourceObject.toJSONString(), date.toGMTString());
  },

  Reset :function()
  {
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie(this.CookieName, "{}" , date.toGMTString());
  },

  Load : function()
  {
    if (document.getCookie(this.CookieName) != null)
    {
     //this.SourceObject = t_eval();
      var items = document.getElementsByTagName('LI');
      for (var i = 0; i < items.length; i++)
      {
        if ( items[0].getAttribute("name") == "menu" && items[0].getAttribute("id") != '20_yun')
        {
          for (var k in this.SourceObject)
          {
            if ( typeof(items[i]) == "object")
            {
              if (items[i].getAttribute('key') == k)
              {
                toggleCollapseExpand(items[i], this.SourceObject[k]);
                collapse = false;
              }
            }
          }
        }
     }
    }
	var toggleImg = document.getElementById('toggleImg');
	if(toggleImg)
	{
    	toggleImg.src = collapse ? 'images/menu_minus.gif' : 'images/menu_plus.gif';
    	toggleImg.alt = collapse ? collapse_all : expand_all;
	}
  }
});

ToggleHanlder.CookieName += "_<?php echo $this->_var['admin_id']; ?>";
//��ʼ���˵�״̬
ToggleHanlder.Load();
Ajax.call('cloud.php?is_ajax=1&act=menu_api','', start_menu_api, 'GET', 'JSON');
function start_menu_api(result)
{
      if(result.content==0)
      {
      }
      else
      {
          document.getElementById("menu-ul").innerHTML = document.getElementById("menu-ul").innerHTML + result.content;
		  var arr=[{key_data1:"lis ico_15",key_data2:"lis ico2_15"},{key_data1:"lis ico_16",key_data2:"lis ico2_16"}]
		  var explode=getClass("explode");
		  for(var i=0;i<explode.length;i++){
			explode[i].childNodes[1].style["display"]="none";
			var o=arr[i],obj=explode[i];
			for(var index in o){
				obj.setAttribute(index,o[index]);
			}
			explode[i].className="collapse "+explode[i].getAttribute("key_data1");
		  }
	
      }   
}
//-->
</script>

</body>
</html>