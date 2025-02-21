<?php
       $result = Main();
       
?>

<div class="container pb-2">
        <h1 class="text-center display-6 py-3">Utazásaink</h1>
        
        <table class="table table-bordered">
            <tr>
                <th>Uticél</th>
                <th>Utazás neve</th>
                <th>Időtartam</th>
                <th>Ár</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td>
                <?php echo $row["uticel"];?>                   
                </td>
                <td>
                <a href="./?p=uticel.php"><?php echo $row["megnevezes"];?></a>
                </td>
                <td>
                <?php echo $row["idotartam"];?>
                </td>

              <td>
                    <?php echo $row["ar"];?> Ft / fő
              </td>
                       
              <?php } ?>      

            </tr>


        </table>
       
    </div>

    </div>