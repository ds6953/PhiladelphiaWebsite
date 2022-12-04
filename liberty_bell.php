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
        <div class="flex">
            <img class="resize" src="assets/images/libertybell.png" alt="libertybell">
            <p>The Liberty Bell, previously called the State House Bell or Old State House Bell, is an iconic symbol of American independence, located in Philadelphia. Originally placed in the steeple of the Pennsylvania State House (now renamed Independence Hall), the bell today is located across the street in the Liberty Bell Center in Independence National Historical Park. The bell was commissioned in 1752 by the Pennsylvania Provincial Assembly from the London firm of Lester and Pack (known subsequently as the Whitechapel Bell Foundry), and was cast with the lettering "Proclaim LIBERTY Throughout all the Land unto all the Inhabitants Thereof", a Biblical reference from the Book of Leviticus (25:10). The bell first cracked when rung after its arrival in Philadelphia, and was twice recast by local workmen John Pass and John Stow, whose last names appear on the bell. In its early years, the bell was used to summon lawmakers to legislative sessions and to alert citizens about public meetings and proclamations. </p>
        </div>    
    </section>
    
    <section class="characteristics">
        <h3>Characteristics</h3>
        <p>It weighs about 2,080 pounds (943 kg), is 12 feet (3.7 meters) in circumference around the lip, and measures 3 feet (1 meter) from lip to crown. There is an inscription on the bell reads:  Proclaim LIBERTY Throughout all the Land unto all the Inhabitants Thereof Lev. XXV. v X.  By Order of the ASSEMBLY of the Province of PENSYLVANIA for the State House in Philad Pass and Stow Philad MDCCLIII</p>
        <p>Robert Charles dutifully ordered the bell from Thomas Lester of the London bellfounding firm of Lester and Pack (known subsequently as the Whitechapel Bell Foundry) for the sum of £150 13s 8d, (equivalent to £23,928 in 2021) including freight to Philadelphia and insurance. It arrived in Philadelphia in August 1752. Norris wrote to Charles that the bell was in good order, but they had not yet sounded it, as they were building a clock for the State House's tower. The bell was mounted on a stand to test the sound, and at the first strike of the clapper, the bell's rim cracked. The episode would be used to good account in later stories of the bell; in 1893, former President Benjamin Harrison, speaking as the bell passed through Indianapolis, stated, "This old bell was made in England, but it had to be re-cast in America before it was attuned to proclaim the right of self-government and the equal rights of men." Philadelphia authorities tried to return it by ship, but the master of the vessel that had brought it was unable to take it on board.</p>
    
    </section>
    
    <section class="history">
        <h3>History</h3>
        <p>Dissatisfied with the bell, Norris instructed Charles to order a second one, and see if Lester and Pack would take back the first bell and credit the value of the metal towards the bill. In 1754, the Assembly decided to keep both bells; the new one was attached to the tower clock while the old bell was, by vote of the Assembly, devoted "to such Uses as this House may hereafter appoint." The Pass and Stow bell was used to summon the Assembly. One of the earliest documented mentions of the bell's use is in a letter from Benjamin Franklin to Catherine Ray dated October 16, 1755: "Adieu. The Bell rings, and I must go among the Grave ones, and talk Politiks." The bell was rung in 1760 to mark the accession of George III to the throne. In the early 1760s, the Assembly allowed a local church to use the State House for services and the bell to summon worshipers, while the church's building was being constructed. The bell was also used to summon people to public meetings, and in 1772, a group of citizens complained to the Assembly that the bell was being rung too frequently</p>

        <p>Placed on an upper floor of the State House, the bell was rung in the early years of independence on the Fourth of July and on Washington's Birthday, as well as on Election Day to remind voters to hand in their ballots. It also rang to call students at the University of Pennsylvania to their classes at nearby Philosophical Hall. Until 1799, when the state capital was moved to Lancaster, it again rang to summon legislators into session. When Pennsylvania, having no further use for its State House, proposed to tear it down and sell the land for building lots, the City of Philadelphia purchased the land, together with the building, including the bell, for $70,000, equal to $1,117,667 today. In 1828, the city sold the second Lester and Pack bell to St. Augustine's Roman Catholic Church, which was burned down by an anti-Catholic mob in the Philadelphia Nativist Riots of 1844. The remains of the bell were recast; the new bell is now located at Villanova University</p>
    </section>

    <section class="location">
        <h3>Location</h3>
        <img src="assets/images/bellmap.png" alt="Liberty Bell Location">
        <p>The Liberty Bell Center is located at 526 Market Street. Visitors exit from the south end of the building, near Chestnut Street.</p>
    </section>

    <?php include "assets/inc/footer.php"; ?>
</div><!--end of container-->

<?php include "assets/inc/js.php"; ?>
</body>
</html>