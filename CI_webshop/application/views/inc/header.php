<!doctype html>
<html>
<head>
    <title>My Site</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
    
<?php if ($this->session->userdata('user_id') == false):?>

    
<div class="navbar">
    <a class="active" href="<?=site_url('home')?>"">Home</a>
    <a href="<?=site_url('dashboard/login')?>">Login</a>
    <a href="<?=site_url('admin/login')?>">Admin Login</a>
    <a href="<?=site_url('home/register')?>">Registeren</a>
    <div class="dropdown">
        <button class="dropbtn">Kies een Categorie
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=site_url('/products')?>">Beeld & Geluid</a>
            <a href="<?=site_url('/products/computer')?>">Computer</a>
            <a href="<?=site_url('/products/foto&video')?>">Foto & Video</a>
        </div>
    </div> 
</div>


<?php elseif($this->session->userdata('is_admin') == true):?>

    <h1>Admin Panel</h1>
        
        <li>Manage Users | <a href="<?=site_url('admin/logout')?>">Logout</a></li>
                  
<?php else:?>

    <h1>User Dashboard</h1>

    <ul>
        <li><a href="<?=site_url('dashboard/home')?>">Dashboard</a></li> | 
        <li><a href="<?=site_url('dashboard/account')?>">My Account</a></li> | 
        <li><a href="<?=site_url('dashboard/logout')?>">Logout</a></li>
    </ul>


<?php endif;?>
