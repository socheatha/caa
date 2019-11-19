
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.jqueryui = require('admin-lte/bower_components/jquery-ui/jquery-ui.min.js');

    // require('bootstrap');
    window.Bootstrap = require('admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js');
    window.moment = require('admin-lte/bower_components/moment/moment');
    window.drp = require('admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.js');
    window.dp = require('eonasdan-bootstrap-datetimepicker');
    window.slimscroll = require('admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');
    window.dt = require('admin-lte/bower_components/datatables.net/js/jquery.dataTables.min.js');
    window.dtbs = require('admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');
    window.select2 = require('admin-lte/bower_components/select2/dist/js/select2.full.min.js');
    window.fastclick = require('admin-lte/bower_components/fastclick/lib/fastclick.js');
    window.pace = require('admin-lte/plugins/pace/pace.min.js');
    window.Swal = require('sweetalert2');
    window.adminlte = require('admin-lte');
    require('./default');


} catch (e) {}


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}