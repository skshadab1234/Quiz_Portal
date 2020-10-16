<?php require 'session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'includes/header.php'; ?>
  <title>Upload Projects</title>
<!------ Include the above in your HEAD tag ---------->
<style>

</style>
</head>
<body>
<?php require 'includes/navbar.php'; ?>
<div class="app" style="margin-left: 0">
     <main class="main-content">
       <input type="file" name="file" id="file" />
        <br />
      <span id="uploaded_image"></span>  
     </main>

</div>
<script type="text/javascript">
$(document).ready(function(){
   $("#file").change( function(){
      var name = document.getElementById("file").files[0].name;
      var form_data = new FormData();
      var ext = name.split('.').pop().toLowerCase();
      if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
      {
       alert("Invalid Image File");
      }
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("file").files[0]);
      var f = document.getElementById("file").files[0];
      var fsize = f.size||f.fileSize;
      if(fsize > 2000000)
      {
       alert("Image File Size is very big");
      }
      else
      {
       form_data.append("file", document.getElementById('file').files[0]);

      form_data.append("file", document.getElementById('file').files[0]);
      $.ajax({
        url:"upload_file.php",
        method:"POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend:function(){
         $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
        },   
        success:function(data)
        {
         $('#uploaded_image').html(data);
        }
       });
      }
   });
});
</script>

</body>
</html>