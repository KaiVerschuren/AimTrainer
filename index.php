<?php
include 'inc/php/layout.php';

top("Trainer");

?>
<div class="trainer">
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
                  <button class="btnPrimary">
                     Start
                  </button>
               </div>
               <div>
                  <p>Seconds for 30 hits</p>
                  <button class="btnSecondary">
                     Start
                  </button>
               </div>
            </div>
         </div>
         <div class="trainer-options-tile">
            <h2>
               Custom Cursor
            </h2>
            <div class="custom-cursor-wrapper">
               <div class="custom-cursor-tile">
                  <div class="cursor-1-preview"></div>
               </div>
               <div class="custom-cursor-tile">
                  <div class="cursor-2-preview">+</div>
               </div>
               <div class="custom-cursor-tile">
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
