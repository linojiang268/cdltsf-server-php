function loadProducts(page, nav) {
    $.get('/product/'+ nav +'/list/?' + 'page=' + page, function(resp) {
        if (resp.code != 0) {
            return;
        }
        var $container = $('#products'), products = resp.products;
        $container.html(''); // clear old data

        if (products && products.length) {
            for (var i = 0, n = products.length; i < n; i++) {
                var product = products[i];
                var html = '';
                html += '<div class="col-xs-3 product">';
                html += '<span></span>';
                html += '<img src="/assets/images/loading.gif" data-src="' + product.poster + '" alt="' + product.name + '" class="lazyload img-responsive" />';
                html += '<div class="text-center product-title">' + product.name + '</div>';
                html += '</div>';

                $(html).appendTo($container);
            }
        } else {
            $('<span class="text-info">暂无产品</span>').appendTo($container);
        }

        if (resp.pages > 1) {
            $('#pager').twbsPagination({
                first: "&laquo;",
                prev: "&lsaquo;",
                next: "&rsaquo;",
                last: "&raquo;",
                totalPages: resp.pages,
                visiblePages: 5,
                initiateStartPageClick:false,
                onPageClick: function (event, page) {
                    loadProducts(page, nav);
                }
            });
        }
    }, 'json');
}

$(document).ready(function () {
    $(window).load(function(){
        loadProducts(1, nav);
    });
});
