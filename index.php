<?php
  require 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shadabzone</title>
  <?php require 'includes/header.php'; ?>
</head>
<body onload="onLoad()">
  <!-- navbar + sidebar -->
  <?php require 'includes/navbar.php'; ?>
<div class="app">

  <main class="main-content">
 	<?php 
 		$user_prj = getProject_of_admin_uses_By_Role("1");
    	foreach ($user_prj as $key => $row) {
    		?>
		 <a href="view_project<?= SITE_FILE_EXTENSION ?>?v=<?= $row['project_code'] ?>" title="<?= $row['title_of_prj'] ?>">
            <div class="video-item">
              <div class="video-thumbnail" style="background-image: url(<?= $row['prj_img'] ?>);">
              </div>
              <div class="video-footer">
                <div class="avatar">
                  <img src="<?= $row['picture_link'] ?>" alt="<?= $row['title_of_prj'] ?>">
                </div>
                <div class="video-text-content">
                  <h3 class="video-title"><?= $row['title_of_prj'] ?></h3>
                  <div class="video-description">
                    <div class="author">
                      <p class="author-name"><?= $row['Name'] ?></p>
                     <?php 
                      if ($row['verified_by_shadabzone']) {
                        ?>
                        <div class="icon">
                          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                            <g class="style-scope yt-icon">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10 S17.52,2,12,2z M9.92,17.93l-4.95-4.95l2.05-2.05l2.9,2.9l7.35-7.35l2.05,2.05L9.92,17.93z" class="style-scope yt-icon"></path>
                            </g>
                          </svg>
                        </div>
                        <?php
                      }

                      ?>
                    </div>
                    <div class="video-meta">
                      <span class="video-views"><?= number_format_short($row['views_count']) ?> views</span>
                      <span class="separator-dot">•</span>
                      <span class="video-upload-time"><?= timeAgo($row['prj_added_on']) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </a>
    		<?php
    	}
      ?>
  </main>


  <div style="margin-top: 10px;">
  	<?php 
  		$admin_prj = getProject_of_admin_uses_By_Role("0");
  		if (!empty($admin_prj)) {
  			?>
		<hr style="margin-top: 30px;border: 2px solid var(--selected-background-color);background-color: var(--selected-background-color)">
		 <h5 class="main-content-title">Latest From SHADABZONE</h5>
		   <main class="main-content main-attr" id="main_c_mv">
  	<?php
    	foreach ($admin_prj as $key => $row) {
    ?>
          <a href="view_project<?= SITE_FILE_EXTENSION ?>?v=<?= $row['project_code'] ?>" title="$row['title_of_prj']">
            <div class="video-item item_video_mb">
              <div class="video-thumbnail" title="<?= $row['title_of_prj'] ?>" style="background-image: url(<?= $row['prj_img'] ?>);" >
              </div>
              <div class="video-footer">
                <!-- <div class="avatar">
                  <img src="<?= $row['picture_link'] ?>" alt="<?= $row['title_of_prj'] ?>">
                </div> -->
                <div class="video-text-content">
                  <h3 class="video-title"><?= $row['title_of_prj'] ?></h3>
                  <div class="video-description">
                    <div class="video-meta">
                      <span class="video-views"><?= number_format_short($row['views_count']) ?> views</span>
                      <span class="separator-dot">•</span>
                      <span class="video-upload-time"><?= timeAgo($row['prj_added_on']) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </a>
      <?php
    }
}
  ?>
  </main>
  </div>
</div>

</body>
</html>