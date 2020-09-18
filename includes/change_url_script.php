<!-- <script>
	$(document).ready(function($)
	{

			var page_url = '<?php echo $app_url?>/';
			$(document).on('click', '.btn_load_screen', function(event)
			{
				event.preventDefault();
				$(".menu_overlay").addClass("hide_menu");
				$(".hide_menu").css("transition", "0.5s ease-in-out");
   				$(".menu_overlay").removeClass("open");

					var call_type = $(this).attr('call_type');
					$.getJSON(page_url+'ajax.php', {call_type: call_type}, function(data, textStatus, xhr)
					{
						$(document).attr("title", data.title);
						$(document).find('meta[name=description]').attr('content', data.description);

						$(document).find('.content').html(data.data);

						window.history.pushState("", "", page_url+data.url);
	   					$(".hide_menu").css("transition", "2s ease-in-out");

					});
			});


		history.replaceState({page_url:null}, 'Default state', './');
	});

	 
</script> -->