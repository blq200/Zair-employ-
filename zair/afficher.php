    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <!-------------------------Style Sheet----------------------->
        <link rel="stylesheet" href="style.css">
    <!-------------------------Font awsome----------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-------------------------LINK:Jquery----------------------->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
    <h1 style="text-align:center; color:rgb(185, 174, 72);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:2.3em;">Gestion d'employes</h1>

    <!-----Search form----->
  <form  method="POST"  >
    <input name="search" type="search" id="search" class="form-control" placeholder="Search">
        </div>
        <button type="button" class="btn btn-dark" id="btnsearch">
        <i class="fa-solid fa-magnifying-glass" id="searchicon"></i>
        </button>
        </div>
  </form>
        <!-- <button  type="submit" id="btn1"><a href="search.php"> Search</a></button> -->
        <BR><BR>
    <!-- Tableau -->
    <table id="tableau" border =1 width="70%">
    <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance </th>
                    <th>Département</th>
                    <th>Salaire</i></th>
                    <th>Fonction</th>
                    <th>Photo <i class="fa-solid fa-image"></i></th>
                    <th>Supprimer <i class="fa-solid fa-trash"></i></th>
                    <th>Modifier<i class="fa-solid fa-pen-to-square"></i></th>
                </tr>
    </thead>
    <tbody id="tBody">
      <tr>

      </tr>
    </tbody>
        
    <?php
        // Select information from table
    require 'connexion.php';
    $request ="SELECT * from employe1 ";
    $query =mysqli_query($conx,$request);
    while($rows=mysqli_fetch_assoc($query)){
        $id= $rows['id'];
            echo "<tr>;
              <td>".$rows['matricule']."</td>
              <td>".$rows['nom']."</td>
              <td>".$rows['prénom']."</td>
              <td>".$rows['date']."</td>
              <td>".$rows['département']."</td>
              <td>".$rows['salaire']."</td>
              <td>".$rows['fonction']."</td>
              <td> <img src=image/".$rows['image']."  width='50px'/></td>
              
            <td><a href='delete.php?id=".$id."'>Supprimer</a></td>
        
            <td><a href='index.php?id=".$id."'>Modifier</a></td>
            </tr>";
    }

    ?>
    </table>
    <button id="ajouter" type="submit" name="ajouter" class="btn btn-primary mt-3" ><a href="index.php">Ajouter </a><i class="fa-solid fa-plus" style="color:black;"></i></button>
   <!------------------Search------------------>
    <script>
     $(document).ready(function(){                                   
    $("#search").on("keyup",function(){
    var value = $(this).val().toLowerCase();

    $("#tBody tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1  )
    });
    
   } );

});

    </script>
    
    </body>
    </html>