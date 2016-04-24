$(document).ready(function () {
    $(window).load(function () {
        loadNewspaper(1, nav);
    });
});

function loadNewspaper(page, nav) {
    $.get('/news/' + nav + '/list/?' + 'page=' + page, function (resp) {
        if (resp.code != 0) {
            return;
        }

        var $table = $('#news'),
            newspaper = resp.news;
        
        var $container = $('tbody', $table);
        $container.html(''); // clear old data
        if (newspaper && newspaper.length) {
            for (var i = 0, n = newspaper.length; i < n; i++) {
                var news = newspaper[i];
                var html = '<tr>';
                html += '<td><a href="/news/' + news.type + '/' + news.id + '">' + news.title + '</a></td>';
                html += '<td class="text-right">' + news.created_at + '</td>';
                html += '</tr>';
                $(html).appendTo($container);
            }
        } else {
            $('<tr><td colspan="2"><span class="text-info">暂无新闻</span></td></tr>').appendTo($container);
        }

        if (resp.pages > 1) {
            $('#pager').twbsPagination({
                first: "&laquo;",
                prev: "&lsaquo;",
                next: "&rsaquo;",
                last: "&raquo;",
                totalPages: resp.pages,
                visiblePages: 5,
                initiateStartPageClick: false,
                onPageClick: function (event, page) {
                    loadNewspaper(page, nav);
                }
            });
        }
    }, 'json');
}
