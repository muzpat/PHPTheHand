

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

        .wrapper {
            display: flex;
            flex-flow: row wrap;
            font-weight: bold;
            text-align: center;
        }

            .wrapper > * {
                padding: 10px;
                flex: 1 100%;
            }

        .header {
            background: white;
        }

        .footer {
            background: lightgreen;
        }

        .main {
            text-align: left;
            background: deepskyblue;
        }

        .aside-1 {
            background: gold;
        }

        .aside-2 {
            background: hotpink;
        }

        @media all and (min-width: 600px) {
            .aside {
                flex: 1 0 0;
            }
        }

        @media all and (min-width: 800px) {
            .main {
                flex: 3 0px;
            }

            .aside-1 {
                order: 1;
            }

            .main {
                order: 2;
            }

            .aside-2 {
                order: 3;
            }

            .footer {
                order: 4;
            }
        }

        body {
            padding: 2em;
        }
        .foot-container {
            width: 900px;
            display: flex;
            justify-content: center; /* Change this */
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center; /* Add this */
        }

    </style>
</head>
<body >
    <div class="wrapper">
        <header class="header">
            <div>
                <div class="headitem">
                    <h5 class="my-0 mr-md-auto font-weight-normal">
                        <a href="#" onclick="window.location.href = 'css4.php'">
                            <img width="567" height="144" src="listening1.gif" border="0" />
                        </a>
                    </h5>
                </div>
                <div>
                    <nav class="my-2 my-md-0 mr-md-3">
                        <a class="p-2 text-dark" onclick="linkaction(this)" style="font-size:x-large" href="#">Make a Booking</a>
                        <a class="p-2 text-dark" onclick="whoamI(this)" href="#">Massage Therapist's Page</a>

                        <a class="p-2 text-dark" href="Management.php">Management Admin</a>
                        <a class="p-2 text-dark" href="Blog.php">Blog</a>
                        <a class="p-2 text-dark" onclick="whichuser(this)" href="#">Users</a>
                    </nav>
                </div>
            </div>

        </header>
        <article class="main contentx">
            <button id="add">Add Content</button>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </article>
        <aside class="aside aside-1">Aside 1</aside>
        <aside class="aside aside-2">Aside 2</aside>
        <footer class="footer">
            <div class="foot-container">
  
                    <div class="footitem">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled text-small">
                            <li>
                                <a class="text-muted" onclick="Contact();" href="#">Contact</a>
                            </li>

                        </ul>
                    </div>
                    <div class="footitem">
                        <h5>References</h5>
                        <ul class="list-unstyled text-small">
                            <li>
                                <a class="text-muted" onclick="window.location.href = 'Testimonials.php';" href="#">Testimonials</a>
                            </li>

                        </ul>
                    </div>
                    <div class="footitem">
                        <h5>Jobs</h5>
                        <ul class="list-unstyled text-small">
                            <li>
                                <a class="text-muted" onclick="recruitment(this)" href="#">Recruitment</a>
                            </li>

                        </ul>
                    </div>
                    <div class="footitem">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li>
                                <a class="text-muted" onclick="about(this)" href="#">About</a>
                            </li>

                        </ul>
                    </div>


            </div>
        </footer>
    </div>
    <script type="text/javascript">


        $("#add").on("click", function () {
        
            $("<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>").appendTo(".contentx");
        });
    </script>
    </body>

</html>




