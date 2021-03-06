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

    $('.currency').ready(function() {
        displayCurrency($('.currency').html());
    });

})

function displayCurrency(currency) {
    let resultString = currency.length;
    switch (currency.length % 3) {
        case 0:
            while (currency.length > 0) {
                resultString += currency.slice(0, 3);
                currency = currency.slice(3, currency.length);
            }
            break;
        case 1:
            resultString += currency.slice(0, 0);
            currency = currency.slice(1, currency.length);
            while (currency.length > 0) {
                resultString += "." + currency.slice(0, 3);
                currency = currency.slice(3, currency.length);
            }
            break;
        case 2:
            resultString += currency.slice(0, 1);
            currency = currency.slice(2, currency.length);
            while (currency.length > 0) {
                resultString += "." + currency.slice(0, 3);
                currency = currency.slice(3, currency.length);
            }
            break;
        default:
            break;
    }
    return resultString;
}

function showAnalysis(beforeDate, afterDate) {
    let result;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            result = this.responseText.split("|;|");
            result = {
                totalRevenue: result[0],
                totalOrder: result[1],
                totalSuccessOrder: result[2],
                avgOrderValue: result[3],
                totalProductsSelled: result[4],
                totalCustomer: result[5],
                topProductSelledComponents: result[6],
                topCategorySelledComponents: result[7],
                topBrandSelledComponents: result[8],
                topCustomerComponents: result[9]
            }
            $("#total-revenue").html(displayCurrency(result.totalRevenue) + ' &#8363;');
            $("#total-order").html(result.totalOrder);
            $('#total-success-order').html(result.totalSuccessOrder);
            $('#avg-order-value').html(displayCurrency(result.avgOrderValue) + ' &#8363;');
            $("#total-products-selled").html(result.totalProductsSelled);
            $('#total-customer').html(result.totalCustomer);
            $('.comment-widgets').html(result.topProductSelledComponents);
            $('#top-category-selled-ajax').html(result.topCategorySelledComponents);
            $('#top-brand-selled-ajax').html(result.topBrandSelledComponents);
            $('#top-customer-ajax').html(result.topCustomerComponents);
        }
    }

    xmlhttp.open("GET", "./controller/homeAjax.php?beforedate=" + beforeDate + "&afterdate=" + afterDate, true);
    xmlhttp.send();
}