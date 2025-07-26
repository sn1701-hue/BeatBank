<?php require page('includes/header')?>
    <section>
        <img class="hero" src="assets/images/musiclogo.jpg">
    </section>
    <div class="section-title">Music</div>
    <section class="content">
    <?php
        $rows = db_query("select * from artists order by id desc limit 24");
    ?>

<?php if(!empty($rows)):?>
			<?php foreach($rows as $row):?>
				<?php include page('includes/artist')?>
			<?php endforeach;?>
		<?php endif;?>

    </section>
    <?php require page('includes/footer')?>
