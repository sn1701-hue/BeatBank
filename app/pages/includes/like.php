<?php 

    db_query("update songs set likes = likes + 1 where id = :id limit 1", ['id' => $row['id']]);

?>
<form method = "post">
                <div>
                <input type = "submit" name="Like" value = "Like" class="button"/>
                </div>
</form>

