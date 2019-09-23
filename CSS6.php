

<!DOCTYPE html>
<html class="">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.position.js"></script>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet" />
    <style>

        /*.wrapper {
            display: flex;
            flex-flow: row wrap;
            font-weight: bold;
            text-align: center;
        }*/





        .foot-container {
            width: 100%;
            display: flex;
            justify-content: space-around; /* Change this */
            /*flex-wrap: wrap;*/
            flex-direction: row;
            /*align-items: center;*/ 
        }
		/*.foot-item {
			border: 1px solid #fff;
			width: 300px;
			height: 300px;
			justify-content: center;
		}*/
		/*.lastitem {
			margin-left: auto;
             background-color: red;
		}

		.firstitem {
			margin-right: auto;
             background-color: blue;
		}*/

        
		.footitem {
	
        background-color: orange;
		}



    </style>
</head>
<body >


   
            <div class="foot-container">
  
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
  

    <script type="text/javascript">


        $("#add").on("click", function () {
        
            $("<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>").appendTo(".contentx");
        });
    </script>
    </body>

</html>




