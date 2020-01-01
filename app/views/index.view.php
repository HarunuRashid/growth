<?php
    require 'partials/header.view.php';
?>
<div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">

          
<br>
    <?php foreach($users as $user) : ?>

    <li><?= $user->name; ?></li>

    <?php endforeach ?>

<br>

<h1>Submit your Name:</h1>
    
    <form method="POST" action="names">
    
        <input type="text" name="name" >

        <input type="submit" value="Submit">

    </form>
            </div>
        </div>
    </div>
</div>
    
<?php
    require 'partials/footer.view.php';
?>