<?php
       $result = All(); 
       $row = mysqli_fetch_array($result);     
?>

<div class="container pb-2">
        <h1 class="text-center display-6 py-3"><?php echo $row["megnevezes"];?></h1>
        <div class="row row-cols-1 row-cols-md-2"> 
            <div class="col">
                
                            <a href="./?p=uticel&&id=<?php echo $row["ID"]; ?>">
                            <img class="img-fluid" src="img/<?php echo $row["ID"]; ?>.jpg" alt="img/<?php echo $row["ID"]; ?>.jpg" title="<?php echo $row["megnevezes"]; ?>"></a>
                        
                            
                        
            </div>
        
    </div>

    </div>
