<?php
include_once 'assets/include/header.php';
?>

    <main class="main">
      <section class="section">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_sip']; ?></h1>

          <p class="text-center w-800">
            <?php echo $lang['page_sip_text']; ?>
          </p>

        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_about1']; ?>Telefonieren</h2>

          <p class="text-center">
            <?php echo $lang['text_section_about_text1']; ?>
            Telefonieren sie kostenlos zu anderen OWS Nummern, egal wo auf der Welt
          </p>

          <a href="sip-reg.php" class="btn btn-primary"><?php echo $lang['button_about']; ?></a>
        </div>
      </section>


      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_freewifi1']; ?>Videotelefonie</h2>

          <p class="text-center w-800">
            <?php echo $lang['text_section_freewifi_text1']; ?>
            Telefonieren von Angesicht zu Angesicht mit der Videotelefonie.
          </p>


        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_about1']; ?>Fax</h2>

          <p class="text-center">
            <?php echo $lang['text_section_about_text1']; ?>
            Faxe versenden innerhalb des OWS Netzes.
          </p>

          <a href="about.php" class="btn btn-primary"><?php echo $lang['button_about']; ?></a>
        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_freewifi1']; ?>Codecs</h2>

          <p class="text-center w-800">
            <?php echo $lang['text_section_freewifi_text1']; ?>
            Dein Telefon muss einen der folgenden Codecs unterstützen:
alaw
ulaw
g722
g726
ilbc

          </p>


        </div>
      </section>


    </main>

<?php
include_once 'assets/include/footer.php';
?>
