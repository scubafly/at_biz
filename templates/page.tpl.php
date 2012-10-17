<?php // AT Biz ?>
<div id="page-wrapper">
  <div<?php print $page_attributes; ?>>

    <?php if($page['menu_bar_top']): ?>
      <div id="menu-top-wrapper">
        <div class="container clearfix">
          <?php print render($page['menu_bar_top']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="header-wrapper">
      <div class="container clearfix">
        <header<?php print $header_attributes; ?>>

          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <!-- start: Branding -->
            <div<?php print $branding_attributes; ?>>

              <?php if ($site_logo): ?>
                <div id="logo">
                  <?php print $site_logo; ?>
                </div>
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <!-- start: Site name and Slogan hgroup -->
                <hgroup<?php print $hgroup_attributes; ?>>

                  <?php if ($site_name): ?>
                    <h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                  <?php endif; ?>

                  <?php if ($site_slogan): ?>
                    <h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                  <?php endif; ?>

                </hgroup><!-- /end #name-and-slogan -->
              <?php endif; ?>

            </div><!-- /end #branding -->
          <?php endif; ?>

          <!-- region: Header -->
          <?php print render($page['header']); ?>

        </header>
      </div>
    </div>

    <?php if ($menubar = render($page['menu_bar'])): ?>
      <div id="nav-wrapper">
        <div class="container clearfix">
          <?php print $menubar; ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="secondary-content-wrapper">
      <div class="image-overlay">
        <div class="container clearfix">

          <?php if ($page['secondary_content']): ?>
            <?php print render($page['secondary_content']); ?>
          <?php endif; ?>

          <!-- Three column 3x33 Gpanel -->
          <?php if (
            $page['three_33_top'] ||
            $page['three_33_first'] ||
            $page['three_33_second'] ||
            $page['three_33_third'] ||
            $page['three_33_bottom']
            ): ?>
            <div class="at-panel gpanel panel-display three-3x33 clearfix">
              <?php print render($page['three_33_top']); ?>
              <?php print render($page['three_33_first']); ?>
              <?php print render($page['three_33_second']); ?>
              <?php print render($page['three_33_third']); ?>
              <?php print render($page['three_33_bottom']); ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb-wrapper">
        <div class="container">
          <?php print $breadcrumb; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($messages || $page['help']): ?>
      <div id="messages-help-wrapper">
        <div class="container clearfix">
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="content-wrapper">
      <div class="container">

        <?php if (
          $page['two_50_top'] ||
          $page['two_50_first'] ||
          $page['two_50_second'] ||
          $page['two_50_bottom']
          ): ?>
          <!-- Two column 2x50 -->
          <div class="at-panel gpanel panel-display two-50 clearfix">
            <?php print render($page['two_50_top']); ?>
            <?php print render($page['two_50_first']); ?>
            <?php print render($page['two_50_second']); ?>
            <?php print render($page['two_50_bottom']); ?>
          </div>
        <?php endif; ?>

        <div id="columns">
          <div class="columns-inner clearfix">
            <div id="content-column">
              <div class="content-inner">
  
                <?php print render($page['highlighted']); ?>
  
                <<?php print $tag; ?> id="main-content">
  
                  <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
                    <header<?php print $content_header_attributes; ?>>
                      <?php print render($title_prefix); ?>
                      <?php if ($title): ?>
                        <h1 id="page-title"><?php print $title; ?></h1>
                      <?php endif; ?>
                      <?php print render($title_suffix); ?>
  
                      <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                        <div id="tasks" class="clearfix">
                          <?php if ($primary_local_tasks): ?>
                            <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                          <?php endif; ?>
                          <?php if ($secondary_local_tasks): ?>
                            <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                          <?php endif; ?>
                          <?php if ($action_links = render($action_links)): ?>
                            <ul class="action-links"><?php print $action_links; ?></ul>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </header>
                  <?php endif; ?>
  
                  <!-- region: Main Content -->
                  <?php if ($content = render($page['content'])): ?>
                    <div id="content">
                      <?php print $content; ?>
                    </div>
                  <?php endif; ?>
  
                  <?php print $feed_icons; ?>
  
                </<?php print $tag; ?>>
  
                <?php print render($page['content_aside']); ?>

              </div>
            </div>
  
            <!-- regions: Sidebar first and Sidebar second -->
            <?php $sidebar_first = render($page['sidebar_first']); print $sidebar_first; ?>
            <?php $sidebar_second = render($page['sidebar_second']); print $sidebar_second; ?>
  
          </div>
        </div>
      </div>
    </div>

    <!-- Five column Gpanel -->
    <?php if (
      $page['five_first'] ||
      $page['five_second'] ||
      $page['five_third'] ||
      $page['five_fourth'] ||
      $page['five_fifth']
    ): ?>
      <div id="quadpanel-wrapper">
        <div class="container clearfix">
          <div id="quad-panel" class="at-panel gpanel panel-display five-5x20 clearfix">
            <div class="panel-row row-1 clearfix">
              <?php print render($page['five_first']); ?>
              <?php print render($page['five_second']); ?>
            </div>
            <div class="panel-row row-2 clearfix">
              <?php print render($page['five_third']); ?>
              <?php print render($page['five_fourth']); ?>
              <?php print render($page['five_fifth']); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="image-overlay">
          <div class="container clearfix">
            <?php print render($page['tertiary_content']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['footer'] || $page['four_first'] || $page['four_second'] || $page['four_third'] || $page['four_fourth']): ?>
      <div id="footer-wrapper">
        <div class="container clearfix">
          <footer<?php print $footer_attributes; ?>>
            <!-- Four column Gpanel (Quad) -->
            <?php if ($page['four_first'] || $page['four_second'] || $page['four_third'] || $page['four_fourth']): ?>
              <div class="at-panel gpanel panel-display four-4x25 clearfix">
                <div class="panel-row row-1 clearfix">
                  <?php print render($page['four_first']); ?>
                  <?php print render($page['four_second']); ?>
                </div>
                <div class="panel-row row-2 clearfix">
                  <?php print render($page['four_third']); ?>
                  <?php print render($page['four_fourth']); ?>
                </div>
              </div>
            <?php endif; ?>
            <?php print render($page['footer']); ?>
          </footer>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>
