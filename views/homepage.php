<?php $title = "Nathan l'entrepreneur - Site officiel"; ?>

<?php ob_start(); ?>

<div class="banner">
  <?php require("templates/includes/header.php"); ?>
  <div class="content">
    <div class="left-block">
      <h1>Service d'abonnements de streaming</h1>
      <p>Nous vous proposons des services de streaming tels que <em style="color:red;">Netflix</em>, <em style="color:white">Prime video</em> et autres.</p>
      <a href="#subscriptions">Voir nos abonnements</a>
    </div>
    <div class="right-block">
      <!-- Bloc de droite vide pour l'instant -->
    </div>
  </div>
</div>
<section>
  <h1 id="subscriptions" style="text-align:center;font-size:2.3em;">Nos abonnements</h1>
  <p style="text-align: center;">Nous vous proposons une large gamme d'abonnements, à des prix abordable.</p>

  <article>
    <div class="netflix-subscription">
      <h1 style="color:red;font-size: 2.5em;text-align:center;">Netflix</h1>
      <p style="text-align: center;">Nos abonnements Netflix.</p>

      <table class="styled-table">
        <tr>
          <th>Durée</th>
          <th>Prix</th>
          <th>Qualité vidéo</th>
        </tr>
        <?php foreach ($products as $product) : ?>
          <?php if ($product->title === "Netflix") : ?>
            <tr>
              <td class="vertical-cell" style="font-weight: bold;"><?= htmlspecialchars($product->subscriptionDuration); ?></td>
              <td class="vertical-cell"><?= htmlspecialchars($product->subscriptionPrice); ?></td>
              <td class="vertical-cell" style="color:green;"><?= htmlspecialchars($product->videoQuality); ?></td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="prime-video-container">
      <h1 style="color:red;font-size: 2.5em;text-align:center;"><em style="color:aqua;font-style:normal;">Prime</em> <em style="color:black;">Video</em></h1>
      <p style="text-align: center;">Nos abonnements Prime video.</p>

      <table class="styled-table">
        <tr>
          <th>Durée</th>
          <th>Prix</th>
          <th>Qualité vidéo</th>
        </tr>
        <?php foreach ($products as $product) : ?>
          <?php if ($product->title === "Prime-Video") : ?>
            <tr>
              <td class="vertical-cell" style="font-weight: bold;"><?= htmlspecialchars($product->subscriptionDuration); ?></td>
              <td class="vertical-cell"><?= htmlspecialchars($product->subscriptionPrice); ?></td>
              <td class="vertical-cell" style="color:green;"><?= htmlspecialchars($product->videoQuality); ?></td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </table>
    </div>
  </article>
</section>

<?php $content = ob_get_clean(); ?>
<?php require("templates/layout.php"); ?>