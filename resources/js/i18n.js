var I18n = require("i18n-js");
I18n.defaultLocale = "vi";
I18n.locale = document.getElementsByTagName("html")[0].getAttribute("lang");;

I18n.translations = {};

I18n.translations["en"] = {
  ok: "OK",
  alert: "Alert",
  close: "Close",

}

I18n.translations["vi"] = {
  ok: 'Đồng ý',
  alert: "Thông báo",
  close: 'Đóng',

}
export default I18n;