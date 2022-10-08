<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
            text-align: center;
        }
        .page-header h2{
            margin-top: 0;
        }
        table {
            margin-right: 15px;
            text-align: center;
        }
    </style>
    </head>

    <body>
    <div id="container" class="wrapper">
            
            <form action="verification.php" method="POST">
                <h1 class="page-header clearfix">LOGIN</h1>
                
                <label class="pull-center"><b>Usuario</b></label>
                <input type="text" placeholder="Usuario" name="username" required class='table'>

                <br>

                <label class="pull-center"><b>Clave</b></label>
                <input type="password" placeholder="Clave" name="password" required class='table'>

                <br>

                <input type="submit" id='submit' value='Acesptar' class="btn btn-success pull-center" >
                
            </form>
        </div>


        <?php 
        // conexion
        require_once "config.php";

        $sql = "SELECT COUNT(id) FROM employees where name = ? and salary = ? ;";

        
        ?>
    </body>
</html>