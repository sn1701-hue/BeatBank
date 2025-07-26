<?php require page('includes/admin-header')?>

<section class="admin-content" style="min-height: 200px;">
<?php 
  				$query = "select * from songs order by id desc limit 20";
  				$rows = db_query($query);

  			?>
    <h3>Dashboard</h3>
    <table class="table">
  				
  				<tr>
  					<th>Title</th>
  					<th>Image</th>
  					<th>Artist</th>
  					<th>Views</th>
					<th>Likes</th>
   				</tr>

  				<?php if(!empty($rows)):?>
	  				<?php foreach($rows as $row):?>
		  				<tr>
		  					<td><?=$row['title']?></td>
		  					<td><img src="<?=ROOT?>/<?=$row['image']?>" style="width:100px;height: 100px;object-fit: cover;"></td>
							<td><?=get_artist($row['artist_id'])?></td>

		  					<td>
                              <div>Views: <?=$row['views']?></div>
		  					</td>
							<td>
								<div>Likes: <?=$row['likes']?></div>
							</td>
		  				</tr>
	  				<?php endforeach;?>
  				<?php endif;?>

  			</table>

</section>
<?php require page('includes/admin-footer')?>