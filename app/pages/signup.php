<?php

    if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $errors = [];
    //data vaildation
    if(empty($_POST['username']))
    {
        $errors['username'] = "a username is required";
    }else
    if(!preg_match("/^[a-zA-Z]+$/", $_POST['username'])){
        $errors['username'] = "a username can only have letters with no spaces";
    }

    if(empty($_POST['email']))
    {
        $errors['email'] = "a email is required";
    }else
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['username'] = "email not valid";
    }

    if(empty($_POST['password']))
    {
        $errors['password'] = "a password is required";
    }else
    if($_POST['password'] != $_POST['retype_password']){
        $errors['password'] = "password do not match";
    }else
    if(strlen($_POST['password']) < 8){
        $errors = "password must be 8 characters long or more";
    }

    if(empty($_POST['role']))
    {
        $errors['role'] = "a role is required";
    }

    if(empty($errors))
    {
        $values = [];
        $values['username'] = trim($_POST['username']);
        $values['email']    = trim($_POST['email']);
        $values['role']     = trim($_POST['role']);
        $values['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $values['date']     = date("Y-m-d H:i:s");
        $query = "insert into users (username,email,password,role,date) values (:username,:email,:password,:role,:date)";
        db_query($query,$values);

        message("signup successful");
        redirect('login');
        }
    }


?>
<?php require page('includes/header')?>

    <form method="post">
    <div style="max-width: 500px;margin:auto;">
<input class="form-control my-1" value="<?=set_value('username')?>" type="text" name="username" placeholder="Username">
                <?php if(!empty($errors['username'])):?>
                    <small class="error"><?=$errors['username']?></small>
                <?php endif;?>

                <input class="form-control my-1" value="<?=set_value('email')?>" type="email" name="email" placeholder="Email">
                <?php if(!empty($errors['email'])):?>
                    <small class="error"><?=$errors['email']?></small>
                <?php endif;?>

                <select name="role" class="form-control my-1">
                    <option value="">--Select Role--</option>
                    <option <?=set_select('role', 'user')?> value="user">User</option>
                </select>
                <?php if(!empty($errors['role'])):?>
                    <small class="error"><?=$errors['role']?></small>
                <?php endif;?>

                <input class="form-control my-1" value="<?=set_value('password')?>" type="password" name="password" placeholder="Password">
                <?php if(!empty($errors['password'])):?>
                    <small class="error"><?=$errors['password']?></small>
                <?php endif;?>

                <input class="form-control my-1" value="<?=set_value('retype_password')?>" type="password" name="retype_password" placeholder="Retype Password">
                <button class="btn bg-orange">Sign Up</button><br><br>
            </form>
        </div>

<?php require page('includes/footer')?>