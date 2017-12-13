<h1>Create New User</h1>

<form action="<?=site_url('admin/create_user')?>" method="post">
    Email: <input type="email" name="email" />
    Address: <input type="text" name="address"  />
    Password: <input type="password" name="password" />
    Phone: <input type="number" name="phone" /> 
    <input type="submit" />
</form>

<table>
<thead>
    <th>ID</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Options</th>
</thead>
<tbody>
<?php foreach($users as $_key => $_value): ?>
<tr>
    <td><?=$_value->user_id?></td>
    <td><?=$_value->email?></td>
    <td><?=$_value->address?></td>
    <td><?=$_value->phone?></td>

    <td><a href="<?=site_url("admin/delete_user/{$_value->user_id}")?>">Delete</a></td>
</tr>
<?php endforeach;?>
</tbody>
</table>

