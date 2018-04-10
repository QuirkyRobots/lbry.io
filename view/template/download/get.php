<?php Response::setMetaDescription(__('description.get'))  ?>
<?php Response::addMetaImage(Request::getHostAndProto() . '/img/lbry-ui.png') ?>
<?php NavActions::setNavUri('/get') ?>
<?php echo View::render('nav/_header', ['isDark' => false]) ?>
<main class="column-fluid">
  <div class="span7">
    <div class="cover cover-dark cover-dark-grad content content-stretch content-dark">
      <h1><?php echo __('download.for-os', ['%os%' => $osTitle]) ?> <span class="<?php echo $osIcon ?>"></span></h1>
      <?php if ($downloadUrl): ?>
        <p>
          Securely download the LBRY app here, and see what all the fuss is about!
        </p>
        <p>
        </p>
        <div class="text-center">
          <p>
              <?php echo View::Render('download/_downloadButton', ['buttonStyle'=>'alt',])?>
              <div class="meta">
                Like source code? Go <a href="https://github.com/lbryio/lbry-app" class="link-primary">here</a>.<P><P>
              </div>
          </p>
          <div class="meta">
            <img src="https://spee.ch/5a3e08d52dd2d7cb1c63a480b45dea8b4679cf01/lbryget-gif-mastertest.gif" />
          </div>
        </div>
      <?php else: ?>
        <p>{{download.unavailable}}</p>
        <?php echo View::render('mail/_subscribeForm', [
          'tag' => $os,
          'submitLabel' => 'Join List',
          'hideDisclaimer' => true,
          'largeInput' => true,
          'btnClass' => 'btn-alt btn-large',
        ]) ?>
      <?php endif ?>
    </div>
  </div>
  <div class="span5">
    <?php echo View::render('download/_list', ['excludeOs' => $os]) ?>
    <?php echo View::render('download/_social') ?>
  </div>
</main>

<?php echo View::render('nav/_footer') ?>
