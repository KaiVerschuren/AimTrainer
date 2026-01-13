<?php
include 'inc/php/layout.php';

initSession();

top("Trainer");

?>
<div class="trainer">
   <form action="" method="post" class="form-trainer">
      <h1>End of game</h1>
      <div class="form-wrapper">
         <p>Seconds</p>
         <input class="form-input-score-seconds input" type="text" value="" readonly>
         <p>Hits</p>
         <input class="form-input-score-hits input" type="text" value="" readonly>
         <input class="btnPrimary form-button" type="submit" value="Submit as <?= $_SESSION['userName']; ?>">
      </div>
   </form>
   <div class="trainer-menu">
      <h1 class="trainer-menu-title">Trainer Menu</h1>
      <div class="trainer-options">
         <div class="trainer-options-tile">
            <h2>
               Game Mode
            </h2>
            <div class="button-wrapper">
               <div>
                  <p>Hits in 30 seconds</p>
                  <button class="btnPrimary btnStartHits">
                     Start Hits
                  </button>
               </div>
               <div>
                  <p>Seconds for 30 hits</p>
                  <button class="btnSecondary btnStartSeconds">
                     Start Seconds
                  </button>
               </div>
            </div>
         </div>
         <div class="trainer-options-tile">
            <h2>
               Custom Cursor
            </h2>
            <div class="custom-cursor-wrapper">
               <div class="custom-cursor-tile" id="preview1">
                  <div class="cursor-1-preview"></div>
               </div>
               <div class="custom-cursor-tile" id="preview2">
                  <div class="cursor-2-preview"><img class="cursor-img" src="inc/assets/cursor.png" alt=""></div>
               </div>
               <div class="custom-cursor-tile" id="preview3">
                  <div class="cursor-3-preview">Default</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="trainer-counter">25</div>
   <div class="trainer-target" style="top: 23%; left:12%;"></div>
</div>

<?php

bottom();
