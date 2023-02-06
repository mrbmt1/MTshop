
var COMPARE_ARR_PRODUCT_ID = new Array();

function AddToCompare(ctrl, id) {
    var data = { CategoryID: GL_CATEGORYID, ProductID: id };
    POSTAjax(
        '/aj/Category/ProductCompare/',
        data,
        BeforeSendAjax,
        function (e) {
            $('#dlding').fadeOut(300);
            if (e == null || e == '' || e.toString() == '[object XMLDocument]') {
                return;
            }
            if (typeof (e) == 'object') {
                alert(e._error);
                return;
            }
            if (ctrl != undefined) {
                $(ctrl).parent('.add-to-compare').replaceWith('<div id="addedtocompare-' + id + '" class="add-to-compare is-added clearfix"><span onclick="RemoveFromCompare(' + id + ')">Đã chọn so sánh</span></div>');
            }
            $('#catprodcmpr').html(e);
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            $(' .compare-chart-wrapper .compare-chart li.row:last').show();
            RefreshCompareView();
        },
        ErrorAjax,
        true
        );
}

// Remove a product from comparing list
function RemoveFromCompare(id) {
    var data = { CategoryID: GL_CATEGORYID, RemoveProductID: id };
    POSTAjax(
        '/aj/Category/ProductCompare/',
        data,
        BeforeSendAjax,
        function (e) {
            if (e != null) {
                $('#addedtocompare-' + id).replaceWith('<div class="add-to-compare clearfix"><span onclick="AddToCompare(this, ' + id + ')">Thêm vào so sánh</span></div>');
                $('#catprodcmpr').html(e);
            }
            RefreshCompareView();
            $('#dlding').fadeOut(300);
        },
        ErrorAjax,
        true
        );
}

// Remove all comparing product
function RemoveAllCompare() {
    var data = { CategoryID: GL_CATEGORYID };
    $('#catprodcmpr').html('');s
    $('div[id^=addedtocompare-]').each(function () {
        var id = $(this).attr('id').replace('addedtocompare-', '');
        $(this).replaceWith('<div class="add-to-compare clearfix"><a href="javascript:void(0)" onclick="AddToCompare(this, ' + id + ')">Thêm vào so sánh</a></div>');
    });
    POSTAjax(
        '/aj/Category/RemoveAllCompare/',
        data,
        BeforeSendAjax,
        function (e) {
            $('#dlding').fadeOut(300);
        },
        ErrorAjax,
        true
        );
    SHOW_COMPARE_CONTENT = true;
    EXPAND_PRODUCT_COMPARE_TABLE = true;
}

var SHOW_COMPARE_CONTENT = true;
function ShowCompareContent() {
    $('.compare-chart-wrapper').slideDown(500);
    SHOW_COMPARE_CONTENT = false;
}





function HideCompareContent() {
    SHOW_COMPARE_CONTENT = true;
    $('.compare-chart-wrapper').slideUp();
}

/// DOCUMENT READY ///
$(document).ready(function () {
 

    $('.product-filter-wrapper .title,  .product-filter-wrapper .filter').live('mouseover', (function () {
        $(this).addClass('on-hover');
    })).live('mouseout', (function () {
        $(this).removeClass('on-hover');
    }));

    $.waypoints.settings.scrollThrottle = 1;

    $('  .product-filter-wrapper').waypoint(function (event, direction) {
        if (direction === 'down') {
            $(this).addClass('product-filter-wrapper-sticky');
            $('  .product-compare-wrapper').addClass('product-compare-wrapper-sticky');
        } else {
            $(this).removeClass('product-filter-wrapper-sticky');
            $('  .product-compare-wrapper').removeClass('product-compare-wrapper-sticky');
        }
    });

    $(window).scroll(function () { StickyLeftSideBar(); });

    $('  .compare-chart-wrapper .compare-chart li.expand-button-wrapper').click(function () {
        $(' .compare-chart-wrapper .compare-chart li.hide').toggleClass('show');
    });

    // random first banner position
    var CAT_SLIDE_LENGTH = $('li.double-col.banner .image-wrapper .slides_container .slide').length;

    if (CAT_SLIDE_LENGTH > 1) {
        var nextIndex = Math.floor((Math.random() * CAT_SLIDE_LENGTH) + 1) - 1;
        var nextElement = $('li.double-col.banner .image-wrapper .slides_container .slide').eq(nextIndex);

        $('li.double-col.banner .image-wrapper .slides_container .slide').eq(nextIndex).remove();

        $('li.double-col.banner .image-wrapper .slides_container').prepend(nextElement);
    }

   

    

   

  

});

