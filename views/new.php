<?php require_once('./views/header.php'); ?>
  <?php if (isset($errors)): ?>
    <h3>Errors:</h3>
      <?php foreach ($errors as $error) : ?>
        <pre><?php echo $error['detail'] ?></pre>
      <?php endforeach; ?>
  <?php endif; ?>
  <form method="post">
    <div class="mb-3">
      <label for="keywords" class="form-label">Keywords*</label>
      <textarea id="keywords" class="form-control" name="keywords"><?php echo isset($_POST['keywords']) ? $_POST['keywords'] : '' ?></textarea>
    </div>

    <div class="mb-3">
      <label>googleId:
        <input class="form-control" type="number" id="googleId" name="googleId" value="<?php echo isset($_POST['googleId']) ? $_POST['googleId'] : '' ?>">
      </label><br>
    </div>
    <div class="mb-3">
      device:
      <label>desktop
        <input type="radio" name="device" value="desktop" <?php echo (isset($_POST['device']) ? $_POST['device'] : '') == 'desktop' ? 'checked' : '' ?>>
      </label>
      <label>mobile
        <input type="radio" name="device" value="mobile" <?php echo (isset($_POST['device']) ? $_POST['device'] : '') == 'mobile' ? 'checked' : '' ?>>
      </label><br>
    </div>
    <div class="mb-3">
      <label>hl
        <input class="form-control" type="text" name="hl" value="<?php echo isset($_POST['hl']) ? $_POST['hl'] : 'en' ?>">
      </label><br>
    </div>
    <div class="mb-3">
      noreask:
      <label>0
        <input type="radio" name="noreask" value="0" <?php echo (isset($_POST['noreask']) ? $_POST['noreask'] : '') == '0' ? 'checked' : '' ?>>
      </label>
      <label>1
        <input type="radio" name="noreask" value="1" <?php echo (isset($_POST['noreask']) ? $_POST['noreask'] : '') == '1' ? 'checked' : '' ?>>
      </label><br>
    </div>
    <input type="submit" value="Create">
  </form>
<?php require_once('./views/footer.php'); ?>
