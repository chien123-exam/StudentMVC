<h2>Student List</h2>
<a href="index.php?controller=student&action=create">Create Student</a>
<br/>
<table width="800" border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student->id ?></td>
            <td><?= $student->name ?></td>
            <td><?= $student->email ?></td>
            <td><?= $student->address ?></td>
            <td><?= $student->gender == 1 ? 'Nam' : 'Nữ' ?></td>
            <td>
                <a href="index.php?controller=student&action=edit&id=<?=$student->id ?>">Sửa</a> |
                <a onclick="return confirm('Bạn có thực sự muốn xóa')" href="index.php?controller=student&action=delete&id=<?= $student->id ?>">Xóa</a>
            </td>
        </tr>

        <?php endforeach; ?>

</table>