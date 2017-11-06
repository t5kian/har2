<h1>Lisää opiskelija</h1>
<form class="" action="<?php echo site_url('oppilas/lisaa_opiskelija');?>"method="post">
  <table>
    <tr>
      <td>Etunimi<td></td><input type="text" name="en" required></td>
      <td>Sukunimi<td></td><input type="text" name="sn" required></td>
      <td>Syntymävuosi<td></td><input type="number" name="sv"></td>
      <td><td></td><input type="submit" value="Lisää"></td>
    </tr>
  </table>
</form>
