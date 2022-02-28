<?php

//costante magica 
include __DIR__ ."/database/db-dischi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Document</title>
</head>

<body>

    <header class="container-fluid"></header>



    <main class="container-fluid">
        <div class="container container-cards d-flex flex-wrap pt-5">

           
            <?php

            foreach ($disks as $disk) { ?>
                <div class="card text-center mb-3">
                    <div class="img">

                        <img class="img-fluid" src="<?php echo $disk['poster'] ?>">
                    </div>
                    <div class='text'>

                        <h2 class='text-uppercase fw-bold fs-6 mt-3'> <?php echo $disk['title'] ?></h2>

                        <p class='name-year'> <?php echo $disk['author'] ?><br>
                        <?php echo $disk['year'] ?></p>
                    </div>
                </div>
            <?php } ?>
        

        </div>
    </main>



</body>

</html>
