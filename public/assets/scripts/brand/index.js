function loadProducts(a,t){$.get("/product/"+t+"/list/?page="+a,function(a){if(0==a.code){var o=$("#products"),e=a.products;if(o.html(""),e&&e.length)for(var s=0,n=e.length;n>s;s++){var i=e[s],d="";d+='<div class="col-xs-3 product">',d+="<span></span>",d+='<img src="/assets/images/loading.gif" data-src="'+i.poster+'" alt="'+i.name+'" class="lazyload img-responsive" />',d+='<div class="text-center product-title">'+i.name+"</div>",d+="</div>",$(d).appendTo(o)}else $('<span class="text-info">暂无产品</span>').appendTo(o);a.pages>1&&$("#pager").twbsPagination({first:"&laquo;",prev:"&lsaquo;",next:"&rsaquo;",last:"&raquo;",totalPages:a.pages,visiblePages:5,initiateStartPageClick:!1,onPageClick:function(a,o){loadProducts(o,t)}})}},"json")}$(document).ready(function(){$(window).load(function(){$("#page-preloader").fadeOut(800)})}),$(document).ready(function(){$(window).load(function(){loadProducts(1,nav)})});