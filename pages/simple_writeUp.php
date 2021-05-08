<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mystyle.css">
    <title>Hello, world!</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Happy Teacher's Day</a>
    </nav>
    <div class="container-fluid" style="text-align: center;">
        <!-- <img src = "../images/Image_1.jpg" style="width: 100%; height: 600px;"> 
            <img src=" " style="width: 100%; height: 600px;">   -->
        <div style="<?php echo "background-image: url(../images/".$_GET['back']. ".jpg);"; ?>" class="div-background">
        <div class="container-fluid" style="text-align: center;">
			<div style="width:100%; height:20%;">
				<p><?php echo "../images/".$_GET['to']. ".jpg"; ?></p>
			</div>
			<div style="width:100%; height:60%;">
				<p><?php echo "../images/".$_GET['content']. ".jpg"; ?></p>
			</div>
			<div style="width:100%; height:20%;">
				<p><?php echo "../images/".$_GET['from']. ".jpg"; ?></p>
			</div>
		</div>
        </div>
    </div>

    <div class="container-fluid" style="text-align: center;">
        <form method="GET" name="form1">
            <div class="row p-5">
                <div class="col-sm-5">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner " style="border-style: double;">
                            <div class="carousel-item active">
                                <img src="../images/Image_1.jpg" class="d-block w-100" height="300px" width="300px"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Image_1</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../images/Image_2.jpg" class="d-block w-100" height="300px" width="300px"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Image_2</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../images/Image_3.jpg" class="d-block w-100" height="300px" width="300px"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Image_3</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../images/Image_4.jpg" class="d-block w-100" height="300px" width="300px"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Image_4</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-7" style="text-align: left;">
                    <h5>Step 1: Select the background for your write up.</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi dolore repellat, placeat fuga
                        veniam
                        cum voluptatem nostrum blanditiis illum reprehenderit amet dolores, iusto enim repellendus esse
                        ut
                        quasi laborum. Soluta.</p>
                    <br>
                    <p>
                    <div class="form-group col-md-4">
                        <label for="inputState">Background</label>
                        <select name="back" class="form-control">
                            <option>Image_1</option>
                            <option>Image_2</option>
                            <option>Image_3</option>
                            <option>Image_4</option>
                        </select>
                    </div>
                    </p>
                </div>
            </div>



            <div class="row p-5">
                <div class="col-sm-7" style="text-align: left;">
                    <h5>Step 2: Enter Details.</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi dolore repellat, placeat fuga
                        veniam
                        cum voluptatem nostrum blanditiis illum reprehenderit amet dolores, iusto enim repellendus esse
                        ut
                        quasi laborum. Soluta.</p>

                    <div class="form-group">
                        <label for="formGroupExampleInput">To : </label>
                        <input name="to" type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="To : Favorite Teacher">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Write Up :</label>
                        <input name="content" type="textarea" class="form-control" id="formGroupExampleInput2"
                            placeholder="Your Write Up">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">From : </label>
                        <input name="from" type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="From : XYZ">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Submit">

                </div>
                <div class="col-sm-5">
                    <img src="../images/details.jpg" class="img-fluid img-responsive" height="300px" width="300px"
                        style="border-style: double;">
                </div>
            </div>
            <div class="row p-5">
                <div class="col-sm-5">
                    <img src="../images/here_you_go.png" class="img-fluid img-responsive" height="300px" width="300px"
                        style="border-style: double;">
                </div>
                <div class="col-sm-7" style="text-align: left;">
                    <h5>Step 3: Select the background for your write up.</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi dolore repellat, placeat fuga
                        veniam
                        cum voluptatem nostrum blanditiis illum reprehenderit amet dolores, iusto enim repellendus esse
                        ut
                        quasi laborum. Soluta.</p>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary btn-lg btn-block">Generate My Link</button>
    </div>


    <footer class="text-center mt-5 py-2 bg-dark text-white">
        <p>Copyright &copy; Teacher's Day 2020. All rights reserved.</p>
        <p>Made with &hearts;</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>