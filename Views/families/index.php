<h2>Family List</h2>
<a href="index.php?controller=family&action=create">Create Family</a>
<br/>
<table width='800' border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php foreach ($families as $family): ?>
    <tr>
        <td><?= $family->id ?></td>
        <td><?= $family->family_name ?></td>
        <td><?= $family->address ?></td>
        <td>
            <a href="index.php?controller=family&action=edit&id=<?= $family->id ?>">Sửa</a> |
            <a onclick="return confirm('bạn có thực sự muốn xóa không?')" href="index.php?controller=family&action=delete&id=<?= $family->id ?>">Xóa</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>