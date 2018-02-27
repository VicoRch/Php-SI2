<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>home page</title>
  <link rel="stylesheet" href="css/admin.css">
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

<div class="principale-container">

    <div class="table">
        <h1 class="create_title">liste des cartes</h1>

        <table>

            <thead>
                <tr>
                    <th>Nom Prénom</th>
                    <th>Série</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

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

                <td><?=$row["prenom"].' '.$row["nom"]?></td>
                <td><?=$row["serie"]?></td>
                <td><?=$row["description"]?></td>

                <td><a href="update.php?id=<?=$row['id']?>">Modifier</a>
                    <a href="delete.php?id=<?=$row['id']?>">Supprimer</a></td>

            </tbody>
            <?php endwhile;
            ?>
        </table>

    </div>

</div>

</body>
  </html>
