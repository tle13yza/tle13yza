<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php
       include "navbar.php";
    ?>
    <div class="container col-md-6">

        <h1> Register </h1>

        <form action="reg_insert.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-2">
                    First Name
                </div>
                <div class="col-md-10">
                    <input type="text" name="firstname" class="form-control" />
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Last Name
                </div>
                <div class="col-md-10">
                    <input type="text" name="lastname" class="form-control" />
                </div>
            </div>

            <div class="row pt-2 ">
                <div class="col-md-2">
                    E-mail
                </div>
                <div class="col-md-10">
                    <input type="text" name=" E-mail" class="form-control" />
                </div>

            </div>
            <div class="row  pt-2">
                <div class="col-md-2">
                    Password
                </div>
                <div class="col-md-10">
                    <input type="text" name="Password" class="form-control" />
                </div>

            </div>
            <div class="row  pt-2">
                <div class="col-md-2">
                    Address
                </div>
                <div class="col-md-10">
                    <input type="text" name="Address " class="form-control" />
                </div>
            </div>



            <input type="submit" value="ลงทะเบียน" />
        </form>
    </div>

</body>

</html>