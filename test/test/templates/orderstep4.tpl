<h2>Утверждение</h2>
<!-- </legend> -->
<form method="post" action="editus.php?do=orderstep5">
  <div class="entry-content">

    <!-- PDF VIEVER -->
    <div class="iframe-container">
      <h3>Макет блока</h2>
      <iframe src="/test/showpdf/web/viewer.html?file=<?php echo $block_path; ?>" allow="fullscreen" width="100%" height="1000"></iframe>
    </div>
    <div class="iframe-container">
      <h3>Макет обложки</h2>
      <iframe src="/test/showpdf/web/viewer.html?file=<?php echo $cover_path; ?>" allow="fullscreen" width="100%" height="500"></iframe>
    </div>


    <table>
      <tr>
        <td>Готовый к печати макет блока:</td>
        <td><a href="#">скачать</a></td>
      </tr>
      <tr>
        <td>Готовый к печати макет обложки:</td>
        <td><a href="#">скачать</a></td>
      </tr>
    </table>
    <div class="entry-content">
      <div id="os3_offer_text" style="display: none; max-width:100%; background:#FFFFFF; margin:100px; padding:30px;">
        <div style="overflow: hidden;"><?php echo Settings::getsetting('offerizd'); ?></div>
        <p><a href="#" id="os3_offer_yes" class="os3_offer_close"><?php echo _OS3_OFFERCONF; ?></a><a href="#" style="margin-left: 30px;" id="os3_offer_close" class="os3_offer_close"><?php echo _OS3_AGREEMENT_CLOSE; ?></a></p>
      </div>
      <input id="os4_offer" type="checkbox" /><a id="os3_offer_lab" href="#"> <?php echo _OS3_OFFERCONF; ?></a>
    </div>

  </div> <!-- entry-content -->
  <input id="pay-btn" class="red button" type="submit" value="Оплатить" disabled>
</form>