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

    <div class="container">

        <h2 style="align-content:center">
            User:&nbsp;
            <label id="mass1"></label>
        </h2>
        <h5>Tick Working Hours</h5>
        <div id="Grid"></div>
        <div id="Grid2"></div>
        <div id="Grid3"></div>

    </div>


        <script type="text/javascript">
        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                vars[key] = value;
            });
            return vars;
        }
        do_ajax();
        function do_ajax(ajaxes) {
            var myurl = getUrlVars();
            var myParam = myurl["stylist"];
            myParam = decodeURIComponent(myParam);
            console.log("url parameter: ", myParam);
            var mydata = { stylist: myParam };
            console.log("stylist.php: ");
            $('#mass1').html(myParam);
            $.ajax({
                url: "GetUsers.php",
                type: "GET",
                dataType: 'json',
                data: { stylist: 1 },
                cache: false,
                async: true,
                success: function (data) {
                    var response = data;
                    console.log(response);
                    var items = response;
                    console.log(items.data[0].dayid);
                    console.log(" items.data.length: ", items.data.length);
                    //  var json_parsed = $.parseJSON(data);
                    var json_parsed = data;
                    var row = '<table>';
                    //   debugger;
                    $("#Grid").empty();
                    $("#Grid2").empty();
                    $("#Grid3").empty();

                    var items = json_parsed;
                    var backcolor = 'E5E8E8';
                    $('#Grid').append('<table style="white-space: nowrap;"><thead>     <tr>       ');
                    // headings
                 //   $('#Grid').append(' <th>&nbsp&nbsp' + 'id' + '&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;' + 'name' + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>');
                    $('#Grid').append('</tr> </thead>');

                    var start = 0;
                    var lasthour = 0;
                    var lastday = 0;
                    var today;
                    // data
                    for (var i = 0; i < items.data.length; i++) {
                        if (i == 0) {
                            if (items.data[i].dayId == 1) {
                                today = "Sunday";
                            } else if (items.data[i].dayId == 2) {
                                today = "Monday";
                            } else if (items.data[i].dayId == 3) {
                                today = "Tuesday";
                            } else if (items.data[i].dayId == 4) {
                                today = "Wednesday";
                            } else if (items.data[i].dayId == 5) {
                                today = "Thursday";
                            } else if (items.data[i].dayId == 6) {
                                today = "Friday";
                            } else if (items.data[i].dayId == 7) {
                                today = "Saturday";
                            } else {
                                today = "n/a";
                            }
                        }
                        console.log("today: ", today);
                        if (lastday != items.data[i].dayId) {

                            lastday = items.data[i].dayId;
                            if (i != 0) {

                                //  if (lastday != items.data[i].dayId) {
                                // lasthour = lasthour + 2;
                                for (j = lasthour; j < 24; j++) {
                                    row = row + '<td><input type="checkbox" name="' + today + '" id=' + j.toString() + ':00"' + ' value="' + j.toString() + ':00"' + '>' + j.toString() + ":00" + '</input></td>';
                                    lasthour = j;
                                }
                                // shouldn't refer to item[i] as that was the previous row!
                                row = row + '<td><button type ="button" name="' + today + '" id="update' + today + '" class="btn btn-primary"  >Update</button></td>';
                                $('#Grid').append(row);
                                var chk1 = $('#update' + today);

                                $('#update' + today).attr('onClick', 'updateuser(this);')
                                row = '';
                                lasthour = 0;
                                if (items.data[i].dayId == 1) {
                                    today = "Sunday";
                                } else if (items.data[i].dayId == 2) {
                                    today = "Monday";
                                } else if (items.data[i].dayId == 3) {
                                    today = "Tuesday";
                                } else if (items.data[i].dayId == 4) {
                                    today = "Wednesday";
                                } else if (items.data[i].dayId == 5) {
                                    today = "Thursday";
                                } else if (items.data[i].dayId == 6) {
                                    today = "Friday";
                                } else if (items.data[i].dayId == 7) {
                                    today = "Saturday";
                                } else {
                                    today = "n/a";
                                }
                                //   }
                            }


                            row = row + '<tr> ';
                            //     row = row + '<td bgcolor=' + backcolor + '>&nbsp&nbsp' + items.data[i].id + '&nbsp&nbsp</td>';
                          //  row = row + '<td bgcolor=' + backcolor + '>' + items.data[i].name + '</td>';
                            row = row + '<td bgcolor=' + backcolor + '>' + today + '</td>';
                            lastday = items.data[i].dayId;
                        }

                        var j = lasthour;
                        start = items.data[i].starttime;
                        if (start == 99) {

                        } else {
                            for (j = lasthour; j < items.data[i].starttime; j++) {
                                row = row + '<td><input type="checkbox" name="' + today + '" id=' + j.toString() + ':00"' + ' value="' + j.toString() + ':00"' + '>' + j.toString() + ":00" + '</input></td>';
                                lasthour = j + 1;
                            }
                            row = row + '<td><input type="checkbox" name="' + today + '" id=' + items.data[i].starttime + ':00"' + ' value="' + items.data[i].starttime + ':00"' + ' checked="checked">' + items.data[i].starttime + ":00" + '</input></td>';
                            lasthour = lasthour + 1;
                        }

                    }
                    // input data all read
                    // complete last row

                 if (start != 99) {
                     for (j = lasthour; j < 24; j++) {
                         row = row + '<td><input type="checkbox" name="' + today + '" id=' + j.toString() + ':00"' + ' value="' + j.toString() + ':00"' + '>' + j.toString() + ":00" + '</input></td>';
                         lasthour = j;
                     }
                     // shouldn't refer to item[i] as that was the previous row!
                     row = row + '<td><button type ="button" name="' + today + '" id="update' + today + '" class="btn btn-primary"  >Update</button></td>';
                     $('#Grid').append(row);
                 }
                 else {
                     for (j = lasthour; j < 24; j++) {
                         row = row + '<td><input type="checkbox" name="' + today + '" id=' + j.toString() + ':00"' + ' value="' + j.toString() + ':00"' + '>' + j.toString() + ":00" + '</input></td>';
                         lasthour = j;
                     }
                     // shouldn't refer to item[i] as that was the previous row!
                     row = row + '<td><button type ="button" name="' + today + '" id="update' + today + '" class="btn btn-primary"  >Update</button></td>';
                     $('#Grid').append(row);

                 }
                    var chk1 = $('#update' + today);
                    $('#update' + today).attr('onClick', 'updateuser(this);')
                    // end of last row
                    row =  '</tr></table>'

                    $('#Grid').append(row);

                    $('#Grid').append('');
                },
                error: function (xhr) {
                    debugger;
                    alert('Request Status ' + xhr.status + ' Status Text (a) ' + xhr.statusText + ' ' + xhr.responseText);
                }
            })
        };
        function updateuser(e) {
            var id = e.id.replace('update', '');
            var day = e.name;
            //  var parm = 'hours' + id.toString();
            var parm = e.name;
            var availability = { hrs: [], };
            var sbox = document.getElementsByName(parm);
            for (var i = 0; i < sbox.length; i++) {
                availability.hrs.push(sbox[i].checked);
            }
            console.log(availability.hrs);
            var parm2 = JSON.stringify(availability);
            $.ajax({
                url: "UpdateUser.php",
                type: "GET",
                dataType: 'json',
                data: { stylist: '@ViewBag.username', arrayhrs: parm2, day: day },
                cache: false,
                async: true,
                success: function (data) {
                 //   debugger;
                },
                error: function (xhr) {
                    debugger;
                    alert('Request Status ' + xhr.status + ' Status Text (a) ' + xhr.statusText + ' ' + xhr.responseText);
                }
            })
        }

        </script>

</body>
</html>