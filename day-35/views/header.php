<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafsin-Ahmed</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">My Project</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>

                    <ul class="dropdown-menu">
                        <?php foreach ($categories as $category){ ?>
                        <li><a href="" class="dropdown-item"><?php echo $category['name'];?></a></li>
                        <?php }?>
                    </ul>
                    
                </li>
                <li><a href="" class="nav-link">Full Name</a></li>
                <li><a href="" class="nav-link">Calculator</a></li>
                <li><a href="" class="nav-link">Series</a></li>
            </ul>
        </div>
    </nav>