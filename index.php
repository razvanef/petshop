<?php    
    // load up your config file
    require_once("/config.php");
     
    require_once(TEMPLATES_PATH . "/header.php");
?>
<header class="container">
    <section class="content">
      <h1>Petshop</h1>
      <p class="sub-title"><strong>Super multe animale</strong> <br /> si super draguteeee!</p>
    </section>
  </header>
  
  
  <footer>
    <div class="toggle-footer">Vezi animalutele</div>
    
    <div id="footer-content">
        <div id="footer-center">
            <div class="lv">
                <div class="round-button"><div class="round-button-circle" id="fatacaine"><a href="#" class="round-button"> </a></div></div>
                <div class="round-button"><div class="round-button-circle" id="fatapisica"><a href="#" class="round-button"> </a></div></div>
                <div class="round-button"><div class="round-button-circle" id="fatapeste"><a href="#" class="round-button"> </a></div></div>
                <div class="round-button"><div class="round-button-circle" id="fatapasare"><a href="#" class="round-button"> </a></div></div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>