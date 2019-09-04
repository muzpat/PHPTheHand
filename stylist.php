<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />

    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.position.js"></script>
    <!-- Bootstrap core CSS -->
    <!--    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />-->

    <!-- Custom styles for this template -->
    <!--   <link href="pricing.css" rel="stylesheet" />-->
    <style>
.ui-dialog {
   top: 300px;
   left: 500px !important;
}
    </style>

</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-center bg-white border-bottom box-shadow">
            <h5 class="my-0 mr-md-auto font-weight-normal">
                <a href="#" onclick="window.location.href = 'index.php';">
                    <img width="567" height="144" src="listening1.gif" border="0" />
                </a>
            </h5>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark"></nav>


        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <nav class="my-2 my-md-0 mr-md-3">
                <a href="#" onclick="window.location.href = 'index.php';">Home</a>
                <!--           <a class="
                p-2 text-dark" onclick="whoamI(this)" href="#">
                Massage Therapist's Page
            </a>

            <a class="p-2 text-dark" href="Management.php">Management Admin</a>
            <a class="p-2 text-dark" href="/Home/Blog">Blog</a>
            <a class="p-2 text-dark" onclick="whichuser(this)" href="#">Users</a>-->
            </nav>

        </div>

    </div>
        <div class="container">
            <h2 style="align-content:center">
                Your Appointments:&nbsp;&nbsp;
                <label id="mass1"></label>
            </h2>
            <table class="table table_condensed" id="Grid"></table>
        </div>

        <script type="text/javascript">
        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                vars[key] = value;
            });
            return vars;
        }
        $(document).ready(function () {
            var myurl = getUrlVars();
            var myParam = myurl["stylist"];
            myParam = decodeURIComponent(myParam);
            console.log("url parameter: ", myParam);
            var mydata = { stylist: myParam };
            console.log("stylist.php: ");
            $('#mass1').html(myParam);

            $.ajax({
                url: 'GetAppointments.php',
                type: "GET",
                cache: false,
                contentType: "application/json; charset=utf-8",
                dataType: 'json',
                data: mydata,
                cache: false,
                async: true,
                success: function (response) {
                //    console.log(JSON.stringify(JSON.parse(response)));
              //      var data = $.parseJSON(response);
                    console.log(response);
                    var items = response;
                   // console.log(items.data[0].id);
                  //  console.log(" items.data.length: ", items.data.length);
                    var data = response;
                    //    $('#Grid').append('<table><tr><th>Date</th><th>Time</th><th>Stylist</th><th>Customer</th><th>Phone</th><th>Style</th><th>Info</th></tr>');
                    var today = '';
                    var row = '';
                    var laststarttime = 0;
                    var yesterday = ''
                    row = '<div  id="rw1" class="row">  ';
                    for (var i = 0; i < items.data.length; ++i) {
                        if (i == 0) {

                            if (items.data[i].dayoftheweek == 1) {
                                today = "Sunday";
                            } else if (items.data[i].dayoftheweek == 2) {
                                today = "Monday";
                            } else if (items.data[i].dayoftheweek == 3) {
                                today = "Tuesday";
                            } else if (items.data[i].dayoftheweek == 4) {
                                today = "Wednesday";
                            } else if (items.data[i].dayoftheweek == 5) {
                                today = "Thursday";
                            } else if (items.data[i].dayoftheweek == 6) {
                                today = "Friday";
                            } else if (items.data[i].dayoftheweek == 7) {
                                today = "Saturday";
                            } else {
                                today = "n/a";
                            }
                            console.log("today: ", today);
                            yesterday = items.data[i].theday;
                            row = row + '<div>';   /// extra div
                            //column
                            row = row + '    <div id="col1" class="col">         <div class="card"   id="card2" style="width: 9rem;">            <div  id="ch2" class="card-header">';
                            row = row + '<b>Today </b></br>' + dateformat(items.data[i].theday);
                            row = row + '</div> <ul class="list-group list-group-flush"> ';
                            yesterday = items.data[i].theday;
                        }
                        if (items.data[i].theday != yesterday) {
                            if (items.data[i].dayoftheweek == 1) {
                                today = "Sunday";
                            } else if (items.data[i].dayoftheweek == 2) {
                                today = "Monday";
                            } else if (items.data[i].dayoftheweek == 3) {
                                today = "Tuesday";
                            } else if (items.data[i].dayoftheweek == 4) {
                                today = "Wednesday";
                            } else if (items.data[i].dayoftheweek == 5) {
                                today = "Thursday";
                            } else if (items.data[i].dayoftheweek == 6) {
                                today = "Friday";
                            } else if (items.data[i].dayoftheweek == 7) {
                                today = "Saturday";
                            } else {
                                today = "n/a";
                            }
                            row = row + '</ul>  </div></div>';
                            row = row + '</div><div>';   /// extra div
                            //column
                            row = row + '    <div id="col1" class="col">         <div class="card"   id="card2" style="width: 9rem;">            <div  id="ch2" class="card-header">';
                            row = row + '<b>' + today + ' </b></br>' + dateformat(items.data[i].theday);
                            row = row + '</div> <ul class="list-group list-group-flush"> ';
                            yesterday = items.data[i].theday;
                        }
                        var customername;
                        customername = items.data[i].name;
                        if (customername == 'null' || customername === null) {
                            customername = '';
                        }
                        var situation = items.data[i].starttime + ':00 ' + customername;
                    //    console.log("customername: ", customername);
                        if (situation.length > 6) {
                            //  situation = "Not Available";
                        }
                       // console.log("theday: ", items.data[i].theday);
                       // console.log("apptime: ", items.data[i].apptime);
                        var thetime = items.data[i].apptime;
                        if (items.data[i].apptime == null) {
                            items.data[i].apptime = '99';
                        }
                            row = row + ' <li     class="list-group-item"><a  id="a' + items.data[i].theday.replace('/', '').replace('/', '') + items.data[i].apptime.replace(':', '') + '" data-date="' + items.data[i].theday + '" data-phone="' + items.data[i].phone + '" data-info="' + items.data[i].info + '"  data-style="' + items.data[i].style + '"  data-customer="' + items.data[i].name + '"  data-time="' + items.data[i].apptime + '" href="#" class="mylink" style= "color:blue">' + situation + '</a></li>';

                        laststarttime = items.data[i].apptime;
                    }
                    row = row + '</div> </div></div>'
                    row = row + '<div>';   /// extra div
                    $('#Grid').append(row);

                    for (var i = 0; i < items.data.length; ++i) {

                        var myId = 'a' + items.data[i].theday.replace('/', '').replace('/', '') + items.data[i].apptime.replace(':', '');
                        $('#' + myId).attr('onClick', 'linkaction(this);');

                    }
                },
                error: OnErrorCall
            })

        });

        function dateformat(roughdate) {

            var yr = roughdate.substring(0, 4);
            var mnth = roughdate.substring(4, 6);
            var days = roughdate.substring(6, 8);
            return days + "/" + mnth + "/" + yr;
        }

        function OnSuccess(response) {
            debugger;
            var data = $.parseJSON(response);

            //   alert(data.BeeHive[0].beeType);
            $('#Grid').append('<table><tr><th>Date</th><th>Time</th><th>Stylist</th><th>Customer</th><th>Phone</th><th>Style</th><th>Info</th></tr>');
            debugger;
            for (var i = 0; i < data.length; ++i) {
                //                 $('#Grid').append('<div class="name">' + ToJavaScriptDate(data[i].review_date) + ' ' + data[i].review_stage
                //                     + ' ' + data[i].ops_product_id + ' ' + data[i].ProducT_sub_group_code
                //                     + '</>');

                $('#Grid').append('<tr bgcolor="#42f489"><td>' + data[i].date + '</td><td>' + data[i].time + '</td><td>'
                               + data[i].stylist + '</td><td>' + data[i].name + '</td><td>' + data[i].phone + '</td><td>'
                               + data[i].style + '</td><td>' + data[i].info + '</td><td>'
                   + '</td></tr>');
            }
            $('#Grid').append('</table>');
            // myLoop();
        }
        function OnErrorCall(jqXHR, textStatus, errorThrown) {
            debugger;
            alert(jqXHR.responseText);
            console.log("error - Ajax call has failed: <br />Err: " + errorThrown + "<br />textStatus: " + textStatus + "<br />ResponseText: " + jqXHR.responseText);
        }

        $(".mylink").click(function (e) {

            var ch = e;
            debugger;
            alert('here!');
        });
        function book(name, Phone, Style, Info, e) {
            var myId = e.id;
            var aDate;
            var aTime;

            for (var i = 0; i < e.attributes.length; ++i) {

                if (e.attributes[i].name == 'data-date') {
                    aDate = e.attributes[i].value;
                }
                if (e.attributes[i].name == 'data-time') {
                    aTime = e.attributes[i].value;
                }
            }
            var Xexisting = $('#' + myId)
            var existing = $('#' + myId).text();
            var myData = { name: name, phone: Phone, style: Style, info: Info, stylist: '@ViewBag.Stylist', date: aDate, time: aTime }
            existing = existing + ' ' + name;
            $('#' + myId).html(existing);

            $.ajax({
                url: '@Url.Action("AddAppointment", "Home")',
                type: 'GET',
                dataType: 'html',
                contentType: 'application/json; charset=utf-8',
                data: myData,
                success: OnSuccess,
                error: OnErrorCall
            })
            //  debugger;
        }
        function OnSuccess(response) {
        }
        function OnErrorCall(jqXHR, textStatus, errorThrown) {
            debugger;
            alert(jqXHR.responseText);
            console.log("error - Ajax call has failed: <br />Err: " + errorThrown + "<br />textStatus: " + textStatus + "<br />ResponseText: " + jqXHR.responseText);
        }
        function linkaction(e) {
            //   if (typeof jQuery.ui != 'undefined') {
            //       alert('no UI!!');
            //   }
            //   else{
            //       alert('jQuery.ui loaded');
            //   }
            var aDate;
            var aTime;
            var style;
            var info;
            var phone;
            var customer;
            for (var i = 0; i < e.attributes.length; ++i) {

                if ( e.attributes[i].name == 'data-date') {
                    aDate = e.attributes[i].value;
                }
                if ( e.attributes[i].name == 'data-time') {
                    aTime = e.attributes[i].value;
                }
                if ( e.attributes[i].name == 'data-style') {
                    style = e.attributes[i].value;
                }
                if ( e.attributes[i].name == 'data-info') {
                    info = e.attributes[i].value;
                }
                if ( e.attributes[i].name == 'data-phone') {
                    phone = e.attributes[i].value;
                }
                if ( e.attributes[i].name == 'data-customer') {
                    customer = e.attributes[i].value;
                }

            }
            var ch = e.text.length;
            if (ch > 115) {

                $('<div></div>').appendTo('body')
                    .html('<div><h6>' + 'Error '
                          + '<br/>   <p> </p>'
       + '</h6></div>')
                    .dialog({
                        modal: true, title: 'This Slot Has Been Taken! ', zIndex: 10000, autoOpen: true,
                        width: 'auto', resizable: false,
                        buttons: {
                            Cancel: function () {
                                $(this).dialog("close");
                            },

                        },
                        close: function (event, ui) {

                            $(this).remove();
                        }
                    });
            } else {

                $('<div></div>').appendTo('body')
                    .html('<div><h6>' + 'Booker: '
                          + '<br/>   <p> </p>'
                          + '<table><tr><td>'
        + '   <label><b>Name</label>&nbsp</td><td><label">' + customer   + '</label></td></tr><tr>         '
        + '   <td><label><b>Phone</label></td><td><label>' + phone   + '</label></td></tr><tr>              '
        + '    <td><label><b>Style/Treatment</label>&nbsp</td> <td><label>' + style + '</label></td></tr><tr>       '
        + '    <td><label><b>Info for Stylist</label> </td> <td><label> ' + info   + '</label> </td></tr></table>    '
       + '</h6></div>')
                    .dialog({
                        modal: true, title: 'Booking Details ', zIndex: 10000, autoOpen: true,
                        width: 'auto', resizable: false,
                        buttons: {
                            Cancel: function () {
                                $(this).dialog("close");
                            },
                            //Book: function () {
                            //    var Name = $('#inname').val();
                            //    var Phone = $('#inphone').val();
                            //    var Style = $('#instyle').val();
                            //    var Info = $('#ininfo').val();
                            //    //   var Name = $('#inname').val();
                            //    book(Name, Phone, Style, Info, e);
                            //    $(this).dialog("close");
                            //}
                        },
                        close: function (event, ui) {

                            $(this).remove();
                        }
                    });
            }
        }

        </script>
</body>
</html>






