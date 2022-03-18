    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZAIR</title>
        <!-----------------Bootstrap:css----------------------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-------------------------Style Sheet----------------------->
        <link rel="stylesheet" href="style.css">
        <!-------------------------Font awsome----------------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    </head>
    <body>
        <?php
        require 'connexion.php';
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql="SELECT * from employe1 where id='$id'";
            $q=mysqli_query($conx,$sql);
            $rows=mysqli_fetch_assoc($q);
            $matricule=$rows['matricule'];
            $nom=$rows['nom'];
            $prénom=$rows['prénom'];
            $date=$rows['date'];
            $département=$rows['département'];
            $salaire=$rows['salaire'];
            $fonction=$rows['fonction'];
            $image=$rows['image'];
        }
        ?>
        <h1 style="color: rgb(185, 174, 72); text-align:center;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:2.3em;">ZAIR COMPANY</h1>
        <div class="input-group">
        <div class="form-outline">
        <!-----------------------------Form----------------------------------->
        <form id="form" method="POST" action="pme.php?<?php if(isset($_GET['id'])){echo "id=update";} ?>" enctype="multipart/form-data" style=" display: block; margin-left: auto;margin-right: auto;" >
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
        <!-----Matricule----->
            <input type="text" name="matricule" placeholder="Matricule" value="<?php if(isset($_GET['id'])){
            echo $matricule;
        } ?>">
            <br><br>
        <!-----Nom----->
            <input type="text" name="nom" placeholder="Nom" value="<?php if(isset($_GET['id'])){
            echo $nom;
        } ?>">
            <br><br>
        <!-----Prénom----->
            <input type="text" name="prénom" placeholder="Prénom" value="<?php if(isset($_GET['id'])){
            echo $prénom;
        } ?>">
            <br><br>
        <!-----Date de naissance----->
            <input type="date" id="date" name="date" placeholder="Date de naissance" value="<?php if(isset($_GET['id'])){
            echo $date;
        } ?>">
            <br><br>
        <!-----Département----->
            <input type="text" name="département" placeholder="Département" value="<?php if(isset($_GET['id'])){
            echo $département;
        } ?>">
            <br><br>
        <!-----Salaire----->
            <input type="number" name="salaire" placeholder="Salaire" value="<?php if(isset($_GET['id'])){
            echo $salaire;
        } ?>">
            <br><br>
        <!-----Fonction----->
            <input type="text" name="fonction" placeholder="Fonction" value="<?php if(isset($_GET['id'])){
            echo $fonction;
        } ?>">
            <br><br>
        <!-----Photo----->
            <input type="file"  name="image"  />
            <img src="" />
            <!-- <input type="url" name="image" id="img" placeholder="Choisir une image" value="<?php //if(isset($_GET['id'])){
           // echo $image;} ?>"> -->
        <!-----Modifierbtn----->
            <button type="submit" id="btn2"><a href="pme.php"></a>
                <?php
                if(isset($_GET['id'])){
                    echo "Modifier";
                }
                else{
                    echo "Entrer";
                }
                ?>
            </button>
            <a id="btn3" href="afficher.php">Envoyer</a>

        </form>
        <!----------------------Bootstrap:javascript-------------------------------------->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>