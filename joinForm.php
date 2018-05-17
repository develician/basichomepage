<html>
    <head>
        <?php
            include "head.php";
        ?>
    </head>
    <body>


        <div class="container">
            <div class="jumbotron">
                <h2>Basic Home Page</h2>
            </div>
            <?php
            include "nav.php";
            ?>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="jumbotron">
                    <p>JOIN</p>
                </div>
                <form name="joinForm" action="joinAction.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="userID" class="form-control" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <input type="password" name="userPassword" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="text" name="userName" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="userEmail" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">JOIN</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </body>
</html>