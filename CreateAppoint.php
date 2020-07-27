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

          <title>jQuery Mobile: Creating Dialog Box</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>	
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />
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
			  		flex-flow: row nowrap;
			  		font-weight: bold;
			  		text-align: center;
			  		flex-direction: row;
			  		justify-content: center;
			  	}

			  	.footer {
			  		display: flex;
			  		justify-content: space-between;
			  	}
			.rowx {
				width: 100%;
				display: flex;
				justify-content: space-around; /* Change this */
				/*flex-wrap: wrap;*/
				flex-direction: row;
				/*align-items: center;*/
			}
            @media screen and (min-width: 320px) and (max-width: 480px) {
            .rowx {
               	flex-direction: column;
                   justify-content:center;
            }
        }

        </style>

</head>

<body>
<div data-role = "page">
    <div data-role="header">
<a href="#login" data-role="button" data-rel="dialog" data-transition="pop" data-icon="plus">opendialogpage</a>
</div>
    <div data-role="content">
<p>just for sample display</p></div>
</div>
    <div data-role="dialog" id="loginX">
    <div data-role="header" data-theme="e"></div>
    <div data-role="content">

        <!--<a id='loginX' href="#dialog" data-rel="dialog" data-transition="pop" style='display:none;'></a>-->

        <form id="login_form">
            <fieldset>
                <div data-role="fieldcontain">
                <label>USER NAME:</label>
                <input type="text" id="name" value=""/>
                </div>
                <div data-role="fieldcontain">
                    <label>EMAIL ID:</label>
                    <input type="text" id="email" value=""/></div>
            </fieldset>  
</form>
</div>
</div>

            <script type="text/javascript">

        $(document).ready(function () {

            $("#loginX").dialog();
        });


        </script>
</body>
</html>


