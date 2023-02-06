import {
  PaymentVnpayController,
} from "../controllers/index.js";

export class RouteRegistration {
  static register(app) {

    app.post(
      "/payment/vnpay",
      PaymentVnpayController.create
    );

    app.get(
      "/payment/vnpay",
      PaymentVnpayController.get
    );
  }
}
