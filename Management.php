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

			.photo {
				display: flex;
				justify-content: center;
			}

			.header {
				display: flex;
				flex-flow: row wrap;
				font-weight: bold;
				text-align: center;
				flex-direction: column;
			}

			.footrow {
				display: flex;
				flex-flow: row wrap;
				font-weight: bold;
				text-align: center;
				flex-direction: row;
				justify-content: center;
			}

			.footer {
				display: flex;
				justify-content: space-between;
			}


			.xrow {
				width: 100%;
				display: flex;
				justify-content: space-around;
				flex-direction: row;
			}
            .row-item {
                align-content: center;
            }
    </style>

</head>

<body>

    <header class="header">

        <div class="headitem">
            <h5 class="my-0 mr-md-auto font-weight-normal">
                <a href="#" onclick="window.location.href = 'Index.php'">
                    <img width="567" height="144" src="listening1.gif" border="0" />
                </a>
            </h5>
        </div>
        <div>
            <nav class="my-2 my-md-0 mr-md-3">
                <!--<a class="p-2 text-dark" onclick="linkaction(this)" style="font-size:x-large" href="#">Make a Booking</a>-->
                <!--<a class="p-2 text-dark" onclick="whoamI(this)" href="#">Massage Therapist's Page</a>-->

                <a class="p-2 text-dark" href="Management.php">Management Admin</a>
                <a class="p-2 text-dark" href="Blog.php">Blog</a>
                <!--<a class="p-2 text-dark" onclick="whichuser(this)" href="#">Users</a>-->
            </nav>
        </div>


    </header>

        <div class="container">
            <h5>All Bookings</h5>
            <table class="table table_condensed" id="Grid"></table>
        </div>

        <script type="text/javascript">
            var Todayx = '<?php     echo date("d/m/Y")   ?>';

            $(document).ready(function () {
                $.ajax({
                    type: "POST",
                    cache: false,
                    url: 'AllApps.php',
                    data: $(this).serialize(),
                    success: OnSuccess,
                    // success: function (response)
                    //  {
                    //   console.log(JSON.stringify(JSON.parse(response)));
                    //    var items = JSON.parse(response);
                    //   console.log(items.data[0].id);
                    // var len = items.count;
                    //  console.log("count: " + items.data[0].count);
                    //   alert(items.data[0][2]);
                    // },
                    error: function (jqXHR, exception) {
                        var msg = '';
                        if (jqXHR.status === 0) {
                            msg = 'Not connect.\n Verify Network.';
                        } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                        } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                        } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                        } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                        } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                        } else {
                            msg = 'Uncaught Error.\n' + jqXHR.responseText;
                        }
                        alert(msg);
                    },
                });
                // alert("after ajax");
            });


            function OnSuccess(response) {
                console.log("OnSuccess(response) ");
                console.log(JSON.stringify(JSON.parse(response)));
                var data = $.parseJSON(response);
                var items = JSON.parse(response);
                console.log(items.data[0].id);
                console.log(" items.data.length: ", items.data.length);
                //   alert(data.BeeHive[0].beeType);
                var row;
                row = '<table><tr><th>Day</th><th>Date</th><th>Time</th><th>Stylist</th><th>Customer</th><th>Phone</th><th>Style</th><th>Info</th></tr>';

                for (var i = 0; i < items.data.length; ++i) {
                    console.log("items.data[i].dayId: ", items.data[i].dayId);
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
                    console.log(" today: ", Todayx);

                    var datecmp = dateformat(items.data[i].appdate);
                    console.log(" datecmp: ", datecmp);
                    if (datecmp == Todayx) {
                        today = "Today";
                    }
                    if (Todayx == datecmp) {
                        row = row + '<tr bgcolor="#E8E8E5"><td>' + today + '</td><td>' + dateformat(items.data[i].appdate) + '</td><td>' + items.data[i].apptime + ":00" + '</td><td>'
                            + items.data[i].stylist + '</td><td>' + items.data[i].name + '</td><td>' + items.data[i].phone + '</td><td>'
                            + items.data[i].style + '</td><td>' + items.data[i].info + '</td><td>'
                            + '</td></tr>';
                    } else {
                        row = row + '<tr bgcolor="#42f489"><td>' + today + '</td><td>' + dateformat(items.data[i].appdate) + '</td><td>' + items.data[i].apptime + ":00" + '</td><td>'
                            + items.data[i].stylist + '</td><td>' + items.data[i].name + '</td><td>' + items.data[i].phone + '</td><td>'
                            + items.data[i].style + '</td><td>' + items.data[i].info + '</td><td>'
                            + '</td></tr>';
                    }
             
                }
                row = row + '</table>';
                $('#Grid').append(row);
                // myLoop();
            }

            function OnErrorCall(jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
            }

            function dateformat(roughdate) {

                var yr = roughdate.substring(0, 4);
                var mnth = roughdate.substring(4, 6);
                var days = roughdate.substring(6, 8);
                return days + "/" + mnth + "/" + yr;
            }

        </script>


</body>
</html>










