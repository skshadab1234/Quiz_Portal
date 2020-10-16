<?php require 'session.php';

// echo "<pre>";
// print_r(getProject_details_page_data($_GET['v'])['project_title_slug']);
// die();

if (empty($_GET['v']) || getProject_details_page_data($_GET['v'])['project_code'] != $_GET['v']) {
  header("location: index.php");
}else{
	$row = getProject_details_page_data($_GET['v']);
}


$project_date = getProject_details_page_data($_GET['v'])['prj_added_on'];



$my_date = date('d M Y', strtotime($project_date));
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'includes/header.php'; ?>
  <title><?= $row['title_of_prj'] ?></title>
<!------ Include the above in your HEAD tag ---------->
<style>

</style>
</head>
<body style="display: none">
<?php require 'includes/navbar.php'; ?>
<div class="app" id="app" >
    <div class="container-fluid" id="my_mobile_view" style="margin: 0;padding: 0">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8" >
        <img src="<?= $row['prj_img'] ?>" id="my_mobile_view_img">
        <div class="project_footer">
            <div class="top_title">
                <h5 style="letter-spacing: .7px;font-family: system-ui;font-weight: 500;font-size: var(--font-size-main-content-title);"><?= $row['title_of_prj']  ?></h5> 
                <div class="row" style="margin-top: 13px;">
                  <div class="col-3" >
                    <h6 id="final_view" style="font-weight: lighter;line-height: 20px;color: var(--dark-mode-text-color);font-size: 0.8rem;font-weight: 100"><?= number_format($row['views_count'])?> views </h6>
                  </div>
                  <div class="col-8" style="text-align: right;">
                    <div class="social_like_dislike_all">
                      <div class="like_dislike_ratio">
                      	<h6><a href="javascript:void(0)" id="like_the_project"><i class="fa fa-thumbs-up"></i></a><span id="total_likes" data-id="<?= number_format_short($row['likes']) ?>"><?= number_format_short($row['likes']) ?></span></h6>
                      	<h6><a href="javascript:void(0)" id="dislike_the_project"><i class="fa fa-thumbs-down"></i></a><span id="total_dislikes" data-id="<?= number_format_short($row['dislikes']) ?>"><?= number_format_short($row['dislikes']) ?></span></h6>
                      </div> 
                      <a href=""><i class="fa fa-download"></i></a>
                      <a href=""><i class="fa fa-share-alt"></i></a>
                    </div>
                  </div>    
                </div> 
            </div>
        <hr style="margin:10px 0;border: 1px solid var(--selected-background-color);background: var(--selected-background-color">
            <div class="bottom_data">
            	<div class="row">
            		<div class="col-6">
            			<div class="subscribe_user_profile" style="display: flex">
            				<a href="javascript:void(0)"><img src="<?= $row['picture_link'] ?>" style="width: 50px;height: 50px;border-radius: 50%;object-fit: cover" alt="<?= $row['Name'] ?>"></a>
            				<a href="javascript:void(0)"><h5 style="position: absolute;left: 79px;top: 5px;width: 80%;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"><?= $row['Name'] ?></h5></a>
            				<p style="position: absolute;left: 70px;top: 15px;font-size: 11px;color: #515151;padding: 10px;"><?= number_format_short($row['subscribers']) ?> subscribers</p>
            			</div>
            		</div>
            		<div class="col-6">
            			<?php 
            			if ($row['Name'] == $user['Name']) {
            				?>
            				<button  class="subscribe_button" style="background: steelblue">Edit Project</button>
            				<?php
            			}else
            				{
        					?>
        						<button class="subscribe_button">Subscribe</button>
        					<?php
            				}

            			?>
            		</div>		
            	</div>

            	<div class="container-fluid" style="color: var(--dark-mode-text-color);margin-top: 20px;">
            		<?= $row['project_description'] ?>
            	</div>
            </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-4">
      </div>
    </div>
  </div>
</div>
      	<input type="hidden" id="code" value="<?= $row['project_code'] ?>">
      	<input type="hidden" id="views" value="<?= $row['views_count'] ?>">
      	<input type="hidden" id="logg_user" value="<?= $row['Name'] ?>">
      	<input type="hidden" id="user_email" value="<?= $user['google_email'] ?>">
<script>

$(document).ready( () => {
inc_view();
	function inc_view()
	{
		var code = $("#code").val();
		var views = $("#views").val();
		var logg_user = $("#logg_user").val();
		$.ajax({
			url: 'increase_view.php',
			type: "post",
			data: {code:code, views:views,logg_user:logg_user},
			success: function(data) {
				var final_view = $.parseJSON(data);
				$("#final_view").html(final_view.view);
			}
		});	
	}
});
</script>
</body>
</html>