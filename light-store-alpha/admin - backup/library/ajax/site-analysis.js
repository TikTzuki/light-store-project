$(document).ready(function() {
    //ngày hiện tại
    let instanceDate = new Date(),
        instanceD = instanceDate.getDate() > 9 ? instanceDate.getDate() : 0 + "" + instanceDate.getDate(),
        instanceM = ((instanceDate.getMonth() + 1) > 9) ? (instanceDate.getMonth() + 1) : 0 + "" + (instanceDate.getMonth() + 1),
        instanceY = instanceDate.getFullYear();
    //Thiết lập giới hạn đến ngày hiện tại
    $('#end-date-analysis').attr({
        'value': instanceY + "-" + instanceM + "-" + instanceD,
        'max': instanceY + "-" + instanceM + "-" + instanceD
    });
    //Thiết lập giới hạn ngày bắt đầu phải trước ngày sau
    $('#start-date-analysis').attr({
        'value': instanceY + "-" + (((instanceM - 1) > 9) ? (instanceM) : (0 + "" + (instanceM - 1))) + "-" + instanceD,
        'max': instanceY + "-" + instanceM + "-" + instanceD
    });
    //Show dữ liệu
    showAnalysis(instanceY + "-" + (((instanceM - 1) > 9) ? (instanceM) : (0 + "" + (instanceM - 1))) + "-" + instanceD, instanceY + "-" + instanceM + "-" + instanceD);
    //Sự kiện input date thay đổi giá trị
    $('#start-date-analysis, #end-date-analysis').on("change", function() {
        let startDateAnalysis = new Date($("#start-date-analysis").val()),
            startD = startDateAnalysis.getDate() > 9 ? startDateAnalysis.getDate() : 0 + "" + startDateAnalysis.getDate(),
            startM = ((startDateAnalysis.getMonth() + 1) > 9) ? (startDateAnalysis.getMonth() + 1) : 0 + "" + (startDateAnalysis.getMonth() + 1),
            startY = startDateAnalysis.getFullYear();
        let endDateAnalysis = new Date($('#end-date-analysis').val()),
            endD = endDateAnalysis.getDate() > 9 ? endDateAnalysis.getDate() : 0 + "" + endDateAnalysis.getDate(),
            endM = ((endDateAnalysis.getMonth() + 1) > 9) ? (endDateAnalysis.getMonth() + 1) : 0 + "" + (endDateAnalysis.getMonth() + 1),
            endY = endDateAnalysis.getFullYear();
        //Thiết lập lại giới hạn ngày bắt đầu
        $('#start-date-analysis').attr({
            'max': endY + "-" + endM + "-" + endD
        })
        showAnalysis(startY + "-" + startM + "-" + startD, endY + "-" + endM + "-" + endD);
        console.log(startDateAnalysis + " " + endDateAnalysis);
    });



    let afterDate = instanceDate.getFullYear() + "-" + (instanceDate.getMonth() + 1) + "-" + instanceDate.getDate();

})

function showAnalysis(beforeDate, afterDate) {
    let result;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            result = this.responseText.split("|;|");
            result = {
                totalRevenue: result[0],
                totalOrder: result[1],
                avgOrderValue: result[2],
                totalProductsSelled: result[3],
                topSellerComponents: result[4]
            }
            $("#total-revenue").html(result.totalRevenue + ' &#8363;');
            $("#total-order").html(result.totalOrder);
            $('#avg-order-value').html(result.avgOrderValue + ' &#8363;');
            $("#total-products-selled").html(result.totalProductsSelled);
            $('.comment-widgets').html(result.topSellerComponents);
        }
    }

    xmlhttp.open("GET", "./controller/homeAjax.php?beforedate=" + beforeDate + "&afterdate=" + afterDate, true);
    xmlhttp.send();
}