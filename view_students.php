<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['course'] ?></td>
    <td>
        <a href="edit_student.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete_student.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
