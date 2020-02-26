

<!-- Affichage des informations sur les vehicules-->

<div class="container">

    <table class="table table-bordered table-striped table-condensed">
      <caption>
</br>
      </caption>
      <thead>
        <tr>
          <th>Repas</th>
          <th>Descriptions</th>
          <th>Photos</th>
          <th>Tarifs</th>

        </tr>
      </thead>
      <tbody>
<?php
    $i = 0;
    while($i < count($iphonemodelBL))
    {
 ?>
        <tr>
            <form action="listerProd.php" method="post">
              <td><b><?php echo $iphonemodelBL[$i]["nom"]?></b></td>
              <td><?php echo $iphonemodelBL[$i]["description"]?></td>
              <td><img src="<?php echo $iphonemodelBL[$i]["image"]?>" alt=""></td>
              <td><?php echo $iphonemodelBL[$i]["prix"]?></td>

            </form>
        </tr>
<?php
        $i = $i + 1;
     }
?>
       </tbody>
     </table>
  </div>
