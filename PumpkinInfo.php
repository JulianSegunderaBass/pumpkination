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
    <title>Pumpkin Info</title>

    <Style>
        html {
            height:100%;
        }
        body {
            padding-top:70px;
            padding-bottom:70px;
            background:url("http://wallpoper.com/images/00/44/57/41/pumpkins_00445741.jpg");
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
            width:245px;
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
        .jumbotron {
            background-color:#aa6262;
            border-radius:1rem;
        }
        .blockquote-footer {
            color:#ffffff;
        }
        .card {
            background-color: #381010;
        }
        .toggle {
            background-color: rgba(44, 44, 44, 0.8);
            border-radius:0.5rem;
        }
        .nav-pills .nav-link {
            background-color: rgba(44, 44, 44, 1);
            border-radius: .25rem;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #FF5722;
        }
        a, a:hover {
            color:#ffd28e;
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
                    <li class="nav-item active">
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
        <div class="jumbotron">
            <h2>I would rather sit on a pumpkin and have it all to myself, than be crowded on a velvet cushion.</h2>
            <footer class="blockquote-footer">Henry David Thoreau <cite title="Source Title">, BrainyQuote</cite></footer>
        </div>

        <div class="container">
            <div class="toggle">
                <div class="row">    
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pumpkins are fruits, not vegetables!</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">The first jack-o’-lanterns</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pumpkins originated in North America</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pumpkins grow (almost) everywhere</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Fruits are considered to be the part of the plant that has seeds on the inside. By this definition, a pumpkin is definitely a fruit. They’re a member of the gourd family, which includes other fruits like watermelon and winter squash.</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Early jack-o’-lanterns were made by carving turnips or potatoes — not pumpkins. The Irish and Scottish used them as part of their pagan Celtic celebrations, while the English did the same thing, just with beets instead. In fact, the tradition of the jack-o’-lantern stems from the 
                            Irish legend of a man named Stingy Jack who was known as somewhat of an unpleasant trickster. Immigrants brought their carving traditions to America, but found that pumpkins were a much easier alternative.</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">The oldest seeds have been found in Mexico and date back to between 7,000-5,500 B.C. Pumpkins and other forms of squash were an important food staple for Native Americans. They referred to pumpkins (squash) along with two other important crops, beans and maize (corn), as the “Three Sisters,” and they planted them together since they helped each other grow. The corn serves as a trellis upon which the beans can grow high and reach sunlight; the beans put nitrogen in the soil, 
                            which helps the corn grow tall; and the pumpkins shaded the ground, thereby crowding out weeds and protecting the shallow roots of the corn.</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Pumpkins are grown on every continent except Antarctica. They even grow in Alaska.</div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/-qSVn7qAmQU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pumpkins make excellent decorations</h5>
                            <hr>
                            <p class="card-text">Carving pumpkins into jack-o'-lanterns is a popular Halloween tradition that originated hundreds of years ago in Ireland. Back then, however, jack-o'-lanterns were made out of turnips or potatoes; 
                                it wasn't until Irish immigrants arrived in America and discovered the pumpkin that a new Halloween ritual was born.</p>
                            <a href="https://unsplash.com/s/photos/pumpkin" class="btn btn-primary">View more designs</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/gS32T4TxSJY" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">What are Pumpkins?</h5>
                            <hr>
                            <p class="card-text">Pumpkin, fruit of certain varieties of squash (namely, Cucurbita pepo and C. moschata) in the gourd family (Cucurbitaceae), 
                                usually characterized by a hard orange rind with distinctive grooves. Pumpkins are commonly grown for human food and also for livestock feed.</p>
                            <a href="https://www.britannica.com/plant/pumpkin" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/T9pdHqCsyoQ" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">How do you grow them?</h5>
                            <hr>
                            <p class="card-text">Get the full step-by-step guide on growing pumpkins — and all of your most 
                                pressing questions answered from this article with insights from Rosie Lerner, Extension Consumer Horticulture Specialist at Purdue University.</p>
                            <a href="https://www.goodhousekeeping.com/home/gardening/a28367017/growing-pumpkin-plants/" class="btn btn-primary">View article</a>
                        </div>
                    </div>
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
