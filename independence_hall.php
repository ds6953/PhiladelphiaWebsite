<?php 
    $currentPage = "Independence Hall"; 
    $customCSS ='
    ';     
?>
<!DOCTYPE html>
<html lang="en">

<?php include "assets/inc/head.php"; ?>
  <body>
    <div class="container">
    <?php include "assets/inc/header.php"; ?>
    <?php include "assets/inc/nav.php"; ?>

    <h2><?php echo $currentPage; ?></h2>
    
    <section class="intro">
      <h3>About</h3>
      <img src="assets/images/independancehall.png" alt="independancehall">
      <p></p>
    </section>

    <section class="characteristics">
      <h3>Characteristics</h3>
      <p>Begun in 1732 and finished in 1753, it is a dignified brick structure with a wooden steeple that once held the Liberty Bell.</p>

    </section>

    <section class="history">
      <h3>History</h3>

      <p>Historic civic building in Philadelphia, Pennsylvania in which both the United States Declaration of Independence and the United States Constitution were debated and adopted by America's Founding Fathers. The structure forms the centerpiece of the Independence National Historical Park. The building was completed in 1753 as the Pennsylvania State House and served as the capitol for the Province and Commonwealth of Pennsylvania until the state capital moved to Lancaster in 1799. It was the principal meeting place of the Second Continental Congress from 1775 to 1781 and was the site of the Constitutional Convention in the summer of 1787.</p>
    </section>

    <section class="location">
      <h3>Location:</h3>
      <img>
      <p>Independence Hall is located at 520 Chestnut Street</p>
    </section>
    
    <?php include "assets/inc/footer.php"; ?>  
</div><!--end of container-->

<?php include "assets/inc/js.php"; ?>
</body>
</html>