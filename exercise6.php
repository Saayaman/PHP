<!-- conditional statements to control css -->

<!-- // 0 is false and 1 is true -->
<?php $member = 0; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Showing Member or non-member</title>
  </head>
  <body>

    <div id = wrapper>
    <?php if ($member): ?>
      <section class="member">
        This will hide if member=true;
      </section>
    <?php endif; ?>
    <?php if(!$member): ?>
      <section class="non-member">
        This part is wrapped up in PHP. it will not show if
        member = true;
      </section>
    <?php endif; ?>
    </div>

  </body>
</html>
