<!DOCTYPE html>
<html class=" js flexbox no-flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg no-smil svgclippaths">


<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" /> -->

 <title></title>

 <!-- <link rel="stylesheet" href="pic.css">

 <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->


 <title>jQuery Mobile: Creating Dialog Box</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->
 <script src="http://code.jquery.com/jquery-2.1.3.js"></script>
 <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>
 <!-- Bootstrap core CSS -->
 <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />

 <!-- Custom styles for this template -->
 <!-- <link href="pricing.css" rel="stylesheet" /> -->

 <link rel="stylesheet" href="pic.css">
</head>

<body class="mybody">


 <div id="therapistDialog" style="max-width:400px;" data-role="popup" data-theme="b" data-overlay-theme="b" data-dismissible="false">
  <div data-role="header" data-theme="a">
   <h1>Therapist</h1>
  </div>
  <div class="ui-content" role="main">
   <select id="masseursx">
    <?php
    require 'getstylists.php';
    $mass = getStylists();
    foreach ($mass as $mas) {
     echo "<option id = '" . $mas['id'] . "'>" . $mas['name'] . "</option>";
    }


    ?>
   </select>

   <a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" href="#" data-rel="back">Cancel</a>

   <a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" id="mClick" href="#" data-rel="dialog" data-transition="flow">Book</a>
  </div>
 </div>
 <div class="container" ;>
  <div class="top" ;>

  </div>
  <div class="content">
   <div class="checker">
    <label>The listening Hand</label>

    <a id="openDialog" href="#therapistDialog" data-rel="popup" class="p-2 text-dark" style="font-size:x-large">Make A Booking</a>
   </div>
   <div>
    <select id="masseursx">
     <?php
     require 'getstylists.php';
     $mass = getStylists();
     foreach ($mass as $mas) {
      echo "<option id = '" . $mas['id'] . "'>" . $mas['name'] . "</option>";
     }


     ?>
    </select>
   </div>
  </div>
 </div>

 <div id="loviz" class="popup">
  <select id="masseurs">
  </select>
 </div>
 <script type="text/javascript">
  $(document).ready(function() {

   $('#openDialog').bind("tap", function() {
    $.mobile.changePage("#therapistDialog", {
     role: "dialog" // show #page2 as dialog
    })
   })

   $('#closeDialog').bind("tap", function() {
    $('#page2').dialog("close") // close #page2
   })

   $('#mClick').bind("tap", function() {
    var Name3 = $('#masseursx').find(":selected").text();
    window.location.href = 'Appoint2.php' + '?stylist=' + Name3;

   })

  //  $('#loviz').hide();
  //  $('#page2').hide();
  // });

  function makeviz() {
   alert("here!");
   $('#page2').show();
   $('#page2').popup().popup('open');
  }

  function unescapeHTML(escapedHTML) {
   return escapedHTML.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&').replace(/&quot;/g, '"');
  }

  function linkaction(e) {

   $('.popup').dialog({
    buttons: {
     Cancel: function() {
      $(this).dialog("close");
     },
     Book: function() {
      var Name = $('#masseurs').find(":selected").text();

      if (Name === null) {
       Name = "Tina Sparkle";
      }
      if (Name == "Anyone Available") {
       window.location.href = 'Anyone.php' + '?stylist=' + Name;
      } else {
       window.location.href = 'Appointment.php' + '?stylist=' + Name;
      }


      $(this).dialog("close");
     }
    },
    close: function(event, ui) {

     $(this).remove();
    },
    title: 'Choose Therapist',
    width: 250,
    height: 200,
    my: "center",
    at: "center",
    of: window
   });


  }

  function whichuser(e) {
   $('.popup').dialog({
    buttons: {
     Cancel: function() {
      $(this).dialog("close");
     },
     Edit: function() {
      var Name = $('#masseurs').find(":selected").text();

      if (Name === null) {
       Name = "Tina Sparkle";
      }
      if (Name == "Anyone Available") {
       window.location.href = 'Anyone.php' + '?stylist=' + Name;
      } else {
       window.location.href = 'Users.php' + '?stylist=' + Name;
      }


      $(this).dialog("close");
     }
    },
    close: function(event, ui) {

     $(this).remove();
    },
    title: 'Choose User',
    width: 250,
    height: 200,
   });
  }

  function createuser(e) {
   var myLine = '<div><h6>New User: <br/>   <label>Name:</label><input id="uname"></input> <br/> <label>Email:</label><input id="umail"></input></h6></div>';

   $('<div></div>').appendTo('body')
    .html(myLine)
    .dialog({
     modal: true,
     title: 'Choose a Stylist ',
     zIndex: 10000,
     autoOpen: true,
     width: 'auto',
     resizable: false,
     buttons: {

      Create: function() {

       var Name = $('#uname').val();
       var Email = $('#umail').val();
       createuserajax(Name + '/' + Email);

       $(this).dialog("close");
      },
      Cancel: function() {
       $(this).dialog("close");
      }
     },
     close: function(event, ui) {

      $(this).remove();
     }
    });
  }

  function createuserajax(param) {
   var str = param.split("/");

   $.ajax({
     url: "AddUsers.php",
     type: "GET",
     dataType: 'json',
     data: {
      stylistname: str[0],
      email: str[1]
     },
     cache: false,
     async: true,
     success: function(data) {
      window.location.href = 'Users.php' + '?stylist=' + str[0];
     },
     error: function(xhr) {
      debugger;
      alert('Request Status ' + xhr.status + ' Status Text (a) ' + xhr.statusText + ' ' + xhr.responseText);
     }
    })




    .dialog({
     modal: true,
     title: 'You Are? ',
     zIndex: 10000,
     autoOpen: true,
     width: 'auto',
     resizable: false,
     buttons: {

      Go: function() {
       var Name = $('#postage').find(":selected").text();
       window.location.href = 'Hairdresser.php' + '?stylist=' + Name;

       $(this).dialog("close");
      },
      Cancel: function() {
       $(this).dialog("close");
      }
     },
     close: function(event, ui) {

      $(this).remove();
     }
    });
  }

  function whoamI(e) {

   $('.popup').dialog({
    buttons: {
     Cancel: function() {
      $(this).dialog("close");
     },
     Appointments: function() {
      var Name = $('#masseurs').find(":selected").text();

      if (Name === null) {
       Name = "Tina Sparkle";
      }
      if (Name == "Anyone Available") {
       window.location.href = 'Anyone.php' + '?stylist=' + Name;
      } else {
       window.location.href = 'Stylist.php' + '?stylist=' + Name;
      }


      $(this).dialog("close");
     }
    },
    close: function(event, ui) {

     $(this).remove();
    },
    title: 'Choose Therapist',
    width: 350,
    height: 200,
   });

  }
 </script>

</body>

</html>