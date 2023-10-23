<h1>Farmers with Managers</h1>

<?php
while ($farmer=$farmers->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $farmer['farmer_id']; ?></td>
    <td><?php echo $farmer['farmer_name']; ?></td>
    <td><?php echo $farmer['phone_number']; ?></td>
    <td><?php echo $farmer['email']; ?></td>
    <td><a href="managers-by-farmer.php?id=<?php echo $farmer['farmer_id']; ?>">Managers</td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
