/*
 * This makes sure that we can use the global
 * swal() function, instead of swal.default()
 * See: https://github.com/webpack/webpack/issues/3929
 */

if (typeof window !== 'undefined') {
  require('smartkada-v2/public/assets/js/plugins/src/sweetalert.css');
}

require('smartkada-v2/public/assets/js/plugins/src/polyfills');

var swal = require('smartkada-v2/public/assets/js/plugins/src/core').default;

module.exports = swal;
