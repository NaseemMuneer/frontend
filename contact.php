<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Title -->
    <title> Contact Us</title>
</head>

<body>
    <?php include_once "header.php";?>

    <div class="col-md-10 col-lg-8 mx-auto text-center">
        <div class="page-header-content"><br><br>
            <h1>Complete the form to contact us</h1>
        </div>
    </div>
    <hr><br><br>
    <!-- Contact page -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-1 mx-auto">
                    <h4 class="mb-4 mb-lg-5">fill the form</h4>
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="#">Name <span>*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" aria-label="name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="#">Email<span>*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" aria-label="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="#">Mobile No<span>*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" aria-label="contact number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="#">Message<span>*</span></label>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea rows="4" class="form-control" aria-label="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-right">
                            <a href="#" class="btn btn-outlined-pressed"
                                style="opacity: 1; color: white; transform: translateY(0px);background:linear-gradient(#449d97 0%, #2a4e68 100%); min-height: 42px;">Send
                                Message</a>
                            <br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Custom scrit -->
    <script src="assets/js/scripts.js"></script>
</body>
<?php  include_once "footer.php";?>

</html>