    <!--start music card-->
    <div class="music-card-full" style="max-width: 800px;">

        <h2 class="card-title"><?=esc($row['name'])?></h2>

            <div style="overflow: hidden;">
                <img src="<?=ROOT?>/<?=$row['image']?>"></a>
            </div>
            <div class="card-content">
                <div><?=$row['bio']?></div>

                <h3>Artist Songs: </h3>
                <div style = "display: flex;flex-wrap: wrap;">
                <?php
                    $query = "select * from songs where artist_id = :artist_id order by id desc limit 24";
                    $songs = db_query($query,['artist_id' =>$row['id']]);
                ?>

<?php if(!empty($songs)):?>
			<?php foreach($songs as $row):?>
				<?php include page('includes/song')?>
			<?php endforeach;?>
		<?php else:?>
		<?php endif;?>
            </div>

        </div>
    <!--end music card-->
