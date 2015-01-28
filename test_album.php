<?php
include('template/header-page.php');
?>

<div class="grid_12 alpha omega" id="view_album">
   <div class="grid_12 alpha omega" id="view_album_container">
            <p class="grid_2 push_5">Wedding</p><div class="clear"></div>
		    <p class="grid_2 push_5" style="margin-left:30px;">of</p><div class="clear"></div>
			<h3 class="grid_3 push_5" style="margin-left:-20px;">Catherine and Dave</h3><div class="clear"></div>
	        <table class="grid_12 alpha omega" id="gallery_table">
	          <tr class="grid_12" style="margin-top:10px;margin-bottom:10px; margin-left:15px;">
		<td class="grid_3 alpha"><a href="img/1.jpg" data-lightbox="image-1" title="hello">
                  <img src="img/gallery1.png">
                   </a>
               </td>
				<td class="grid_3 alpha"><a href="img/2.jpg" data-lightbox="image-1" title="hello1"><img src="img/gallery2.png"><a></td>
				<td class="grid_3 alpha"><a href="img/3.jpg" data-lightbox="image-1" title="hello2"><img src="img/gallery3.png"><a></td>
				<td class="grid_3 alpha"><a href="img/4.jpg" data-lightbox="image-1" title="My dsad"><img src="img/gallery4.png"><a></td>
			  </tr>
			  <tr class="grid_12 " style="margin-top:10px;margin-bottom:10px;margin-left:15px;">
			    <td class="grid_3 alpha"><img src="img/gallery1.png"></td>
				<td class="grid_3 alpha"><img src="img/gallery2.png"></td>
				<td class="grid_3 alpha"><img src="img/gallery3.png"></td>
				<td class="grid_3 alpha"><img src="img/gallery4.png"></td>
			  </tr>
			</table>
   </div>
</div>
<?php
include('template/footer.php');
?>