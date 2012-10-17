<?php
  hide($content['comments']);
  hide($content['links']);
?>
<?php if ($page): ?>
  <article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="article-inner">
      <?php print $unpublished; ?>
      <?php if ($title && !$page): ?>
        <header>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $title_attributes; ?>>
              <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
            </h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        </header>
      <?php endif; ?>
      <div<?php print $content_attributes; ?>>
      <?php print render($content); ?>
      </div>
    </div> <!-- inner -->
  </article>
<?php endif; ?>
<?php if (!$page): ?>
  <?php if ($title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1<?php print $title_attributes; ?>>
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>
  <div<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>
<?php endif; ?>
