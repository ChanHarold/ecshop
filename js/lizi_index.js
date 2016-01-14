$(function(){
	/*首页幻灯片效果 start*/
	$(".index-banner").slide({titCell:".triggers a",mainCell:".index-slide ul",autoPlay:true,titOnClassName:"current",effect:"fold"});
	/*首页幻灯片效果 end*/
	
	/*首页幻灯片效果 start*/
	$(".buy60s_main").slide({mainCell:"#buy60s_silde",nextCell:".buy60s_next",prevCell:".buy60s_prve",autoPage:true,effect:"left",vis:1,easing:"easeOutCirc"});
	/*首页幻灯片效果 end*/
	
	$(".ads_pos").each(function(){
		$(this).find("a").removeAttr("href");
	});
	
	
	
	function Options(id,cName,model,method){
		this.id=$("#"+id);
		this.li=this.id.find("."+cName).find("li");
		this.model=this.id.find("."+model);
		this.method=method;
		this.init();
	}
	Options.prototype.init=function(){
		var that=this;
		this.model.eq(0).show();
		this.li.eq(0).addClass("active");
		this.li.mouseover(that.method,function(){
			var index=that.li.index(this);
			that.li.removeClass("active");
			that.li.eq(index).addClass("active");
			that.model.css("display","none");
			that.model.eq(index).css("display","block");
		});	
	}
		
	$(".floor_wrap").each(function(i){
		$(this).addClass("floor_wrap"+(i+1));
		$(this).attr("id","floor_wrap"+(i+1));
		$("font.font").eq(i).text(i+1);
		new Options("floor_wrap"+(i+1),"cat_name_floor2","cat_goods","click");
	}); 
	
	function get_floor(){
		var arr=[];
		$(".floors").each(function(i){
			arr[i]=$(this).offset().top;
		});
		
		var li=$(".left_nav").find("li");
		li.click(function(){
			var index=li.index(this);
			$(document).scrollTop(arr[index]);
		});
	}
	get_floor();
	/*首页倒计时广告 start*/
	setInterval(function(){
      $(".timer").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
				var str = '剩余'+myD+'天'+myH_show+'时'+myM+'分'+myS+'秒';
			}
			else
			{
				var str = '剩余'+myH+'时'+myM+'分'+myS+'秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);
	/*首页倒计时广告 end*/
})