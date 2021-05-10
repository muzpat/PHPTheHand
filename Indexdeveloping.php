<!DOCTYPE html>
<html class=" js flexbox no-flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg no-smil svgclippaths">


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


          <title>jQuery Mobile: Creating Dialog Box</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>	
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet" />
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
                @media screen and (min-width: 320px) and (max-width: 480px) {
                .footrow {
       
                    flex-direction: column;
      	justify-content:normal;
                }
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
             @media screen and (min-width: 320px) and (max-width: 480px) {
                .xrow {
       
                    flex-direction: column;
      
                }
			}
            .row-item {
                align-content: center;
            }
            		.wrapper {
			display: flex;
			flex-direction: column;
			height: 100%;
		}

		.content {
			flex: 1 0 auto;
		}
        @media screen and (min-width: 320px) and (max-width: 480px) {
            .content {
                /*background-color:orange;*/
            }
        }

		.footer {
			flex-shrink: 0;
		}

		html, body {
			height: 100%;
		}

		body {
			display: flex;
			flex-direction: column;
		}
        @media screen and (min-width: 320px) and (max-width: 480px) {
    body {
        /*background-color:red;*/
            }
        }
    </style>

</head>

<body>


                        //    <div id="therapistDialog" style="max-width:400px;" data-role="popup" data-theme="b" data-overlay-theme="b" data-dismissible="false">
                            <div data-role="header" data-theme="a">
                            <h1>Therapist</h1>
                            </div>
                         //   <div class="ui-content" role="main">
                                     <select id="masseursx">
                                    <?php
                                    require 'getstylists.php';
                                    $mass =getStylists();
                                    foreach ($mass as $mas) {
                                        echo "<option id = '".$mas['id']."'>".$mas['name']."</option>";
                                    }


                                    ?>
                                </select>
    
                                <a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" href="#" data-rel="back">Cancel</a>
                                <!--<a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" id="mClick"  onclick="messeurs_clicked(this);" href="Appointment.php?stylist=" data-rel="external" data-transition="flow">Book</a>-->
                                  <a class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" id="mClick"   href="#" data-rel="dialog" data-transition="flow">Book</a>
                       //     </div>
                      //  </div>  
        <div id="wr1" class="wrapper">
        <div id="content" class="content">
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
                 <div class="card-deck footrow">
                   <div class="mb-4">
                         <div class="mb-4">
                              <!-- <button id="webtoggle"  class="btn btn-lg btn-block btn-primary"  onclick="window.location.href = 'Index.php'">Web</button> -->
                                   <!-- <a id="openDialog" href="#therapistDialog" data-rel="popup"     class="p-2 text-dark" style="font-size:x-large">Make A Booking</a> -->
                                   <h1>Make A Booking</h1>
                             </div>

                             </div>
                       </div>
               

                <!-- dialogue was here-->

                 </nav>
                </div>
               </header>
        </div>


                                   <div>
                                                            <select id="masseursx">
                                    <?php
                                    require 'getstylists.php';
                                    $mass =getStylists();
                                    foreach ($mass as $mas) {
                                        echo "<option id = '".$mas['id']."'>".$mas['name']."</option>";
                                    }


                                    ?>
                                </select>
                       </div>



    <div class="photo">
        <img src="/images/backmassage.png" alt="Smiley face" height="315" width="468" />
        
    </div>

    <div class="container">
        <div class="card-deck footrow">
            
            <div class="mb-4">

              

               
            </div>
         
     <div class="mb-4 ">


            </div>
        </div>
    </div>
</div>
    <div class="xrow">


        <div class="footitem firstitem">

        </div>



         <div class="footitem middleitem">


        </div>


       
</div>




   <div id="loviz" class="popup">
        <select id="masseurs">
        </select>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
                      
            $('#openDialog').bind("tap", function() {
                $.mobile.changePage("#therapistDialog", {
                  role: "dialog"  // show #page2 as dialog
                })
            })
            
            $('#closeDialog').bind("tap", function() {
              $('#page2').dialog("close")  // close #page2
            })
            
            $('#mClick').bind("tap", function () {
                var Name3 = $('#masseursx').find(":selected").text();
               window.location.href = 'Appoint2.php' + '?stylist=' +Name3;
           //     var payload2 = 'Appointment.php' + '?stylist=' + Name3;
          //     $.mobile.changePage('Appointment.php', { type: "get",  dataUrl :  payload2, data : { 'stylist' : Name3 }, reloadPage : true, changeHash : true });
            //    $.mobile.changePage(payload2);  // go to #page3 
            })
              
//                    $('#mClick').bind('click', function (event) {
                                
//                        console.log("Bound event9!");
//                         console.log(event);
//           // var Name = $('#masseursx').find(":selected").text();
//          window.location.replace = 'Appointment.php' + '?stylist='; // + Name;
//                                    event.preventDefault();  
//                        return;
//          //  location.reload();
//});
                    $('#loviz').hide();
                      $('#page2').hide();
                });
                function makeviz() {
                    alert("here!");
                          $('#page2').show();
                          $('#page2').popup().popup('open');
                        }
                function unescapeHTML(escapedHTML) {
                    return escapedHTML.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&').replace(/&quot;/g, '"');
        }


        //function messeurs_clicked(e) {
        //    var link = $(this);
        //    console.log(link);
        //    var Name = $('#masseursx').find(":selected").text();
        //  //  alert(e);
        //     e.preventDefault();  
        //    window.location.replace = 'Appointment.php' + '?stylist='; // + Name;
        //    location.reload();
        //    console.log("after redirect");
        //    return;
        //}

                function linkaction(e) {

                    $('.popup').dialog({
                        buttons: {
                            Cancel: function () {
                                $(this).dialog("close");
                            },
                            Book: function () {
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
                        close: function (event, ui) {

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
                            Cancel: function () {
                                $(this).dialog("close");
                            },
                            Edit: function () {
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
                        close: function (event, ui) {

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
                            modal: true, title: 'Choose a Stylist ', zIndex: 10000, autoOpen: true,
                            width: 'auto', resizable: false,
                            buttons: {

                                Create: function () {

                                    var Name = $('#uname').val();
                                    var Email = $('#umail').val();
                                    createuserajax(Name + '/' + Email);

                                    $(this).dialog("close");
                                },
                                Cancel: function () {
                                    $(this).dialog("close");
                                }
                            },
                            close: function (event, ui) {

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
                        data: { stylistname: str[0], email: str[1] },
                        cache: false,
                        async: true,
                        success: function (data) {
                            window.location.href = 'Users.php' + '?stylist=' + str[0];
                        },
                        error: function (xhr) {
                            debugger;
                            alert('Request Status ' + xhr.status + ' Status Text (a) ' + xhr.statusText + ' ' + xhr.responseText);
                        }
                    })
                };

                function btMassage(e) {
                    $('<div></div>').appendTo('body')
                        .html('<div><h6>' + 'Stylist: '
                            + '<br/>   <p> </p>'
                            + '           <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">                                 '
                            + '  <tr>                                                                                                                   '
                            + '    <td background="images/sea.jpg"><table width="590" height="340" border="0" cellpadding="0" cellspacing="8">          '
                            + '      <tr>                                                                                                               '
                            + '        <td valign="top"><table border="0" cellspacing="0" cellpadding="0">                                              '
                            + '          <tr>                                                                                                           '
                            + '                <td><div align="left"> <p><span class="maintitle"><a href="onsitemassage.html" class="maintitle">What    '
                            + '                    is On-Site Massage?</a> | <span class="maintitile"> <a href="benefits.html" class="maintitle">What   '
                            + '                    are the Benefits?</a></span> | <a href="requirements.html" class="maintitle">Requirements</a>        '
                            + '                    | <a href="facts.html" class="maintitle">Facts</a> <br />                                            '
                            + '                    </span><br />                                                                                        '
                            + '                    <span class="maintitle">What is On-Site Massage?</span><br />                                        '
                            + '                    <span class="mainer"><br />                                                                          '
                            + '                    On-Site massage is so called because it is practiced at                                              '
                            + '                    your workplace.</span></p>                                                                           '
                            + '                  <p><span class="mainer"> It&#8217;s a Japanese, Acupressure                                            '
                            + '                    massage that leaves the body energised and the mind alert.                                           '
                            + '                    The full version is 25 minutes, but a 10 minute &#8216;taster&#8217;                                 '
                            + '                    version is also offered for those employees under tight                                              '
                            + '                    time contraints.</span></p>                                                                          '
                            + '                  <p><span class="mainer"> The massage works on pressure points                                          '
                            + '                    on the upper body, working on the back, head, neck, shoulders,                                       '
                            + '                    arms and hands, using elbows, thumbs and palm pressure.                                              '
                            + '                    This press and release technique helps to stimulate the                                              '
                            + '                    circulatory, muscular, nervous, immune and lymphatic systems                                         '
                            + '                    and promotes the release of endorphins, leaving the client                                           '
                            + '                    feeling good in a relaxed, but energised and clearly focused                                         '
                            + '                    frame of mind.</span></p>                                                                            '
                            + '                                                                                                                         '
                            + '                  <p><span class="mainer"><strong>The treatment is received                                              '
                            + '                    fully clothed</strong>, on a specially designed ergonomic                                            '
                            + '                    chair and was designed with the pc worker in mind. All treatments                                    '
                            + '                    are preceded by a brief confidential consultation to ascertain                                       '
                            + '                    the individual&#8217;s needs.</span></p>                                                             '
                            + '                  </td>                                                                                                  '
                            + '          </tr>                                                                                                          '
                            + '                                                                                                                         '
                            + '        </table>                                                                                                         '
                            + '</h6></div>')
                        .dialog({
                            modal: true, title: 'You Are? ', zIndex: 10000, autoOpen: true,
                            width: 'auto', resizable: false,
                            buttons: {

                                Go: function () {
                                    var Name = $('#postage').find(":selected").text();
                                    window.location.href = 'Hairdresser.php' + '?stylist=' + Name;

                                    $(this).dialog("close");
                                },
                                Cancel: function () {
                                    $(this).dialog("close");
                                }
                            },
                            close: function (event, ui) {

                                $(this).remove();
                            }
                        });
                }

                function whoamI(e) {

                    $('.popup').dialog({
                        buttons: {
                            Cancel: function () {
                                $(this).dialog("close");
                            },
                            Appointments: function () {
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
                        close: function (event, ui) {

                            $(this).remove();
                        },
                        title: 'Choose Therapist',
                        width: 350,
                        height: 200,
                    });

                }
                function btCosts() {

                    $('<div></div>').appendTo('body')
                        .html('<div><h6>' + ' '
                            + '<br/>   <p><b>Costings for On-site massage</b> <p>'
                            + '<p>  The standard base rates for On-Site Massage are dependent</br>'
                            + 'upon the number of employees using the service, the location</br>'
                            + 'of the company and the payment option chosen (see below).</br>'
                            + 'Please call to discuss rates.</p>'
                            + '<p><b>Three payment options:</b><p>'
                            + '<p>  a) Company pays full amount, b) Company subsidises cost, c) Individual pays. </br>'
                            + '  (Here, the individual pays their company for </br>their treatment and the company then pays me)</br>'
                            + '   Discounts are available for charity organisations.<p></br>'
                            + '  <b>Daily and Half day rates are also available:</b></br>'
                            + '  <b> Daily rate:</b></br>'
                            + '   Maximum number of 12 clients for 25 minute sessions,</br> or 6 hours of mixed appointments (10 and 25 minute). </br>'
                            + ' <b>  Half day rate:</b></br>'
                            + '   Maximum number of 6 clients for 25 minute sessions,</br> or</br> 3 hours of mixed appointments.</br>'
                            + '<b>Cancellation policy:</b></br> '
                            + '24 hours notice is required for any cancellations. Cancellations on the day of attendance are</br> charged at the full rate.'
                            + '</h6></div>')
                        .dialog({
                            modal: true, title: 'The Listening Hand Pricing ', zIndex: 10000, autoOpen: true,
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
                }
                function about() {

                    $('<div></div>').appendTo('body')
                        .html('<div><h6>' + ' '
                            + '<br/>   <p><b>The Listening Hand</b> was founded by Georgina Petrou in 2000 to promote Health'
                            + ' and Positivity</br> in the individual and the workplace.'
                            + ' <p>Offering �On-Site� (Seated Acupressure) massage to corporations</br> at competitive rates, we focus'
                            + ' on the individual needs of each company and every client within.</p></br>'
                            + '<p>The Listening Hand is far more than an �agency� for On-site massage therapists. Our service is</br>'
                            + 'tailor made to your working environment and ethos, with a qualified therapist dedicated to your site.</p>'
                            + '<p>This ensures you and your employees receive the highest standard of personal attention and </br>'
                            + 'gain the maximum benefit from this service</p>'
                            + '<p> All of our therapists are professionals; qualified, registered and insured.</p> '
                            + '</h6></div>')
                        .dialog({
                            modal: true, title: 'About ', zIndex: 10000, autoOpen: true,
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
                }
                function therapeutic() {

                    $('<div></div>').appendTo('body')
                        .html('<div><h6>' + ' '
                            + '<div align="left" class="mainer"><span class="maintitle">What is Therapeutic Massage?</span><br />                            '
                            + '              <br />                                                                                                              '
                            + '                      It is a massage technique performed on a massage table                                                      '
                            + '                      or couch, with oils directly applied to the skin.</br> It encourages                                             '
                            + '                      the body to heal itself by restoring its strength and                                                       '
                            + '                      vitality.<br />                                                                                             '
                            + '      <br />                                                                                                                      '
                            + '      Using specific treatment patterns, it can be used to relieve various problems including: <br />                             '
                            + '      <br />                                                                                                                      '
                            + '      <table width="100%" border="0" cellspacing="0" cellpadding="0">                                                             '
                            + '      <tr>                                                                                                                        '
                            + '                          <td>Back pain <br /> Sports injuries<br /> Headaches<br /> Muscle tension                               '
                            + '                            and fatigue<br />Muscle related illnesses<br />Old or recent                                          '
                            + '                            injuries<br />Shoulder tension<br />Pregnancy aches and pains<br />Hypertension<br /></td>            '
                            + '      <td width="25">&nbsp;</td>                                                                                                  '
                            + '                          <td valign="top">Whiplash<br />RSI<br />Hyperglycaemia<br />Anxiety<br />Stress<br />Menstrual          '
                            + '                            pains<br />Post surgery muscle pain<br />General aches and pains<br />Or                              '
                            + '                            just enjoyed for pure relaxation.</td>                                                                '
                            + '      </tr>                                                                                                                       '
                            + '      </table>                                                                                                                    '
                            + '      <br />All treatments are subject to a confidential consultation and usually last 1 hour.                                    '
                            + '                      <br />                                                                                                      '
                            + '                      30 minute and 90 minute sessions are also available. <br />                                                 '
                            + '                      <br />Please contact Georgina to discuss the best treatment                                                 '
                            + '                      for you, and arrange appointment times.<br />                                                               '
                            + '                    </div>                                                                                                        '
                            + '    </div>  '
                            + '</h6></div>')
                        .dialog({
                            modal: true, title: 'The Listening Hand Pricing ', zIndex: 10000, autoOpen: true,
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
                }


                function recruitment() {

                    $('<div></div>').appendTo('body')
                        .html('<div><h6>' + ' '
                            + '<br/>   <p><b>Recruitment</b> <p>'
                            + '<p> Positions are available for On-Site massage practitioners who are qualified, registered and insured.</p>'
                            + '<p>Please forward CV and covering email to: recruitment@thelisteninghand.co.uk </p>'
                            + '<p>Or contact by phone on 07752 552 744. </p>'
                            + '</h6></div>')
                        .dialog({
                            modal: true, title: 'The Listening Hand Pricing ', zIndex: 10000, autoOpen: true,
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
                }

                function Contact() {

                    $('<div></div>').appendTo('body')
                        .html('<div><h6>'
                            + ' <table width="590" height="340" border="0" cellpadding="0" cellspacing="8">                                                                                                               '
                            + ' <tr>                                                                                                                                                                                      '
                            + '   <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">                                                                                                        '
                            + '     <tr>                                                                                                                                                                                  '
                            + '       <td valign="top"><div align="left">                                                                                                                                                 '
                            + '               <p><span class="maintitle">Contact Us<br />                                                                                                                                 '
                            + '                 <br />                                                                                                                                                                    '
                            + '                 </span><span class="mainer"> If you would like more information                                                                                                           '
                            + '                 regarding services or therapies, please email:</span></p>                                                                                                                 '
                            + '               <p><span class="mainer"><a href="mailto:info@thelisteninghand.co.uk" class="mainer"><strong>info@thelisteninghand.co.uk</strong></a></span></p>                             '
                            + '             </div>                                                                                                                                                                        '
                            + '             <p align="left"><span class="mainer">If you would like information                                                                                                            '
                            + '               on joining The Listening Hand as a therapist, please email:</span></p>                                                                                                      '
                            + '             <p align="left"><span class="mainer"><a href="mailto:recruitment@thelisteninghand.co.uk" class="mainer"><strong>recruitment@thelisteninghand.co.uk</strong></a></span></p>    '
                            + '             <p align="left"><span class="mainer">If you would like to                                                                                                                     '
                            + '               speak to Georgina , please call:</span></p>                                                                                                                                 '
                            + '             <p align="left"><span class="mainer"><strong>07752 552 744<br />                                                                                                              '
                            + '               </strong></span><span class="mainer">(Call/voicemail/text)</span><br />                                                                                                     '
                            + '             </p>                                                                                                                                                                          '
                            + '             </td>                                                                                                                                                                         '
                            + '     </tr>                                                                                                                                                                                 '
                            + '     <tr>                                                                                                                                                                                  '
                            + '       <td><br /></td>                                                                                                                                                                     '
                            + '     </tr>                                                                                                                                                                                 '
                            + '   </table>                                                                                                                                                                                '
                            + '</h6></div>')
                        .dialog({
                            modal: true, title: 'The Listening Hand Pricing ', zIndex: 10000, autoOpen: true,
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
               }




    </script>

</body>
</html>
