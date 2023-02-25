<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "style.css" ?>
    </style>
    <title>Group 19 Assignment 2</title>
</head>

<body>
    <h2>Employee Details</h2>
    <table>
        <thead>
            <tr>
                <th>E ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Salary</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = simplexml_load_file('employees.xml');
            foreach ($file->employee as $row) {
                ?>
                <tr>
                    <td>
                        <?php echo $row->e_id; ?>
                    </td>
                    <td>
                        <?php echo $row->f_name; ?>
                    </td>
                    <td>
                        <?php echo $row->l_name; ?>
                    </td>
                    <td>
                        <?php echo $row->salary; ?>
                    </td>
                    <td><a href="#" onclick="edit('<?php echo $row->e_id; ?>', '<?php echo $row->f_name; ?>','<?php echo $row->l_name; ?>',  '<?php echo $row->salary; ?>')"
                            class="edit btn"> Edit </a></td>
                    <td><a href="delete.php?e_id=<?php echo $row->e_id; ?>" name="delete" class="delete btn"> Delete </a></td>
                    </div>
                </tr>
            <?php
            }

            ?>
            <tr>
                <td colspan="6"><a onclick="add()" href="#delete<?php echo $row->e_id; ?>" class="add btn"> Add </a>
                </td>
            </tr>
        </tbody>
    </table>



    <div class="editing" id="editing">

        <div class="edit-form">
            <h1 id="h1" style="text-align:center;">Update</h1>
            <form action="" method="post" id="form">
                <label for="e_id">Enployee Id</label><br>
                <input type="text" name="e_id" id="e_id" required><br>

                <label for="e_id">First Name</label><br>
                <input type="text" name="f_name" id="f_name" required><br>

                <label for="e_id">Last Name</label><br>
                <input type="text" name="l_name" id="l_name" required><br>

                <label for="e_id">Salary</label><br>
                <input type="text" name="salary" id="e_sal" required><br>
                <input type="submit" id="submit" class="btn add" value="Edit">
            </form>
            <input type="button" onclick="close1()" value="Close" class="btn close">
        </div>
    </div>

    <div class="group-members" id="group">

        <span class="members">
            <ul>
                <li class="leader">Martha Ondigi</li>
                <li>Elly Okinyi</li>
                <li>Arthur Okumu</li>
            </ul>
            <span class="names">
                <input type="button" onclick="close2()" value="Close" class="btn close">
            </span>

        </span>

    </div>
    <span class="opennames">
        <input type="button" onclick="openames()" id="vmembers" class="btn add" value="View Group Members">
    </span>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>