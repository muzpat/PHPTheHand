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

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.position.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet" />
    <style>
            html, body {
              height: 100%;
            }
            body {
              display: flex;
              flex-direction: column;
            }
            .content {
              flex: 1 0 auto;
            }
            .footer {
              flex-shrink: 0;
            }
            		.xrow {
			width: 100%;
			display: flex;
			justify-content: space-around;
			flex-direction: row;
            	}
            			.header {
				display: flex;
				flex-flow: row wrap;
				font-weight: bold;
				text-align: center;
				flex-direction: column;
			}

	
    </style>

</head>

<body>
  <div class="content">
                <header class="header">

                <div class="headitem">
                    <h5 class="my-0 mr-md-auto font-weight-normal">
                        <a href="#" onclick="window.location.href = 'manmenu.php'">
                            <img width="567" height="144" src="listening1.gif" border="0" />
                        </a>
                    </h5>
                </div>
                <div>
                    <nav class="my-2 my-md-0 mr-md-3">
                        <a class="p-2 text-dark" onclick="linkaction(this)" style="font-size:x-large" href="#">Make a Booking</a>
                        <!-- <a class="p-2 text-dark" onclick="whoamI(this)" href="#">Massage Therapist's Page</a>

                        <a class="p-2 text-dark" href="Management.php">Management Admin</a>
                        <a class="p-2 text-dark" href="Blog.php">Blog</a>
                        <a class="p-2 text-dark" onclick="whichuser(this)" href="#">Users</a> -->
                    </nav>
                </div>
      </header>
                  <div class="photo">
                <img src="/images/backmassage.png" alt="Smiley face" height="315" width="468" />
            </div>
            <div class="container">
                <div class="card-deck footrow">
                    <div class=" mb-4 ">


                        <div class="card-body">


                            <button type="button" onclick="window.location.href = 'Facts.php';" class="btn btn-lg btn-block btn-primary">On-Site Massage</button>
                        </div>
                    </div>
                    <div class=" mb-4 ">

                        <div class="card-body">

                            <button type="button" onclick="window.location.href = 'Therapeutic.php';" class="btn btn-lg btn-block btn-primary">Therapeutic</button>
                        </div>
                    </div>
                    <div class="mb-4 ">

                        <div class="card-body">


                            <button type="button" onclick="btCosts();" class="btn btn-lg btn-block btn-primary">Costings</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <footer class="footer">

              <div class="xrow footer">


            <div class="footitem firstitem">

                <a class="text-muted" onclick="Contact();" href="#">Contact</a>

            </div>
            <div class="footitem middleitem">

                <a class="text-muted" onclick="window.location.href = 'Testimonials.php';" href="#">Testimonials</a>

            </div>
            <div class="footitem middleitem">

                <a class="text-muted" onclick="recruitment(this)" href="#">Recruitment</a>

            </div>
            <div class="footitem  lastitem">

                <a class="text-muted" onclick="about(this)" href="#">About</a>

            </div>
        </div>


  </footer>
</body>
</html>
