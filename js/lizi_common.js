$(function(){
	
	$(".shopping,.weixin,.kefu,.call").hover(function(){
		$(this).find("div").show();
	},function(){
		$(this).find("div").hide();
	});
	
	$(window).scroll(function(){
		var top=$(document).scrollTop();
		if(top>=200){
			$(".tb_box,.left_nav").show();
		}else{
			$(".tb_box,.left_nav").hide();
		}
	});
	
	
	/*收藏夹功能*/
	$("#favorite_wb").click(function() {
		var h = "http://"+location.hostname;
		var j = location.title;
		try {
			window.external.addFavorite(h, j);
		} catch (i) {
			try {
				window.sidebar.addPanel(j, h, "");
			} catch (i) {
				alert("对不起，您的浏览器不支持此操作！\n请您使用菜单栏或Ctrl+D收藏本站");
			}
     	}
	})
	
	/*回到顶部效果 start*/
	$("a.back2top").click(function(){	
		$("body,html").animate({
        	scrollTop: 0
		}, 500);
	})
	/*回到顶部效果 end*/
	
	/*头部下拉菜单 start*/
	$("#userinfo-bar li.more-menu").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	})
	/*头部下拉菜单 end*/
	
	/*购物车鼠标移入效果 start*/
	$("#ECS_CARTINFO").on("mouseenter", function() {
		$("#ECS_CARTINFO").animate(200,function(){
			$("#ECS_CARTINFO").addClass("hd_cart_hover");
			$("p.fail").show();
		})
	}).on("mouseleave", function() {
		$("#ECS_CARTINFO").animate(200,function(){
			$("#ECS_CARTINFO").removeClass("hd_cart_hover");
			$("p.fail").hide();
		})
	});
	/*购物车鼠标移入效果 end*/
	
	/*分类导航鼠标移入效果 start*/	
	var h = this;
	var b = $("#J_mainCata");
	var e = $("#J_subCata");
	var i = $("#main_nav");
	var l = null;
	var k = null;
	var d = false;
	var g = false;
	var f = false;
	
	
	i.on("mouseenter", function() {
		var m = $(this);
		if (l !== null) {
			clearTimeout(l);
		}
		if (f) {
			return;
		}
		l = setTimeout(function() {
			m.addClass("main_nav_hover");
			b.stop().show().animate({
					opacity: 1
			}, 300);
		}, 200);		
	}).on("mouseleave", function() {
		if (l !== null) {
			clearTimeout(l);
		}
		l = setTimeout(function() {
			e.css({
				opacity: 0,
				left: "100px"
			}).find(".J_subView").hide();
			b.hide();
			g = false;
			if (!f) {
				b.stop().delay(200).animate({
					opacity: 0
				}, 300, function() {
					i.removeClass("main_nav_hover");
					b.hide().find("li").removeClass("current");
				});
			} else {
				b.find("li").removeClass("current");
			}
        }, 200);
	});
	
			
	$("#J_mainCata li").mouseenter(function(){
		m = $(this);
		n = $("#J_mainCata li").index($(this));
				
		/*
		if (n > 4) {
			m.addClass("current").siblings("li").removeClass("current");
			e.find(".J_subView").hide();
			return false;
		}
		*/
		var top=m.position().top;
		e.css({top: top+i.height()});	
		
		
		
		if (g) {					
			m.addClass("current").siblings("li").removeClass("current");
			e.find(".J_subView").hide().eq(n).show();
		} else {
			if (k !== null) {
				clearTimeout(k);
			}
			k = setTimeout(function() {
					m.addClass("current").siblings("li").removeClass("current");
					g = true;
					if (d) {
						e.css({
							opacity: 1,
							left: "200px"
						}).find(".J_subView").eq(n).show();
					} else {
						c(n);
                    }
			}, 200);
		}
	})
			
	function c(m) {
		e.css({
			opacity: 1,
			left: "200px"
		}).find(".J_subView").eq(m).show();
			d = true;
	}
	
	/****商品飞入购物车效果****/
	

	
	
	
	
	
	
	
	
})

