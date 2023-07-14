<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Input To Dropdown Demos</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/darkly/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- begin input-to-dropdown sources -->
    <link rel="stylesheet" href="input-to-dropdown.css">
    <script src="input-to-dropdown.js"></script>
    <!-- end input-to-dropdown sources -->
</head>
<body>
<form>
                <div class="col-xs-12 col-sm-9">
                        <div class="checkbox-group-1">
                            <table>
                                <tr>
                                    <td><input id="val1" type="checkbox"> <label for="val1">Value 1</label></td>
                                    <td><input id="val2" type="checkbox"> <label for="val2">Value 2</label></td>
                                    <td><input id="val3" type="checkbox"> <label for="val3">Value 3</label></td>
                                    <td><input id="val4" type="checkbox"> <label for="val4">Value 4</label></td>
                                </tr>
                            </table>
                        </div>
                        <script>inputsToDropdown('.checkbox-group-1', 'Select please', 'checkbox', '.checkbox-group-1', '.checkbox-group-1 table');</script>
                    </div>
</form> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>                    
</body>
</html>
