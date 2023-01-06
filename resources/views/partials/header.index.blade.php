<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>MovePay</title>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('vendors/styles/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/media/css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/media/css/dataTables.bootstrap4.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/media/css/responsive.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jquery-steps/build/jquery.steps.css') }}">
	<script src="{{ asset('vendors/scripts/script.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/slick/slick.css') }}">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');

		 /*--This JavaScript method for Print Preview/Print document--*/
		function PrintDoc(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;
            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = '<!DOCTYPE html><head><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/media/css/dataTables.bootstrap4.css')}}" media="screen"/><link rel="stylesheet" href="{{ asset('vendors/styles/style.css') }}"></head><body>'+ divElements + '</body>';
            //Print Page
            window.print();
            //Restore orignal HTML
            document.body.innerHTML = oldPage;
        }
	</script>
</head>
<body>
<div class="pre-loader"></div>
