<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=CFG::bank_name ?></title>

  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <?php require __DIR__ . "/../../parts/sidebar.php" ?>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <?php require __DIR__ . "/../../parts/topbar.php" ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">	

                    <h1>Contact Support</h1>

                    <br>

                    <div class="card">
                        <div class="card-header">
                            <div>Question</div>
                        </div>

                        <div class="card-body">

                            <label for="">Category</label>
                            <select class="form-control" name="" id="">
                                <option value="">Question</option>
                                <option value="">Issue</option>
                                <option value="">Other</option>
                            </select>

                            <label for="">Question</label>
                            <textarea class="clear form-control" name="" id="" cols="30" rows="10"></textarea>

                            <br>

                            <button id="send" class="btn btn-primary">Send</button>

                        </div>
                    </div>

                </div>

            </div>

            <?php require __DIR__ . "/../../parts/footer.php" ?>
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require __DIR__ . "/../../parts/logout.php" ?>

    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="/assets/js/sb-admin-2.min.js"></script>

    <script src="/assets/vendor/chart.js/Chart.min.js"></script>

    <script src="/assets/js/demo/chart-area-demo.js"></script>
    <script src="/assets/js/demo/chart-pie-demo.js"></script>

    <script>
        
        document.querySelector("#send").addEventListener("click", function(){
            alert("We recived your message! \nWe will response very soon.");
            document.querySelector(".clear").value = "";
            document.querySelector("#send").setAttribute("disabled", "true");
        });

    </script>

</body>

</html>
