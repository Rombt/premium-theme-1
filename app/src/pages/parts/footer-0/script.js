import { toggleUl, buildUl } from "../../../assets/js/common.js";

const contPhones = document.querySelector('.rmbt-contact-row');
// const contEmails = document.querySelector('.rmbt-header-2-top-col-left__email');


if (contPhones) {
    buildUl(contPhones, '.ul-toggle-wrap', 'open');
  }
//   if (contEmails) {
//     buildUl(contEmails, '.ul-toggle-wrap');
//   }