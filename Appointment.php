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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.position.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet" />
    <style>
.ui-dialog {
   top: 300px;
   left: 500px !important;
}
    </style>

</head>

<body>


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
            <a class="p-2 text-dark" onclick="linkaction(this)" style="font-size:x-large" href="#">Make a Booking</a>
            <a class="p-2 text-dark" onclick="whoamI(this)" href="#">Massage Therapist's Page</a>

            <a class="p-2 text-dark" href="/Home/Management">Management Admin</a>
            <a class="p-2 text-dark" href="/Home/Blog">Blog</a>
            <a class="p-2 text-dark" onclick="whichuser(this)" href="#">Users</a>
        </nav>

    </div>

    <div class="container">

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
            var myParam = getUrlVars()["stylist"];
            alert(myParam);
            var mydata = { stylist: myParam };

            $.ajax({
                url: '@Url.Action("GetAppointmentPage", "Home")',
                type: "GET",
                cache: false,
                contentType: "application/json; charset=utf-8",
                dataType: 'json',
                data: mydata,
                cache: false,
                async: true,
                success: function (response) {

                    var data = response;
                    //    $('#Grid').append('<table><tr><th>Date</th><th>Time</th><th>Stylist</th><th>Customer</th><th>Phone</th><th>Style</th><th>Info</th></tr>');
                    var today = '';
                    var row = '';
                    var laststarttime = 0;
                    var yesterday = ''
                    row = '<div  id="rw1" class="row">  ';
                    for (var i = 0; i < data.length; ++i) {
                        if (i == 0)
                        {

                            if (data[i].dayoftheweek == 1) {
                                today = "Sunday";
                            } else if (data[i].dayoftheweek == 2) {
                                today = "Monday";
                            } else if (data[i].dayoftheweek == 3) {
                                today = "Tuesday";
                            } else if (data[i].dayoftheweek == 4) {
                                today = "Wednesday";
                            } else if (data[i].dayoftheweek == 5) {
                                today = "Thursday";
                            } else if (data[i].dayoftheweek == 6) {
                                today = "Friday";
                            } else if (data[i].dayoftheweek == 7) {
                                today = "Saturday";
                            } else {
                                today = "n/a";
                            }
                            yesterday = data[i].theday;
                            row = row + '<div>';   /// extra div
                            //column
                            row = row + '    <div id="col1" class="col">         <div class="card"   id="card2" style="width: 9rem;">            <div  id="ch2" class="card-header">';
                            row = row + '<b>Today </b></br>' + dateformat(data[i].theday);
                            row = row + '</div> <ul class="list-group list-group-flush"> ';
                            yesterday = data[i].theday;
                        }
                        if (data[i].theday != yesterday) {
                            if (data[i].dayoftheweek == 1) {
                                today = "Sunday";
                            } else if (data[i].dayoftheweek == 2) {
                                today = "Monday";
                            } else if (data[i].dayoftheweek == 3) {
                                today = "Tuesday";
                            } else if (data[i].dayoftheweek == 4) {
                                today = "Wednesday";
                            } else if (data[i].dayoftheweek == 5) {
                                today = "Thursday";
                            } else if (data[i].dayoftheweek == 6) {
                                today = "Friday";
                            } else if (data[i].dayoftheweek == 7) {
                                today = "Saturday";
                            } else {
                                today = "n/a";
                            }
                            row = row + '</ul>  </div></div>';
                            row = row + '</div><div>';   /// extra div
                            //column
                            row = row + '    <div id="col1" class="col">         <div class="card"   id="card2" style="width: 9rem;">            <div  id="ch2" class="card-header">';
                            row = row + '<b>' + today + ' </b></br>' +  dateformat(data[i].theday);
                            row = row + '</div> <ul class="list-group list-group-flush"> ';
                            yesterday = data[i].theday;
                        }

                        var situation = data[i].time + ':00 ';  // + data[i].customer;
                        if (data[i].apptime.length > 0) {
                            situation = data[i].time + ':00 ' + " not available";
                        }
                        if (situation.length > 6) {
                            //  situation = "Not Available";
                        }
                        if (data[i].time != 99) {
                            row = row + ' <li     class="list-group-item"><a  id="a' + data[i].theday.replace('/', '').replace('/', '') + data[i].time.replace(':', '') + '" data-date="' + data[i].theday + '"  data-time="' + data[i].time + '" href="#" class="mylink" style= "color:blue">' + situation + '</a></li>';
                        }
                        laststarttime = data[i].time;
                    }
                    row = row + '</div> </div></div>'
                    row = row + '<div>';   /// extra div
                    $('#Grid').append(row);

                    for (var i = 0; i < data.length; ++i) {

                        var myId = 'a' + data[i].theday.replace('/', '').replace('/', '') + data[i].time.replace(':', '');
                        $('#' + myId).attr('onClick', 'linkaction(this);');

                    }
                },
                error: OnErrorCall
            })

        });

        function dateformat(roughdate) {

            var yr = roughdate.substring(0, 4);
            var mnth = roughdate.substring(4,6 );
            var days = roughdate.substring(6, 8);
            return days + "/" + mnth + "/" + yr;
        }
        function OnSuccess(response) {

            var data = $.parseJSON(response);

            //   alert(data.BeeHive[0].beeType);
            $('#Grid').append('<table><tr><th>Date</th><th>Time</th><th>Stylist</th><th>Customer</th><th>Phone</th><th>Style</th><th>Info</th></tr>');

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
            var ch = e.text.length;
            if (ch > 8) {
                $('<div></div>').appendTo('body')
    .html('<div><h6>' + 'This Slot Has Been Taken!'
          + '<br/>   <p> </p>'
+ '</h6></div>')
    .dialog({
        modal: true, title: 'Error ', zIndex: 10000, autoOpen: true,
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
        + '   <label><b>Name</label>&nbsp</td><td><input type="text" id="inname"</input></td></tr><tr>         '
        + '   <td><label><b>Phone</label></td><td><input type="text" id="inphone"</input></td></tr><tr>              '
        + '    <td><label><b>Style/Treatment</label> </td> <td><input type="text" id="instyle"</input></td></tr><tr>       '
        + '    <td><label><b>Info for Stylist</label> </td> <td><input type="text" id="ininfo"</input> </td></tr></table>    '
       + '</h6></div>')
                    .dialog({
                        modal: true, title: 'Booking Details ', zIndex: 10000, autoOpen: true,
                        width: 'auto', resizable: false,
                        buttons: {
                            Cancel: function () {
                                $(this).dialog("close");
                            },
                            Book: function () {
                                var Name = $('#inname').val();
                                var Phone = $('#inphone').val();
                                var Style = $('#instyle').val();
                                var Info = $('#ininfo').val();
                                //   var Name = $('#inname').val();
                                book(Name, Phone, Style, Info, e);
                                $(this).dialog("close");
                            }
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

