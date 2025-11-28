import { toggleUl, buildUl } from "../../../assets/js/common.js";

const contPhones = document.querySelector('.rmbt-footer-phone');
const contEmails = document.querySelector('.rmbt-footer-email');


if (contPhones) {
    buildUl(contPhones, '.ul-toggle-wrap', 'open');
  }
if (contEmails) {
  buildUl(contEmails, '.ul-toggle-wrap', 'open');
}