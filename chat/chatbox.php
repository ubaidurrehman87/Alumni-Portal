<?php
include("config.php");
if(isset($_SESSION['user'])){
?>
 <div class="msgs" style="
    padding: 10px;
    width: 1;
    max-width: 1090px;
    height: 70%;
    background: #f7f2f2;
    text-align: 20px;
    text-shadow: 0.2px solid;
    text-shadow: white;
    border :1px solid;
    border-radius: 10px;
    border-color: #abb5b7;
        height: 340px;
    /* text-decoration-line: overline; */
    text-align: left;
">
  <?php include("msgs.php");?>
  <br>
  <br>
 </div>
 <form id="msg_form">
  <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Type Message Here!!!" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-radius: 10px;width: 800px;margin-top: 10px;margin: center;margin-left: 0px;>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" style="
        margin-top: 15px;
    margin-left: 20px;">Send</button>
  </div>
</div>

 </form>
<?php 
}
?>