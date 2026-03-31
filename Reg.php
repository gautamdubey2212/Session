<?php
include "connectivity.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $Name =$_POST["name"];
    $Email =$_POST["email"];
   $Password = password_hash($_POST["password"], PASSWORD_DEFAULT);

   $sql = $conn->prepare("Insert into Reg(name,Email,Password) values(?,?,?)");
   $sql->bind_param('sss',$Name,$Email,$Password);

   if($sql->execute()){
    header("Location:Login.php");
   }else {
    echo "Unable to insert credentials";
   };
};
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <form method="POST">
            <div
                class="container mt-5 p-5 rounded shadow border col-5"
            >
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder=""
                    />
                    <label for="name">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder=""
                    />
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="password"
                        id="password"
                        placeholder=""
                    />
                    <label for="password">Password</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
                
            </div>
            
        </form>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
