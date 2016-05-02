    <?php   
        //Calls Common.php
        include "Common.php";
    ?>
    <!--Calls Header from Common.php-->
    <?=$head;?>

    <!--Calls Navigation Bar from Common.php-->
    <?=$NavigationBar;?>
   <?=$GroceryNavBar;?>
    <div class="right_div">
        <div class="innerproductsdiv" onload="giveMeATable()">
            <br>
                  
                <p></p>
                <button value="Clear all" onclick="clearHistory();">Clear Your Order!</button>
                
                <p id="Testy"><h2 onclick="giveMeATable()">Your Order Information</h2><div id="Shopping"></div></p>
                <h1 id="Total">Your total is...</h1>

                    
        
            <!--Calls Footer from Common.php-->    
        </div>
    </div>
    
</div>
<!--<?=$footer;?>-->
        <!--Calls html closer from Common.php-->
        <?=$htmlcloser?>