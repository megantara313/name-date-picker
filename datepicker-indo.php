<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!--DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" />
  <!--Daterangepicker -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <style type="text/css">
    .header h2 {
      font-weight: lighter;
      text-align: center;
      margin: 0
    }

    .header h3 {
      font-weight: lighter;
      text-align: center;
      margin: 0
    }

    .number {
      text-align: right;
    }
  </style>
  <!-- start idpicker -->
  <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/darkly/bootstrap.min.css"> -->
  <!-- check this -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- begin input-to-dropdown sources -->
  <link rel="stylesheet" href="input-to-dropdown.css">
  <script src="input-to-dropdown.js"></script>
  <!-- end input-to-dropdown sources -->
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form>
          <div class="col-xs-12 col-sm-9">
            <div class="checkbox-group-1">
            <span>select by name :</span>
              <table>
                <tr>            
                  <td><input id="val1" type="checkbox"> <label for="val1">Alexa</label></td>
                  <td><input id="val2" type="checkbox"> <label for="val2">Avram</label></td>
                  <td><input id="val3" type="checkbox"> <label for="val3">Basia</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Bryar</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Cruz</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Dexter</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Dustin</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Hamilton</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Ifeoma</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Indigo</label></td>
                  <td><input id="val4" type="checkbox"> <label for="val4">Ishmael</label></td>
                </tr>
              </table>
            </div>
            <script>inputsToDropdown('.checkbox-group-1', 'Select please', 'checkbox', '.checkbox-group-1', '.checkbox-group-1 table');</script>
          </div>
        </form>
        <table  id="example" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Last name</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alexa</td>
              <td>Wilder</td>
              <td>01-06-2023</td>
            </tr>
            <tr>
              <td>Avram</td>
              <td>Allison</td>
              <td>05-06-2023</td>
            </tr>
            <tr>
              <td>Basia</td>
              <td>Harrell</td>
              <td>06-06-2023</td>
            </tr>
            <tr>
              <td>Bryar</td>
              <td>Long</td>
              <td>07-06-2023</td>
            </tr>
            <tr>
              <td>Cruz</td>
              <td>Reynolds</td>
              <td>08-06-2023</td>
            </tr>
            <tr>
              <td>Dexter</td>
              <td>Burton</td>
              <td>09-06-2023</td>
            </tr>
            <tr>
              <td>Dustin</td>
              <td>Rosa</td>
              <td>11-06-2023</td>
            </tr>
            <tr>
              <td>Hamilton</td>
              <td>Blackburn</td>
              <td>15-06-2023</td>
            </tr>
            <tr>
              <td>Ifeoma</td>
              <td>Mays</td>
              <td>19-01-2020</td>
            </tr>
            <tr>
              <td>Indigo</td>
              <td>Brennan</td>
              <td>22-01-2020</td>
            </tr>
            <tr>
              <td>Ishmael</td>
              <td>Crosby</td>
              <td>25-01-2020</td>
            </tr>
            <tr>
              <td>Jessica</td>
              <td>Bryan</td>
              <td>30-01-2020</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- start id-picker -->
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <!-- end id picker -->

  <!--Jquery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!--Boostrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--DataTables -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
  <!--DateRangePicker -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  <script type="text/javascript">
    //fungsi untuk filtering data berdasarkan tanggal 
    var start_date;
    var end_date;
    var DateFilterFunction = (function (oSettings, aData, iDataIndex) {
      var dateStart = parseDateValue(start_date);
      var dateEnd = parseDateValue(end_date);
      //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
      //nama depan = 0
      //nama belakang = 1
      //tanggal terdaftar =2
      var evalDate = parseDateValue(aData[2]);
      if ((isNaN(dateStart) && isNaN(dateEnd)) ||
        (isNaN(dateStart) && evalDate <= dateEnd) ||
        (dateStart <= evalDate && isNaN(dateEnd)) ||
        (dateStart <= evalDate && evalDate <= dateEnd)) {
        return true;
      }
      return false;
    });

    // fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
    function parseDateValue(rawDate) {
      var dateArray = rawDate.split("-");
      var parsedDate = new Date(dateArray[2], parseInt(dateArray[1]) - 1, dateArray[0]);  // -1 because months are from 0 to 11   
      return parsedDate;
    }

    $(document).ready(function () {
      //konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
      var $dTable = $('#example').DataTable({
        "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row'<'col-sm-5'i><'col-sm-7'p>>"
      });

      //menambahkan daterangepicker di dalam datatables
      $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"> <i class="glyphicon glyphicon-calendar"></i> </div><input type="text" class="form-control pull-right" id="datesearch" placeholder="Search by date range.."> </div>');

      document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

      //konfigurasi daterangepicker pada input dengan id datesearch
      $('#datesearch').daterangepicker({
        autoUpdateInput: false
      });

      //menangani proses saat apply date range
      $('#datesearch').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
        start_date = picker.startDate.format('DD-MM-YYYY');
        end_date = picker.endDate.format('DD-MM-YYYY');
        $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
        $dTable.draw();
      });

      $('#datesearch').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
        start_date = '';
        end_date = '';
        $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
        $dTable.draw();
      });
    });
  </script>
</body>

</html>