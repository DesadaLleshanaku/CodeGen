<?php
authenticatedpage();
pagetitle('Dashboard');
$clients = sql_selectfull("SELECT * FROM `clients`");
?>

<table class="ui stackable table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Paid</th>
        <th>Pending</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($clients as $client) { ?>
    <tr>
        <td><?php  echo $client['fullname'] ?></td>
        <td><?php  echo $client['emailaddress'] ?></td>
        <td><?php  echo $client['phone'] ?></td>
        <td><?php  echo 200; ?></td>
        <td><?php  echo 100; ?></td>
        <td><a href="client?id=<?php  echo $client['id'] ?>"><i class="edit icon"></i></a><a href="client?id=<?php  echo $client['id'] ?>"><i class="remove icon"></i></a> </td>
    </tr>
    <?php } ?>
    </tbody>
</table>