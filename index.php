<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="pic.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>


    </style>
</head>

<body class="mybody">




    <div class="container" ;>
        <div class="top" ;>

        </div>
        <div class="content">
            <!-- <div class="checker"> -->
            <h1 class="mylabel">The Listening Hand</h1>
            <button id="webtoggle" class="button10 " onclick="showdropdown(this)">Make A Booking</button>
            <!-- <a id="openDialog" href="#therapistDialog" data-rel="popup" class="p-2 text-dark" style="font-size:x-large">Make A Booking</a> -->
            <!-- </div> -->
            <div class="checker" id="therapistDialog" style="max-width:400px;" data-role="popup" data-theme="b" data-overlay-theme="b" data-dismissible="false">
                <div id="divtitle" class="mylabel" data-role="header" data-theme="a">
                    <h1 style="text-align:left" >Therapist</h1>
                </div>
                <div id="divdrop" class="ui-content" role="main">
                    <select id="masseursx">
                        <optgroup>
                            <?php
                            require 'getstylists.php';
                            $mass = getStylists();
                            foreach ($mass as $mas) {
                                echo "<option class='option' id = '" . $mas['id'] . "'>" . $mas['name'] . "</option>";
                            }


                            ?>
                        </optgroup>
                    </select>

                    <a class="ui-btn ui-corner-all  ui-shadow ui-btn-inline ui-btn-b mylink" href="#" 
                    onclick="messeurs_clicked(this);"data-rel="back">Cancel&nbsp;&nbsp; </a>
                    <a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b " id="mClick" onclick="messeurs_clicked(this);" href="#" data-rel="external" data-transition="flow">Book</a>
                    <!-- <a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" id="mClick" href="#" data-rel="dialog" data-transition="flow">Book</a> -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function showdropdown(empty) {

            $('#divdrop').show();

            $('#divtitle').show();
        }

        function messeurs_clicked(e) {
            console.log(e.text);

            //   alert(e.text);
            if (e.text != 'Book') {
                $('#divtitle').hide();
                $('#divdrop').hide();
                return false;

            } else {
                var Name = $('#masseursx').find(":selected").text();
                var link = $(this);
                console.log(link);
                //  alert(Name);
                //  alert(e);
                //  e.preventDefault();
                //  window.location.replace = 'Appoint2.php' + '?stylist=' + Name;
                window.location.href = 'Appoint2.php' + '?stylist=' + Name;
                return false;
            }
        }
        $(document).ready(function() {
            $('#divtitle').hide();
            $('#divdrop').hide();
            $('#openDialog').bind("tap", function() {
                $.mobile.changePage("#therapistDialog", {
                    role: "dialog" // show #page2 as dialog
                })
            })

            $('#closeDialog').bind("tap", function() {
                $('#page2').dialog("close") // close #page2
            })
            //     alert("her2");
            $('#mClick').bind("tap", function() {
                console.log('#mClick');
                var Name3 = $('#masseursx').find(":selected").text();
                var chk = "mClick: " + Name3;
                console.log(chk);
                window.location.href = 'Appoint2.php' + '?stylist=' + Name3;
                //     var payload2 = 'Appoint2.php' + '?stylist=' + Name3;
                //     $.mobile.changePage('Appoint2.php', { type: "get",  dataUrl :  payload2, data : { 'stylist' : Name3 }, reloadPage : true, changeHash : true });
                //    $.mobile.changePage(payload2);  // go to #page3 
            })
            //  alert("her3");


            //   makeviz();
            // alert("ready!!");
            // $('#loviz').hide();
            // $('#page2').hide();
            // $('#openDialog').hide();
        });

        function makeviz() {
            alert("here!");
            $('#openDialog').hide();
            $('#page2').show();
            $('#page2').popup().popup('open');
        }

        function unescapeHTML(escapedHTML) {
            return escapedHTML.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&').replace(/&quot;/g, '"');
        }
    </script>
</body>

</html>