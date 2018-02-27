<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>home page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>

<header class="main">

    <!--section navigation-->
    <nav class="header_main_wrapper">
        <div class="logo_container">
            <a class="link_homePage" href="index.php"><img class="img_logo" src="assets/logo.png" alt=""></a>
        </div>

        <div class="link_container">
            <a class="link_homePage" href="index.php">Accueil</a>
            <a class="link_homePage" href="admin.php">Admin</a>
        </div>
        <a class="create-para" href="create.php"><div class="create-link">
                Ajouter une carte
            </div></a>
        <!--section profile-->
        <div class="profile_container">
            <img class="img-profile" src="assets/IMG_43552.png" alt="photoDeProfileUser">
        </div>
    </nav>
</header>



<div class="principaleContainer">

    <!-- create -->
    <div class="create">
        <h2 class="create_title">Remplir le formulaire</h2>
        <form class="" action="docreate.php" method="post">
            <input type="text" name="image" value="" placeholder="Url de votre image">
            <input type="text" name="prenom" value="" placeholder="Prenom">
            <input type="text" name="nom" value="" placeholder="nom">
            <input type="text" name="serie" value="" placeholder="serie">
            <input type="text" name="description" value="" placeholder="description">
            <input type="submit" name="" value="Ok" placeholder="OK">
        </form>
    </div>
</body>
<script type="text/javascript">
    alert('Veuillez remplir tous les champs.');
</script>
</html>