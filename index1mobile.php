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

        }
    </style>

</head>

<body>


                            <div id="therapistDialog" style="max-width:400px;" data-role="popup" data-theme="b" data-overlay-theme="b" data-dismissible="false">
                            <div data-role="header" data-theme="a">
                            <h1>Therapist</h1>
                            </div>
                            <div class="ui-content" role="main">
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
                            </div>
                        </div>  
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
                              <button id="webtoggle"  class="btn btn-lg btn-block btn-primary"  onclick="window.location.href = 'Index.php'">Web</button>
                                   <a id="openDialog" href="#therapistDialog" data-rel="popup"     class="p-2 text-dark" style="font-size:x-large">Make A Booking</a>
                             </div>
                             </div>
                       </div>
               

                <!-- dialogue was here-->

                 </nav>
                </div>
               </header>
        </div>




    <div class="photo">
        <img src="/images/backmassage.png" alt="Smiley face" height="315" width="468" />
        
    </div>

    <div class="container">
        <div class="card-deck footrow">
            
            <div class="mb-4">

              

                <div class="card-body">
                                  <button type="button"  class="btn btn-lg btn-block btn-primary">  <a href="#popupMass" data-rel="popup">On-Site Massage</a></button>
               
                    <div data-role = "popup" id = "popupMass" class = "ui-content" data-theme = "a">
                           
                    
<div align="center">
<h2>Facts</h2>

    <table width="590" border="0" align="center" cellpadding="0" cellspacing="0">


        <tr>


            <td background="images/sea.jpg">
                <table width="590" height="340" border="0" cellpadding="0" cellspacing="8">


                    <tr>


                        <td valign="top">
                            <table border="0" cellspacing="0" cellpadding="0">


                                <tr>


                                    <td width="350">
                                        <div align="left">
                                            <p>

                                                <span class="maintitle"><b>What is On-Site Massage?</b></span><br />
                                                <span class="mainer">
                                                    <br />
                                                    On-Site massage is so called because it is practiced at
                                                    your workplace.
                                                </span>
                                            </p>
                                            <p>
                                                <span class="mainer">
                                                    It&#8217;s a Japanese, Acupressure
                                                    massage that leaves the body energised and the mind alert.
                                                    The full version is 25 minutes, but a 10 minute &#8216;taster&#8217;
                                                    version is also offered for those employees under tight
                                                    time contraints.
                                                </span>
                                            </p>
                                            <p>
                                                <span class="mainer">
                                                    The massage works on pressure points
                                                    on the upper body, working on the back, head, neck, shoulders,
                                                    arms and hands, using elbows, thumbs and palm pressure.
                                                    This press and release technique helps to stimulate the
                                                    circulatory, muscular, nervous, immune and lymphatic systems
                                                    and promotes the release of endorphins, leaving the client
                                                    feeling good in a relaxed, but energised and clearly focused
                                                    frame of mind.
                                                </span>
                                            </p>

                                            <p>
                                                <span class="mainer">
                                                    <strong>
                                                        The treatment is received
                                                        fully clothed
                                                    </strong>, on a specially designed ergonomic
                                                    chair and was designed with the pc worker in mind. All treatments
                                                    are preceded by a brief confidential consultation to ascertain
                                                    the individual&#8217;s needs.
                                                </span>
                                            </p>

                                    </td>

                                </tr>


                            </table>

                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td valign="top" width="350">
                                        <div align="left">
                                            <p>

                                                <span class="maintitle"><b>What are the Benefits?</b></span><br />
                                                <span class="mainer">
                                                    <br />
                                                    There are many benefits of this therapy and the client
                                                    will see more of these with each treatment received. <br />
                                                    It is a very powerful massage that encourages the body
                                                    to heal itself by stimulating all the systems mentioned
                                                    in 'What is On-Site Massage?' (circulatory, immune, nervous,
                                                    lymphatic etc).
                                                </span>
                                            </p>
                                            <p>
                                                <span class="mainer">
                                                    <strong>
                                                        In brief, the main benefits
                                                        are:
                                                    </strong> <br />
                                                    Releases muscle tension<br />
                                                    Relieves headaches / backaches<br />
                                                    Diffuses stress<br />
                                                    Can help sufferers of hypertension, hyperglycaemia, migraines
                                                    and RSI<br />
                                                    Improves concentration and productivity <br />
                                                    Pro-active healthcare, encouraging the body to heal itself
                                                    <br />
                                                    Revitalising and Energy Boosting<br />
                                                    &nbsp;<br />
                                                    On-Site massage is a very flexible treatment that can
                                                    be adapted for all needs and modified to suit each individual.
                                                </span>
                                            </p>
                                        </div>
                                    </td>
                                </tr>

                            </table>


                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td valign="top" width="350">
                                        <div align="left">
                                       

                                                <span class="maintitle"><b>Requirements</b></span><br />
                                              <p>
                                                <span class="mainer">
                                                    <br />
                                                       
                                                    To provide On-Site massage for your business,  <br />The Listening
                                                    Hand requires the following:
                                                             
                                                </span>
                                            </p>
                                         
                                                <span class="mainer">
                                                       <p>
                                                    Nominated site contact.<br />
                                                    Appropriate in-house advertising of the service.<br />
                                                    A room or area with a space of 6x8 feet (2x3m).<br />
                                                    <br />
                                                    Interested? Why not <strong>
                                                        <a href="contactus.html" class="mainer">
                                                            contact
                                                            us
                                                        </a> ....<br /> <a href="mailto:info@thelisteninghand.co.uk" class="mainer"><strong>info@thelisteninghand.co.uk</strong></a>
                                                    </strong>
                                                            </p>
                                                </span>
                                           
                                        </div>
                                    </td>
                                </tr>

                            </table>


                            <table width="350px" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td valign="top" width="350">
                                        <div align="left" max-width="350">
                                            <p>

                                                <span class="maintitle"><b>Facts</b></span><br />
                                                <br />
                                                </p>
                                     
                                                <span class="mainer" >
                                              <p>
                                                    <strong><b>Consider these facts:</b></strong><br />
                                                    Work related stress is now the biggest occupational health
                                                    problem in the UK, with an estimated 500,000 people affected.
                                                    Back pain is a close 2nd. In 2003, the total cost for
                                                    sickness and absence in the UK was &pound;11 BILLION,
                                                    estimated to increase by <strong>&pound;1 BILLION</strong>
                                                    every 10 yrs. (Confederation of British Industry)<br />
                                                    <br />
                                                    Stress costs British Industry <strong>&pound;3 BILLION</strong>
                                                    per year. (Mental Health Foundation)<br />
                                                    <strong>9.1</strong> days are lost per year, per employee
                                                    to sickness leave<br />
                                                    = average cost of <strong>&pound;1,384.00</strong> per
                                                    employee per year<br />
                                                    = <strong>7.76%</strong> of the yearly salary bill lost.<br />
                                                    (All taken from 2003 report from Chartered Institute of
                                                    Personnel Development CIPD)<br />
                                                    <br />
                                                    <strong>How can On-Site Massage help?</strong> Research
                                                    into physical therapies in the workplace has shown <strong>
                                                        a
                                                        drop of over 50% in the number of sickness absences
                                                    </strong>
                                                    for companies offering these benefits. A visit from The
                                                    Listening Hand could save your company a lot of money.
                                                  </p>
                                                </span><br />
                                            </p>
                                        </div>
                                    </td>
                                </tr>

                            </table>
</table>
                </table>
    </div>
                        <a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    
  
                </div>


                </div>
            </div>
            <div class=" mb-4 ">
                <div class="card-body"> 
                    <button type="button"  class="btn btn-lg btn-block btn-primary">  <a href="#popupThera" data-rel="popup">Therapeutic</a></button>
               
                    <div data-role = "popup" id = "popupThera" class = "ui-content" data-theme = "a">
                            <div align="center" class="mainer">
        <h2>Therapeutic</h2>


        <table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>


                <td background="images/sea.jpg">
                    <span class="maintitle"><b>What is Therapeutic Massage?</b></span><br />

                    It is a massage technique performed on a massage table
                    or couch, with oils directly applied to the skin.</br> It encourages
                    the body to heal itself by restoring its strength and
                    vitality.<br />

                    Using specific treatment patterns, it can be used to relieve various problems including: <br />

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">


                        <tr>


                            <td>
                                Back pain <br /> Sports injuries<br /> Headaches<br /> Muscle tension
                                and fatigue<br />Muscle related illnesses<br />Old or recent
                                injuries<br />Shoulder tension<br />Pregnancy aches and pains<br />Hypertension<br />
                            </td>

                            <td width="25">&nbsp;</td>

                            <td valign="top">
                                Whiplash<br />RSI<br />Hyperglycaemia<br />Anxiety<br />Stress<br />Menstrual
                                pains<br />Post surgery muscle pain<br />General aches and pains<br />Or
                                just enjoyed for pure relaxation.
                            </td>

                        </tr>

                    </table>
                    <br />All treatments are subject to a confidential consultation and usually last 1 hour.
                    <br />
                    30 minute and 90 minute sessions are also available. <br />
                    <br />Please contact Georgina to discuss the best treatment
                    for you, and arrange appointment times.<br />


                    <br />
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div align="left">
                                    <span class="mainer">
                                        <span class="maintitle">
                                            <b>
                                                General
                                                Treatments
                                            </b>
                                        </span><br />

                                        After a confidential consultation, a treatment pattern will
                                        be designed specifically to address the clients current
                                        problem, but also taking into account historical injuries.<br />
                                        <br />
                                        This type of treatment focuses on addressing all known problems,
                                        possibly over a course of treatments. It will work on the
                                        areas causing the current problem and on all related muscles.
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div align="left">
                                    <p>
                                        <span class="mainer">
                                            <span class="maintitle"><b>Back treatments</b></span><br />
                                            <strong>

                                            </strong> The back is the support system for the whole
                                            body. Problems in this area can lead to compensatory injuries
                                            in almost any other part of the body, particularly the
                                            legs and neck and shoulders<br /><br />This massage assists primarily in
                                            the relief of back pain, but can also help shoulder tension,
                                            &#8216;lopsided&#8217; shoulders, lethargy, and menstrual
                                            pains.It addresses the whole body by focusing on the back
                                            and any synergists to the problem muscles.
                                        </span>
                                    </p>

                                </div>
                            </td>
                        </tr>

                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div align="left">
                                    <p>
                                        <span class="mainer">
                                            <span class="maintitle"><b>Shoulder Treatments</b></span><br />
                                            <strong>

                                            </strong>Massage treatments for the shoulders
                                            help to restore a full range of movement to this area and
                                            address repercussive injuries to any associated muscles.<br />

                                            These treatment patterns help restore the full range of
                                            movement to the shoulders and arms and can also alleviate
                                            tension headaches, shoulder pain, stiff neck, and aching
                                            arms.
                                        </span>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div align="left">
                                    <span align="left" class="mainer">
                                        <span class="maintitle"><b>Leg Treatments</b></span><br />

                                        Treatment patterns focusing on the legs are excellent
                                        for clients involved in regular sporting activity. They
                                        help maintain healthy leg and back muscles and reduce
                                        the build up of lactic acid.<br />
                                        <br />
                                        This massage focuses on all leg muscles and connected
                                        muscles in the lower back, buttocks and ankles to help
                                        alleviate injuries to all muscles of the legs.<br />
                                        <br />
                                    </span>
                                </div>
                            </td>
                        </tr>

                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div align="left">
                                    <span class="mainer">
                                        <span class="maintitle"><b>Head & Face Treatments </b></span><br />

                                        These are wonderfully relaxing massages. Working on all areas of the head and face, this treatment can provide relief from headaches, migraines, tension, anxiety, insomnia and stress. It can also assist with sinus & breathing problems..<br />
                                        <br />
                                        The back, neck and shoulders may also be incorporated into this treatment pattern, or the whole hour can be spent solely on the head and face to encourage complete relaxation
                                    </span>
                                </div>


                            </td>
                        </tr>

                    </table>
                    <br />
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div align="left">
                                    <span class="mainer">
                                        <span class="maintitle"><b>Pregnancy Treatments</b></span><br />

                                        Ante natal massage is available from the second trimester onwards. It is a very gentle and relaxing massage, with unscented oil, that works on the legs, back, shoulders, neck, head, arms, and hands, to relieve all the characteristic ails that accompany pregnancy, from calf cramps, to anxiety. It can also help relieve PSD, lower back pain, headaches, and achy neck and shoulders. It is performed on the massage table with the client lying on their side, and supported by a pregnancy pillow.<br />
                                        <br />
                                        Post natal massage is also available, for new mothers, and fathers, who are welcome to bring baby along while they receive their treatment. This massage is available from 8 weeks after the birth. These sessions treat the whole body with the focus on relaxation. The back, neck, arms and shoulders receive most of the attention during this treatment, to alleviate muscle tension usually caused by feeding/ carrying baby.
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
</table>
    </div>
<a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    
                            </div>   
                </div>    
   </div>    
     <div class="mb-4 ">

                <div class="card-body">

                     <button type="button"  class="btn btn-lg btn-block btn-primary">  <a href="#popupBasic" data-rel="popup">Costings</a></button>
               
            <div data-role = "popup" id = "popupBasic" class = "ui-content" data-theme = "a">
                             <div><h3 class="ui-dialog-title"><p><b>Costings for On-site massage</b> </p></h3>
                       <p>  The standard base rates for On-Site Massage are dependent</br>
                       upon the number of employees using the service, the location</br>
                       of the company and the payment option chosen (see below).</br>
                       Please call to discuss rates.</p>
                       <p><b>Three payment options:</b><p>
                       <p>  a) Company pays full amount, b) Company subsidises cost, c) Individual pays. </br>
                         (Here, the individual pays their company for </br>their treatment and the company then pays me)</br>
                          Discounts are available for charity organisations.<p></br>
                         <b>Daily and Half day rates are also available:</b></br>
                         <b> Daily rate:</b></br>
                          Maximum number of 12 clients for 25 minute sessions,</br> or 6 hours of mixed appointments (10 and 25 minute). </br>
                        <b>  Half day rate:</b></br>
                          Maximum number of 6 clients for 25 minute sessions,</br> or</br> 3 hours of mixed appointments.</br>
                       <b>Cancellation policy:</b></br> 
                       24 hours notice is required for any cancellations. Cancellations on the day of attendance are</br> charged at the full rate.
                       </div>
                				<a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="xrow">


        <div class="footitem firstitem">
               <div id = "page0" data-role = "main" class = "ui-content">

                               <a href = "#popupContact" data-transition = "fade" class = "ui-btn 
               ui-btn-inline" data-rel = "popup">Contact</a>
 
            <div data-role = "popup" id = "popupContact" class = "ui-content" data-theme = "a">
  			<h3 class="ui-title">Contact Us</h3>
				        <table width="590" height="340" border="0" cellpadding="0" cellspacing="8">                                                                                                               
                           <tr>                                                                                                                                                                                   
                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">                                                                                                     
                               <tr>                                                                                                                                                                               
                                 <td valign="top"><div align="left">                                                                                                                                              
                                         <p><span class="mainer"> If you would like more information                                                                                                        
                                           regarding services or therapies, please email:</span></p>                                                                                                              
                                         <p><span class="mainer"><a href="mailto:info@thelisteninghand.co.uk" class="mainer"><strong>info@thelisteninghand.co.uk</strong></a></span></p>                          
                                       </div>                                                                                                                                                                     
                                       <p align="left"><span class="mainer">If you would like information                                                                                                         
                                         on joining The Listening Hand as a therapist, please email:</span></p>                                                                                                   
                                       <p align="left"><span class="mainer"><a href="mailto:recruitment@thelisteninghand.co.uk" class="mainer"><strong>recruitment@thelisteninghand.co.uk</strong></a></span></p> 
                                       <p align="left"><span class="mainer">If you would like to                                                                                                                  
                                         speak to Georgina , please call:</span></p>                                                                                                                              
                                       <p align="left"><span class="mainer"><strong>07752 552 744<br />                                                                                                           
                                         </strong></span><span class="mainer">(Call/voicemail/text)</span><br />                                                                                                  
                                       </p>                                                                                                                                                                       
                                       </td>                                                                                                                                                                      
                               </tr>                                                                                                                                                                              
                               <tr>                                                                                                                                                                               
                                 <td><br /></td>                                                                                                                                                                  
                               </tr>                                                                                                                                                                              
                             </table>
                               </table>
				<a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    

			
            </div>
        </div>
        </div>
        <div class="footitem middleitem">

            <div id = "page1" data-role = "main" class = "ui-content">
      
            <a href = "#my_transition" data-transition = "fade" class = "ui-btn 
               ui-btn-inline" data-rel = "popup">Testimonials</a>
                             

       
            <div data-role = "popup" id = "my_transition" class = "ui-content" data-theme = "a">
                             <div><h3 class="ui-dialog-title"><p><b>Costings for On-site massage</b> </p></h3>
                       <p>  The standard base rates for On-Site Massage are dependent</br>
                       upon the number of employees using the service, the location</br>
                       of the company and the payment option chosen (see below).</br>
                       Please call to discuss rates.</p>
                       <p><b>Three payment options:</b><p>
                       <p>  a) Company pays full amount, b) Company subsidises cost, c) Individual pays. </br>
                         (Here, the individual pays their company for </br>their treatment and the company then pays me)</br>
                          Discounts are available for charity organisations.<p></br>
                         <b>Daily and Half day rates are also available:</b></br>
                         <b> Daily rate:</b></br>
                          Maximum number of 12 clients for 25 minute sessions,</br> or 6 hours of mixed appointments (10 and 25 minute). </br>
                        <b>  Half day rate:</b></br>
                          Maximum number of 6 clients for 25 minute sessions,</br> or</br> 3 hours of mixed appointments.</br>
                       <b>Cancellation policy:</b></br> 
                       24 hours notice is required for any cancellations. Cancellations on the day of attendance are</br> charged at the full rate.
                       </div>
                				<a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    
            </div>
         </div>

        </div>


         <div class="footitem middleitem">

            <div id = "page1" data-role = "main" class = "ui-content">
            <a href = "#my_transition9" data-transition = "pop" class = "ui-btn  
               ui-btn-inline" data-rel = "popup">Recruitment</a>
               

            <div data-role = "popup" id = "my_transition9" class = "ui-content" data-theme = "a">
  			<h3 class="ui-title">Contact Us</h3>
				        <table width="590" height="340" border="0" cellpadding="0" cellspacing="8">                                                                                                               
                           <tr>                                                                                                                                                                                   
                             <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">                                                                                                     
                               <tr>                                                                                                                                                                               
                                 <td valign="top"><div align="left">                                                                                                                                              
                                         <p><span class="mainer"> If you would like more information                                                                                                        
                                           regarding services or therapies, please email:</span></p>                                                                                                              
                                         <p><span class="mainer"><a href="mailto:info@thelisteninghand.co.uk" class="mainer"><strong>info@thelisteninghand.co.uk</strong></a></span></p>                          
                                       </div>                                                                                                                                                                     
                                       <p align="left"><span class="mainer">If you would like information                                                                                                         
                                         on joining The Listening Hand as a therapist, please email:</span></p>                                                                                                   
                                       <p align="left"><span class="mainer"><a href="mailto:recruitment@thelisteninghand.co.uk" class="mainer"><strong>recruitment@thelisteninghand.co.uk</strong></a></span></p> 
                                       <p align="left"><span class="mainer">If you would like to                                                                                                                  
                                         speak to Georgina , please call:</span></p>                                                                                                                              
                                       <p align="left"><span class="mainer"><strong>07752 552 744<br />                                                                                                           
                                         </strong></span><span class="mainer">(Call/voicemail/text)</span><br />                                                                                                  
                                       </p>                                                                                                                                                                       
                                       </td>                                                                                                                                                                      
                               </tr>                                                                                                                                                                              
                               <tr>                                                                                                                                                                               
                                 <td><br /></td>                                                                                                                                                                  
                               </tr>                                                                                                                                                                              
                             </table>
                               </table>
				<a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    

			
            </div>
         </div>

        </div>


        <div class="footitem middleitem">


                        <div id = "page1" data-role = "main" class = "ui-content">
            <a href = "#myabout" data-transition = "pop" class = "ui-btn  
               ui-btn-inline" data-rel = "popup">About</a>
               

<div tabindex="0" class="ui-popup-container pop in ui-popup-active"  style="left: 390px; top: 81px; max-width: 1108px;">
      <div class="ui-corner-all ui-popup ui-body-c ui-overlay-shadow" id="myabout"" aria-disabled="false" style="max-width:350px;" data-role="popup" data-theme="c" data-transition="none" data-position-to="origin" data-overlay-theme="a" data-corners="true" data-shadow="true" data-disabled="false">
			<div class="ui-corner-top ui-header ui-bar-a" role="banner" data-role="header" data-theme="a">
				<h1 class="ui-title" role="heading" aria-level="1">About</h1>
			</div>
			<div class="ui-corner-bottom ui-content ui-body-d" role="main" data-role="content" data-theme="d">
			<div><h6>
                  <br/>   <p><b>The Listening Hand</b> was founded by Georgina Petrou in 2000 to promote Health
                   and Positivity</br> in the individual and the workplace.
                   <p>Offering <b>"On-Site" (Seated Acupressure) massage</b> to corporations</br> at competitive rates, we focus
                   on the individual needs of each company and every client within.</p></br>
                  <p>The Listening Hand is far more than an "agency" for On-site massage therapists. Our service is</br>
                  tailor made to your working environment and ethos, with a qualified therapist dedicated to your site.</p>
                  <p>This ensures you and your employees receive the highest standard of personal attention and </br>
                  gain the maximum benefit from this service</p>
                  <p> All of our therapists are professionals; qualified, registered and insured.</p> 
                  </h6></div>


				<a class="ui-btn ui-shadow ui-btn-corner-all ui-btn-inline ui-btn-up-c" href="#" data-role="button" data-theme="c" data-rel="back" data-inline="true" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span></span></a>    

			</div>
		</div></div>



        </div>
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
