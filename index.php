<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>


</head>

<style>
    .container-fluid {
        margin: auto;
        width: 60%;
        bottom: 250px;
        left: 300px;
        position: relative;
        text-align: center;
        color: black;
        
    }


</style>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="bg-image">
        <img src="https://techcrunch.com/wp-content/uploads/2019/02/GettyImages-511824053.jpg" alt="bankimg" height="800px" width="100%" >
    </div>

    <div class="container-fluid" action="config.php">
        <div class="row activity text-center" >
            <div class="col-md act">
                <img src="https://img.icons8.com/cotton/100/000000/groups--v1.png" alt="userimg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color: red;">Create User</button></a>
            </div>

            <div class="col-md act">
                <img src="https://img.icons8.com/nolan/100/refund-2.png" alt="transferimg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color:  red;">Make a Transaction</button></a>
            </div>

            <div class="col-md act">
                <img src="https://img.icons8.com/color/100/000000/activity-history.png" alt="historyimg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color:  red;">Transaction History</button></a>
            </div>
            
        </div>
        
    </div>
      <footer class="text-center" style="color: black;">
            <p>&copy 2021. Made by <b>Sanskar Chouksey</b><br>GRIP TheSparksFoundation.</p>
        </footer>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>