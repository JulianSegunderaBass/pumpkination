<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Custom Font "Lato" -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
    <title>Pumpkination</title>

    <Style>
        html {
            height:100%;
        }
        body {
            background:url("https://images4.alphacoders.com/755/thumb-1920-755504.jpg");
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
            font-family:Lato;
            color:white;
        }
        #content {
            text-align:center;
            padding-top:25%;
            text-shadow:0px 4px 3px rgba(0,0,0,0.4),
                        0px 8px 13px rgba(0,0,0,0.1),
                        0px 18px 23px rgba(0,0,0,0.1);
        }
        h1 {
            font-weight:700;
            font-size:5em;
        }
        hr {
            width:700px;
            border-top:1px solid #f8f8f8;
            border-bottom:2px solid rgba(0,0,0,0.2);
        }
        .bg-primary {
            background-color:#794203!important;
        }
        /* #5d3005 */
        .btn-primary {
            color: #e9e9e9;
            background-color:#5d3005;
            border-color: #f08137;
        }
        .btn-primary:hover {
            color: #ffffff;
            background-color:#854509;
            border-color:#f08137;
        }
        .dropdown-menu {
            background-color:#a7731a;
        }
        .dropdown-item {
            color:#ffffff;
        }
    </Style>
</head>
 
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Pumpkination</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="PumpkinInfo.php"><i class="fas fa-book"></i> Read about Pumpkins<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PumpkinGallery.php"><i class="fas fa-image"></i> The Image Gallery<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="content">
                    <h1>Pumpkination</h1>
                    <h3>A website dedicated to Pumpkins and their cuteness</h3>
                    <hr>
                    <a class="btn btn-primary" href="PumpkinInfo.php" role="button"><i class="fas fa-book"></i> Read about Pumpkins</a>
                    <a class="btn btn-primary" href="PumpkinGallery.php" role="button"><i class="fas fa-image"></i> The Image Gallery</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>
</body>

</html>
