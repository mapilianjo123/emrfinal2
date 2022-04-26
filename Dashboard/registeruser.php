<?php
include ('config/dbcon.php');
include ('includes/header.php');
?>

<div class="container-fluid px-4">
    <h2 class="mt-4">Users</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item ">Users</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Register Users</h4>
                </div>
<div class="card-body">

    <table class="table table-boarderd">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role_as</th>
            <th>Edit</th>
            <th>Delete</th>
             </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT *FROM users";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            foreach($result as $row)
            {
                ?>
                <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['fname']; ?></td>
                <td><?= $row['lname']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <?php
                    if($row['role_as'] == '1'){
                        echo 'Admin';
                    }
                    elseif($row['role_as'] == '0'){
                        echo 'User';
                    }
                    ?>
                </td>
                <td><a href="edit.php" class="btn btn-success">EDIT</a></td>
                <td><a type="button" class="btn btn-danger">DELETE</a></td>
            </tr>
                <?php  
                        
            }
        }
        else{
            ?>
            <tr>
                <td colspan="6">No Records Found</td>
                <?php
        }
        ?>
    </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
include ('includes/scripts.php');
?>
