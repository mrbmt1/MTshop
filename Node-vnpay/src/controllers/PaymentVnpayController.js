import dateFormat from 'dateformat';
import QueryString from 'qs';
import crypto from 'crypto'

export class PaymentVnpayController {

    static async create(req, res, next) {
        var tmnCode = process.env.vnp_TmnCode;
        var vnpHashSecret = process.env.vnp_HashSecret;
        var vnpUrl = process.env.vnp_Url;
        var returnUrl = process.env.vnp_Returnurl;
        var date = new Date();
        var ipAddr = req.headers['x-forwarded-for'] ||
            req.connection.remoteAddress ||
            req.socket.remoteAddress ||
            req.connection.socket.remoteAddress;

        var createDate = dateFormat(date, 'yyyymmddHHmmss');

        var orderId = req.body.orderId;
        var amount = req.body.amount;;
        var bankCode = "NCB";
        var orderInfo = req.body.orderInfo;
        var orderType = "billpayment";

        var locale = "vn";
        if (locale === null || locale === '') {
            locale = 'vn';
        }
        var currCode = 'VND';
        var vnp_Params = {};

        vnp_Params['vnp_Version'] = '2.0.0';
        vnp_Params['vnp_Command'] = 'pay';
        vnp_Params['vnp_TmnCode'] = tmnCode;
        vnp_Params['vnp_Locale'] = locale;
        vnp_Params['vnp_CurrCode'] = currCode;
        vnp_Params['vnp_TxnRef'] = orderId;
        vnp_Params['vnp_OrderInfo'] = orderInfo;
        vnp_Params['vnp_OrderType'] = orderType;
        vnp_Params['vnp_Amount'] = amount * 100;
        vnp_Params['vnp_ReturnUrl'] = returnUrl;
        vnp_Params['vnp_IpAddr'] = ipAddr;
        vnp_Params['vnp_CreateDate'] = createDate;

        if (bankCode !== null && bankCode !== '') {
            vnp_Params['vnp_BankCode'] = bankCode;
        }

        vnp_Params = sortObject(vnp_Params);
        var signData = QueryString.stringify(vnp_Params, { encode: false });
        
        var hmac = crypto.createHash("sha256")
        .update(vnpHashSecret + signData)
        .digest("hex");
        vnp_Params['vnp_SecureHashType'] = 'SHA256';
        vnp_Params['vnp_SecureHash'] = hmac;
        vnpUrl += '?' + QueryString.stringify(vnp_Params, { encode: true });

        res.status(200).json({ code: '00', data: vnpUrl })
        //res.redirect(vnpUrl)

    }

    static async get(req, res, next) {
        var tmnCode = process.env.vnp_TmnCode;
        var vnpHashSecret = process.env.vnp_HashSecret;
        var vnpUrl = process.env.vnp_Url;
        var returnUrl = process.env.vnp_Returnurl;
        var date = new Date();
        var ipAddr = req.headers['x-forwarded-for'] ||
            req.connection.remoteAddress ||
            req.socket.remoteAddress ||
            req.connection.socket.remoteAddress;

        var createDate = dateFormat(date, 'yyyymmddHHmmss');

        var orderId = req.query.orderId;
        var amount = req.query.total;;
        var bankCode = "NCB";
        var orderInfo = "orderInfo";
        var orderType = "billpayment";

        var locale = "vn";
        if (locale === null || locale === '') {
            locale = 'vn';
        }
        var currCode = 'VND';
        var vnp_Params = {};

        vnp_Params['vnp_Version'] = '2.0.0';
        vnp_Params['vnp_Command'] = 'pay';
        vnp_Params['vnp_TmnCode'] = tmnCode;
        vnp_Params['vnp_Locale'] = locale;
        vnp_Params['vnp_CurrCode'] = currCode;
        vnp_Params['vnp_TxnRef'] = orderId;
        vnp_Params['vnp_OrderInfo'] = orderInfo;
        vnp_Params['vnp_OrderType'] = orderType;
        vnp_Params['vnp_Amount'] = amount * 100;
        vnp_Params['vnp_ReturnUrl'] = returnUrl;
        vnp_Params['vnp_IpAddr'] = ipAddr;
        vnp_Params['vnp_CreateDate'] = createDate;

        if (bankCode !== null && bankCode !== '') {
            vnp_Params['vnp_BankCode'] = bankCode;
        }

        vnp_Params = sortObject(vnp_Params);
        var signData = QueryString.stringify(vnp_Params, { encode: false });
        
        var hmac = crypto.createHash("sha256")
        .update(vnpHashSecret + signData)
        .digest("hex");
        vnp_Params['vnp_SecureHashType'] = 'SHA256';
        vnp_Params['vnp_SecureHash'] = hmac;
        vnpUrl += '?' + QueryString.stringify(vnp_Params, { encode: true });
        res.redirect(vnpUrl);
        // res.status(200).json({ code: '00', data: vnpUrl })
    }

}

function sortObject(o) {
    var sorted = {},
        key, a = [];

    for (key in o) {
        if (o.hasOwnProperty(key)) {
            a.push(key);
        }
    }

    a.sort();

    for (key = 0; key < a.length; key++) {
        sorted[a[key]] = o[a[key]];
    }
    return sorted;
}
