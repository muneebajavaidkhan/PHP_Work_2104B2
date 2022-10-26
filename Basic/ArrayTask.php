<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <?php
            $Images = ['img.png', 'img1.png', 'img2.png'];

            for ($i = 0; $i < 3; $i++) { ?>

                <div class="col-lg-4">
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="<?= $Images[$i] ?>" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                </div>
                
            <?php }
            ?>
            
        </div>
    </div>
</body>
</html>