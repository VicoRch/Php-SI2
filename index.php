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


    <!--section card-->

    <div class="cardContainer">

      <?php
      /** READ CRUD
       * @param into $req take database
       * @param into $conn connect database with connection.php
       * @return into $stmt read card
       */

        require_once "connection.php";

        $req = 'SELECT
            `id`,
            `image`,
            `prenom`,
            `nom`,
            `serie`,
            `description`
            FROM
            `card`
            ;';
        $stmt = $conn->prepare($req);
        $stmt->execute();
        while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

       <!-- card-->

        <div class="card">
          <img class="img-card"
          src="<?= $row['image']?>" alt="">
          <h1 class="name-card"></h1>
          <h1 class="title_card"><?=$row["prenom"].' '.$row["nom"]?></h1>
          <h1 class="title_serie"><?=$row["serie"]?></h1>
          <div class="paraDescription_container">
              <p class="paraDescription">
                <?=$row["description"]?>
              </p>
          </div>


            <a href="delete.php?id=<?=$row['id']?>"><img class="img-trash" src="assets/001-trash.svg" alt=""></a>
            <a href="update.php?id=<?=$row['id']?>"><img class="img-pen" src="assets/002-pencil.svg" alt=""></a>
        </div>
        <?php endwhile;
        ?>

    </div>
</body>
</html>
