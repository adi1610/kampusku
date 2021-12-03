<?php
session_start();
if($_SESSION['user']==''){
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<!-- Global stylesheets -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"> -->
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/fontawesome/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/mask/jquery.mask.min.js"></script>

	<!-- Alertify -->
	<!-- JavaScript -->
	<script type="text/javascript" src="assets/alertifyjs/alertify.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css"/>
	<link rel="stylesheet" href="assets/alertifyjs/css/themes/bootstrap.min.css"/>


	<!-- Select2 CSS -->
	<link href="assets/css/select2.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="assets/js/select2.min.js"></script>
	<style type="text/css">
	    .navbar-inverse {
			background-color: #004b94;
			border-color: #004b94;
	    }

		th {
			text-align: center;
			background-color: #f7f7f7;

		}
		textarea {
			resize: none;
		}
		.nilai {
			text-align: right;
		}
		td .nilai {
			text-align: right;
		}
		.danger {
			color: #f44336;
		}
		.table-sticky-container {
            height: 320px;
            overflow-y: scroll;
		  /* border-top: 2px solid #c0c0c0 !important; */
		}

		.table-sticky-potongan {
            height: 700px;
            overflow-y: scroll;
		  /* border-top: 2px solid #c0c0c0 !important; */
		}

		.table-sticky-rolemenu {
		    height: 700px;
		  /* overflow-y: auto; */
			overflow: auto;

		  /* border-top: 2px solid #c0c0c0 !important; */
		}

		.table-sticky th {
		    position: sticky;
		    top: 0;
		    z-index: 2;
		    background-color: white;
            border-top: 2px solid white;
		}
		.table-sticky th:after,
		.table-sticky th:before {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
		}
		.table-sticky th:before {
            top: -1px;
            border-top: 2px solid #c0c0c0;
		}

		.table-sticky th:after {
            bottom: -1px;
            border-bottom: 2px solid #c0c0c0;
		}
		.navbar-fixed-top {
			padding: 0px;
		}
		.page-container {
			padding-top: 8%;
		}
		.navbar-fixed-bottom {
			background-color: white;
			height: 6%;
			padding-left: 20px;
		}
		.footer-content{
			margin: 10px 10px 10px 0px;
		}
		.header-cetak h3 {
			margin: 0px;
		}
		.btn-add {
            background-color: white;
            color: #004b94;
            border-radius: 20px;
            border: 2px solid #004b94;
            box-shadow: 0 1px 5px 0 rgba(0,0,0,0.2), 0 1px 5px 0 rgba(0,0,0,0.19);
		}

		.btn-add .fa-plus-square {
			color: #004b94;
		}
		.btn-back .fa-arrow-left{
			color: #999;
		}

		.btn-back:hover .fa-arrow-left {
			color: white;
		}

		.btn-add:hover {
            background-color: #004b94;
            color: white;
            border: 2px solid #004b94;
		}
		.btn-add:hover .fa-plus-square {
			color: white;
		}

		.btn-back {
            background-color: white;
            border-radius: 20px;
            color: #999;
            border: 2px solid #999;
            box-shadow: 0 1px 5px 0 rgba(0,0,0,0.2), 0 1px 5px 0 rgba(0,0,0,0.19);
		}
		.btn-back:hover {
            background-color: #999;
            color: white;
            border: 2px solid #999;
		}
		.field-icon {
            float: right;
            margin-right: 10px;
            margin-top: -23px;
            position: relative;
            z-index: 2;
		}

		input[type="checkbox"]{
		    position: relative;
			color: #fff;
            width: 55px;
            height: 23px;
            -webkit-appearance: none;
            background: #eeeeee;
            outline: none;
            border-radius: 45px;
            box-shadow: inset 0 0 5px rgba(0,0,0,.2);
            transition: .5s;
		}
		input[type="checkbox"]:after{
            content: ' Off ';
            position: absolute;
            top: 4px;
            left: 26px;
            transition: 1.5s;
            color: #b0aeae;
		}
		input:checked[type="checkbox"]{
		    background: #004b94;
		}
		input:checked[type="checkbox"]:after{
            content: ' On ';
            position: absolute;
            top: 4px;
            left: 11px;
            transition: 1.5s;
            color: #fff;
		}
		input[type="checkbox"]:before{
            content: '';
            position: absolute;
            width: 23px;
            height: 23px;
            border-radius: 50%;
            top: -1px;
            left: 0;
            background: #fff;
            transform: scale(1.1);
            box-shadow: 0 2px 5px rgba(0,0,0,0.5);
            transition: .5s;
            padding: 12px 3px;
            font-size: 11px;
		}
		input:checked[type="checkbox"]:before {
		    left: 38px;
		}

        button,input[type=submit],input[type=reset] {
            font-family: sans-serif;
            font-size: 30px;
            background: #22a4cf;
            color: white;
            border: white 3px solid;
            border-radius: 15px;
            padding: 30px 50px;
            margin-top: 30px;
            margin-bottom: 60px;
        }
        a {
            text-decoration: none;
        }
        a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
            opacity:0.9;
        }
	</style>

</head>

<body>
	<!-- Second navbar -->
	<div class="navbar navbar-fixed-top navbar-default" id="navbar-second">
		<div class="navbar navbar-inverse">
            <div class="raw">

                <div class="navbar-header col-md-4">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                    
                    <ul class="nav navbar-nav pull-right visible-xs-block">
                        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    </ul>
                    <!-- <p class="navbar-text"><span class="label bg-success-400">Online</span></p> -->
                    
                </div>
                
                <div class="navbar-header col-md-4">
                    <p class="text-center" ><font size="5"><h1>SISTEM INFORMASI MAHASISWA</h1></font></p>
                </div>
                
                <div class="navbar-header col-md-4">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/avatar.png" alt="">
                                <span><?php echo $_SESSION['user'];?></span>
                                <i class="caret"></i>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="setting.php"><i class="icon-cog5"></i>settings</a></li>
                                <li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>

		</div>
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class=" collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<!-- <div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{url('/')}}"><i class="icon-display4 position-left"></i>Dashboard</a></li>
			</ul>
			<div id="menu"></div>
		</div> -->
	</div>
	<!-- /second navbar -->

	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Main charts -->
				<div class="row">
					<div class="col-lg-12">
						<!-- Traffic sources -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<!-- <nav aria-label="breadcrumb"> -->
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><b></b></li>
                                        <!-- <li class="breadcrumb-item active" aria-current="page"></li> -->
                                    </ol>
								<!-- </nav> -->
								<!-- <h6 class="panel-title">@yield('page_tittle')</h6> -->
							</div>
							<div class="halaman" style="padding-left:15px;padding-right:15px;padding-bottom:15px;padding-top: 0px">
								<div class="row">
                                    <!-- @yield('content') -->
                                    <div class="col-md-4 text-center">
                                        <button>MAHASISWA</button>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <button>LAPORAN</button>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="setting.php"><button>ADMIN</button></a>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<div class="navbar-fixed-bottom text-muted">
			<div class="footer-content">
				<a href="adicahyo.com" target="_blank">adicahyo.com</a> &copy; 2021
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">

// Format Number
$('.number2').mask('000.000.000.000.000.000.000,00', {reverse: true});
$('.number').mask('###.###.###.###.###.###.###,##', {
    reverse: true,
    translation: {
        '#': {
            pattern: /-|\d/,
            recursive: true
        }
    },
    onChange: function(value, e) {
    e.target.value = value.replace(/^-./, '-');
}
});

alertify.defaults.theme.ok = "btn btn-sm btn-danger";
alertify.defaults.theme.cancel = "btn btn-sm btn-secondary";
alertify.set('notifier','position', 'top-center');
alertify.set('notifier','delay', 3);

	//print pdf

	function printPDF(){
        var divToPrint=document.getElementById("content");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    //print excel

	var tableToExcel = (function () {
        var uri = 'data:application/vnd.ms-excel;base64,'
        , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
        , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
        , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
        return function (table, name, filename) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }

            document.getElementById("dlink").href = uri + base64(format(template, ctx));
            document.getElementById("dlink").download = filename;
            document.getElementById("dlink").click();

        }
    })();

    function closeTab(){
		window.close();
	}
	// FORMAT NUMBER
		const Rp = (money) => {
			 return new Intl.NumberFormat('id-ID',
				 { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 }
			 ).format(money);
		}

		Number.prototype.format = function(n, x, s, c) {
	    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
	        num = this.toFixed(Math.max(0, ~~n));

	    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
	  };

	  function formatRupiah2(obj){
	    obj.value=comma(obj.value);
	  }

	  function comma(Num) { //function to add commas to textboxes
	    Num += '';
	    Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
	    Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
	    x = Num.split('.');
	    x1 = x[0];
	    x2 = x.length > 1 ? '.' + x[1] : '';
	    var rgx = /(\d+)(\d{3})/;
	    while (rgx.test(x1))
	        x1 = x1.replace(rgx, '$1' + ',' + '$2');
	    return x1 + x2;
	  }


		$(".toggle-password").click(function() {

		  $(this).toggleClass("fa-eye fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
		    input.attr("type", "text");
		  } else {
		    input.attr("type", "password");
		  }
		});

		window.setTimeout(function() {
			$("#notif-alert").fadeTo(500,0).slideUp(500, function() {
				$(this).remove();
			});
		},2000);

		



</script>
</html>
