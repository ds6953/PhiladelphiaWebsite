<?php 
    $currentPage = "Christ Church"; 
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
      <img src="" alt="Christ Church">
      <p></p>
    </section>
    
    <section class="characteristics">
        <h3>Characteristics</h3>
        <p>Christ Church is bordered by a tree-lined brick path, a small park and a cobblestone alley, which provide the perfect setting for this historic treasure. Notably, the tower and steeple made it the tallest building in America until 1856.</p>

    </section>

    <section class="history">
        <h3>History</h3>
        <p> Christ Church was founded in 1695 by members of the Church of England, who built a small wooden church on the site by the next year. In 1700, Evan Evans traveled from Wales to become their rector. he main body of the church was constructed between 1727 and 1744, and the steeple was added in 1754, making it the tallest building in the future United States of America, at 196 feet (60 m).[5] Christ Church is considered one of the nation's most beautiful surviving 18th-century structures, a monument to colonial craftsmanship and a handsome example of Georgian architecture. **Christ Church** is an Episcopal church in the Old City neighborhood of Philadelphia. Founded in 1695 as a parish of the Church of England, it played an integral role in the founding of the Protestant Episcopal Church in the United States.</p>
    </section>
    
    <section class="location">
        <h3>Location</h3>
        <img>
        <p>Christ Church is an Episcopal church in the Old City neighborhood of Philadelphia. It is located in 20 N American St, Philadelphia, PA 19106</p>
    </section>

    <?php include "assets/inc/footer.php"; ?>   
</div><!--end of container-->

<?php include "assets/inc/js.php"; ?>
</body>
</html>