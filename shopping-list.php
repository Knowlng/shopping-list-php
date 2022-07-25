<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping list</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <!-- Hard: Sukurti pirkinių sąrašą taip, kad galėtumėm iš jo "ištrinti" pirkinius. -->
</head>
<body>
    <div class="container">
        <h1 class="mt-4 text-center">Shopping List</h1>
        <?php 

            if(isset($_GET['ideti'])) {
            
            }
        ?>
        <p class="mb-0">Kokią prekę dėsime į krepšelį?</p>
        <form method="GET" action="shopping-list.php">
            <input name="item" class="w-100">
            <button name="ideti" class="btn btn-primary" type="submit">Įdėti</button>
        </form>
    </div>  
</body>
</html>