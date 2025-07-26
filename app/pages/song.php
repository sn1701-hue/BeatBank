<?php require page('includes/header')?>
    <div class="section-title" style="text-align: center;">Now playing</div>
    <section class="content">
    <?php
        $slug = $URL[1] ?? null;
        $query = "select * from songs where slug = :slug limit 1";
        $row = db_query_one($query,['slug'=>$slug]);
    ?>

    <?php if(!empty($row)):?>
				<?php include page('song-full')?>
		<?php else:?>
			<div class="m-2">No songs found</div>
		<?php endif;?>

    </section>
    <?php require page('includes/footer')?>
