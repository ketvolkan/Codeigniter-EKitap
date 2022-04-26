<tr>

    <td><?php echo $user->id; ?></td>
    <td><?php echo $user->email; ?></td>
    <td><?php echo $user->firstName . " " . $user->lastName; ?></td>

    <td><a href="<?php echo base_url("Admin/User/Delete?id=$user->id"); ?>"><i class="fas fa-trash " style="color:red"></i></a></td>
</tr>