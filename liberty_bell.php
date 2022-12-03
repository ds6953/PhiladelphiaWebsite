<?php 
    $currentPage = "Liberty Bell"; 
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
      <img src="assets/images/libertybell.png" alt="libertybell">
      <p></p>
    </section>
    
    <section class="characteristics">
        <h3>Characteristics</h3>
        <p>It weighs about 2,080 pounds (943 kg), is 12 feet (3.7 meters) in circumference around the lip, and measures 3 feet (1 meter) from lip to crown.    </p>
    </section>
    
    <section class="history">
        <h3>History</h3>
        <p>The bell was commissioned in 1751 by the Pennsylvania Provincial Assembly from the London firm of Lester and Pack (known subsequently as the Whitechapel Bell Foundry), and was cast with the lettering "Proclaim LIBERTY Throughout all the Land unto all the Inhabitants Thereof", a Biblical reference from the Book of Leviticus (25:10). The bell first cracked when rung after its arrival in Philadelphia, and was twice recast by local workmen John Pass and John Stow, whose last names appear on the bell. In its early years, the bell was used to summon lawmakers to legislative sessions and to alert citizens about public meetings and proclamations. The bell acquired its distinctive large crack some time in the early 19th century—a widespread story claims it cracked while ringing after the death of Chief Justice John Marshall in 1835. The bell became famous after an 1847 short story claimed that an aged bellringer rang it on July 4, 1776, upon hearing of the Second Continental Congress's vote for independence. Although the bell did not ring for independence on that July 4, the tale was widely accepted as fact, even by some historians. Beginning in 1885, the city of Philadelphia, which owns the bell, allowed it to be transported to various expositions and patriotic gatherings. The bell attracted huge crowds wherever it went, additional cracking occurred, and pieces were chipped away by souvenir hunters. The last such journey occurred in 1915, after which the city refused further requests.</p>
    </section>

    <section class="location">
        <h3>Location</h3>
        <img>
        <p>The Liberty Bell Center is located at 526 Market Street. Visitors exit from the south end of the building, near Chestnut Street.</p>
    </section>

    <?php include "assets/inc/footer.php"; ?>
</div><!--end of container-->

<?php include "assets/inc/js.php"; ?>
</body>
</html>