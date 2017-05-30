<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--Font-awesome 4.7.0-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Flickity-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!--Fontello-->
    <link href="web/css/fontello.css" rel="stylesheet">
</head>

<body id="body">
    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Test</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.location.href = 'index.html'">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.location.href = 'category.php'">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.location.href = 'businesstype.html'">Business Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.location.href = 'instructions.html'">How To Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.location.href = 'contacts.html'">Contact Us</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-side" id="navbarSide" style="padding: 20px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="right">
                    <a class="hamburger is-closed" data-toggle="offcanvas"><i class="icon_set_1_icon-77"></i></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12" id="item_desc">
                    <form>
                        <img id="images1" src="" class="thumbnail" width="100%" height="100%">
                        <h3 id="fieldtitle"></h3>
                        <input type='text' id='field1'/>
                        <input type='text' id='field2'/> 
                        <div id="field3"></div>
                        <p>
                            <a href="#" class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></a>
                            <a href="#menu-toggle" class="btn btn-outline-primary" onclick="switchVisible();" ><i class="icon_set_1_icon-93"></i></a>
                            <a href="#menu-toggle" class="btn btn-outline-primary" id="menu-toggle">Book Now</a>
                        </p>                        
                    </form>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12" id="item_review">
                    <form>
                         <img id="images1v2" src="" class="thumbnail" width="100%" height="100%">
                        <h3 id="fieldtitlev2"></h3>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Review</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <p>
                            <a href="#" class="btn btn-outline-danger"><i class="fa fa-heart-o"></i></a>
                            <a href="#menu-toggle" class="btn btn-outline-primary" onclick="switchVisible();" ><i class="icon_set_1_icon-93"></i></a>
                            <a href="#menu-toggle" class="btn btn-outline-primary" id="btn_submit_review">Submit</a>
                        </p>                        
                    </form>
                    <hr>
                </div>
            </div>
        </ul>
        <div class="overlay"></div>
    </nav>
    <div class="container marketing"> 
        <h1>The Main page</h1>
        <div class="row">
            <?php 
            $conn = new mysqli('localhost', 'root', '1234', 'test');
            if ($conn->connect_error) {
                die("Connection error: " . $conn->connect_error);
            }
            $result = $conn->query("SELECT * FROM items ORDER BY id DESC"); 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {?>
            <div class="col-lg-3 col-sm-6 division-card">
                <div class="card" style="position: relative;">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15c3874090b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15c3874090b%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22118.01666641235352%22%20y%3D%2297.5%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <h4 class="card-title no-margin cardprice" id="card-price<?php echo $row['id'] ; ?>" style="position: absolute; right: 0; bottom:0; top:150px;"></h4>
                    <div class="card-block" align="left">                        
                        <h4 class="card-title no-margin">Card title</h4>
                        <p class="no-margin">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <input class="form-control" type='text' id='valid' value="<?php echo $row['id'] ; ?>"/> <br/>
                            <input class="form-control" type='text' id='fielda<?php echo $row['id'] ; ?>' value="<?php echo $row['name'] ; ?>"/> <br/>
                            <input class="form-control dprice" type='text' id='fieldb<?php echo $row['id'] ; ?>' value="<?php echo $row['price'] ; ?>"/> <br/>
                            <input class="form-control" type='text' id='fieldc<?php echo $row['id'] ; ?>' value="<?php echo $row['temdesc'] ; ?>"/> <br/>
                            <input class="form-control" type='text' id='fieldd<?php echo $row['id'] ; ?>' value="<?php echo $row['imagename'] ; ?>"/> <br/>
                            <br/>
                        <a href="#" class="btn btn-primary" onclick="copy()"><i class="fa fa-heart-o"></i></a>
                        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="icon_set_1_icon-93"></i></a>
                        <a href="#" class="btn btn-outline-primary navbarSideButton"   id="<?php echo $row['id'] ; ?>">Go Somewhere</a>
                          
                    </div>
                </div>
            </div>
        <?php } } else {  } ?>
        </div>
    </div> Last month we encounter P2P issue  when we try to send files containing excel, word, and PDF and some compressed files files the reciver cannot download the 

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#footer").load("footer.html");

        $('[data-toggle="offcanvas"]').click(function() {
            $('#wrapper').toggleClass('toggled');
        });

        var currency ="&#x20B1;"; //Currency
        var dprice = $('.dprice').val();
        var twodec = dprice.toFixed(2); //Round Price To Two Decimal places
        xprice=currency.concat(twodec); 

        alert ( xprice);
    }); 

    $(document).ready(function() {

        $('.navbarSideButton').on('click', function() {
            var valid = $(this).attr('id');

            $('#navbarSide').addClass('reveal');
            $('.overlay').show();
            document.body.style.overflow = 'hidden';

            var v = "#fieldd";
            var path = "images/web/"; //Image path
            var fv =  v+valid;
            var fx =  "#fielda"+valid; //Name
            var fy =  "#fieldb"+valid; //Price
            var fz =  "#fieldc"+valid; //Description

            $('#fieldtitle').html($(fx).val());
            $('#fieldtitlev2').html($(fx).val());
            $('#field1').val($(fx).val());
            $('#field2').val($(fy).val());
            $('#field3').html($(fz).val());

            var data = $(fv).val();
            var imgv1 = document.getElementById("images1");
            var imgv2 = document.getElementById("images1v2");
            imgv1.src= path.concat(data);
            imgv2.src= path.concat(data);
        });

        $('.is-closed').on('click', function() {
            $('#navbarSide').removeClass('reveal');
            $('.overlay').hide();
            document.body.style.overflow = 'scroll';
        });

    });

    function switchVisible() {        
        if (document.getElementById('item_desc')) {
            if (document.getElementById('item_desc').style.display == 'none') {
                    document.getElementById('item_desc').style.display = 'block';
                    document.getElementById('item_review').style.display = 'none';
            } else {
                    document.getElementById('item_desc').style.display = 'none';
                    document.getElementById('item_review').style.display = 'block';
            }
        }
    }

</script>
</body>

</html>
<style type="text/css">
.navbar-side {
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    padding: 0;
    list-style: none;
    border-left: 2px solid #ccc;
    background-color: #f7f7f9;
    overflow-y: scroll;
    z-index: 1000;
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
    -webkit-transition: 300ms ease;
    transition: 300ms ease;
}

.navbar-side-item {
    padding: 1.5rem 0;
    margin: 0;
    border-bottom: 2px solid #ccc;
    height: 5rem;
}

.side-link {
    padding-left: 2rem;
}

.reveal {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
    -webkit-transition: 300ms ease;
    transition: 300ms ease;
}

.overlay {
    position: fixed;
    display: none;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    cursor: pointer;
    background-color: #ccc;
    opacity: 0.6;
    z-index: 990;
}
.is-closed{
    cursor: pointer;
}

#item_review{
    display: none;
}

/*-------------------------------*/
/*    Media Breakpoints Area     */
/*-------------------------------*/

@media (min-width: 544px) {
    .navbar-side {
        width: 100%;
    }
    .container.marketing {
        margin-top: 90px;
    }
}

@media (min-width: 768px) {
    .navbar-side {
        width: 50%;
    }
    .container.marketing {
        margin-top: 80px;
    }
}

@media (min-width: 992px) {
    .navbar-side {
        width: 40%;
    }
    .container.marketing {
        margin-top: 70px;
    }
}

@media (min-width: 1200px) {
    .navbar-side {
        width: 25%;
    }
    .container.marketing {
        margin-top: 60px;
    }
}
</style>

