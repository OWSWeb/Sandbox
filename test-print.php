<?php
include_once 'assets/include/header.php';
?>


    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_signup1']; ?>Drucken</h1>

          <p class="text-center w-800">
            <?php echo $lang['page_signup_text1']; ?>
                Laden sie hier eine PDF Datei hoch die sie ausdrucken moechten.
          </p>

          <form action="sip-reg2.php" method="post" class="form">
            <input type="file" name="username" placeholder="<?php echo $lang['input_username1']; ?>" class="form-field">


            <button type="submit" class="btn btn-primary"><?php echo $lang['button_register1']; ?>Weiter</button>
          </form>
        </div>
      </section>
    </main>

<?php
include_once 'assets/include/footer.php';
?>
