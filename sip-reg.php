<?php
include_once 'assets/include/header.php';
?>


    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_signup1']; ?>Telefonnummer</h1>

          <p class="text-center w-800">
            <?php echo $lang['page_signup_text1']; ?>
            Waehlen sie hier wie viele zusammenhaengende Telefonnumern generiert werden sollen.
            Sie koenne 1-10 Rufnummern erhalten.
          </p>

          <form action="sip-reg2.php" method="post" class="form">
            <input type="number" name="username" placeholder="<?php echo $lang['input_username1']; ?>" class="form-field">


            <button type="submit" class="btn btn-primary"><?php echo $lang['button_register1']; ?>Weiter</button>
          </form>
        </div>
      </section>
    </main>

<?php
include_once 'assets/include/footer.php';
?>
