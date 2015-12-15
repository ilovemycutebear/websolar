<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="icon" href="bootstrap-3.3.4-dist/favicon.ico"-->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/datepicker/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/datepicker/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet">
     <link href="datatable/DataTables-1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">
     <link href="datatable/DataTables-1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
     <link href="datatable/Buttons-1.1.0/css/buttons.bootstrap.min.css" rel="stylesheet">
     <link href="datatable/Buttons-1.1.0/css/buttons.dataTables.min.css" rel="stylesheet">
      <link href="datatable/KeyTable-2.1.0/css/keyTable.bootstrap.min.css" rel="stylesheet">
    <link href="datatable/KeyTable-2.1.0/css/keyTable.dataTables.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/sunloader.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="../../assets/js/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
  function loadpag1(){ 
      window.location.href = "mainPage.php?="+ (new Date()).getTime();
    }
    </script>
  </head>
     <div class="sunloader">

<svg viewbox="-200 -150 400 300">
  <defs>
    <line id="ray" x1="-5" x2="5"></line>
    <clipPath id="cp">
      <rect x="-200" y="-150" width="400" height="150"></rect>
    </clipPath>
  </defs>
  <line id="line" x1="-76" x2="76"></line>
  <text text-anchor="middle" y="45">loading please wait..</text>
  <g id="sun" clip-path="url(#cp)">
    <g id="mover">
      <circle id="main" r="50"></circle>
      <g id="eyes">
        <circle r="3" cx="-13"></circle>
        <circle r="3" cx="13"></circle>
      </g>
      <g id="rays">
        <use xlink:href="#ray" transform="rotate(315) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(270) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(225) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(180) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(135) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(90) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(45) translate(70)"></use>
        <use xlink:href="#ray" transform="rotate(0) translate(70)"></use>
      </g>
    </g>
  </g>
</svg>
     </div>
  <body>
  <div id="cont">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" onclick="loadpag1();">NSRC-National Solar Radiation Center</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active" id="flista"><a href="#" id="flist">SOLAR RADIATION</a></li>
            <li id="slista"><a href="#" id="slist">UV RADIATION</a></li>
            <li id="tlista"><a href="#" id="tlist">SUNSHINE DURATION</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
     <form action="data.php" class="js-ajax-php-json" method="post" accept-charset="utf-8"> 
    <div class="container">
   
  <ul class="list-inline">
    <h2>BY DATE:</h2>
<div class="span5 col-md-5"id="sandbox-container">        
    <div class="input-daterange input-group" id="datepicker">
        <input type="text" class="input-sm form-control btn-default" name="start" id="starts" />
        <span class="input-group-addon">to</span>
        <input type="text" class="input-sm form-control btn-default" name="end" id="ends"/>
    </div>
</div>

    <li><!--Locations-->
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Locations..
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation" class="dropdown-header">Choose Location</li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="bhllist">Bohol</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="esvlist">El Salvador</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="lgzlist">Legazpi</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="tglist">Tuguegarao</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="dvlist">Davao</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="balist">Baler</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="puprilist">Puerto Princesa</a></li>
    </ul>
    </div>
    </li>
     
    <button class="btn btn-info dropdown-toggle" type="submit" id="menu4" data-toggle="dropdown">GENERATE
    </button>
    <h2>ALL DATA:</h2>
    <li><!--Locations-->
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu6" data-toggle="dropdown">Locations..
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation" class="dropdown-header">Choose Location</li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="bhllist1">Bohol</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="esvlist1">El Salvador</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="lgzlist1">Legazpi</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="tglist1">Tuguegarao</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="dvlist1">Davao</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="balist1">Baler</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="puprilist1">Puerto Princesa</a></li>
    </ul>
    </div>
    </li>
    <button class="btn btn-info dropdown-toggle" type="submit" id="menu5" data-toggle="dropdown">ALL DATA
    </button>
    </li>
</ul>
</div>
<!--datatable-->
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Site ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Average</th>
                <th>Minimum</th>
                <th>Maximum</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Site ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Average</th>
                <th>Minimum</th>
                <th>Maximum</th>
            </tr>
        </tfoot>
        <tbody id="tbl_body">
        </tbody>
    </table>
    <table id="sunshinetbl" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Site ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Sunshine</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Site ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Sunshine</th>
            </tr>
        </tfoot>
        <tbody id="tbl_body">
        </tbody>
    </table>


<!--datatable-->

      </form>
        </div>
      </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.4-dist/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="datatable/DataTables-1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="datatable/DataTables-1.10.10/js/dataTables.bootstrap.min.js"></script>
    <script src="datatable/Buttons-1.1.0/js/dataTables.buttons.min.js"></script>
    <script src="datatable/Buttons-1.1.0/js/buttons.print.min.js"></script>
    <script src="datatable/Buttons-1.1.0/js/buttons.html5.min.js"></script>
    <script src="datatable/Buttons-1.1.0/js/buttons.bootstrap.min.js"></script>
    <script src="datatable/KeyTable-2.1.0/js/dataTables.keyTable.min.js"></script>


        <script src="js/jsonproc.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--script src="../../assets/js/vendor/holder.js"--></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"--></script>
  </body>
</html>
