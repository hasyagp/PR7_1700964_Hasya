<?php
    include 'header.php';
?>
            
<form>
    <fieldset>
        <fieldset disabled>
            <hr>
            <table>
            <h2>Left Join</h2>
                <thead>
                     <tr>
                          <th scope="col">
                            <td>No</td>
                          <td>Kode Kereta</td>
                          <td>Nama</td>
                          <td>Kode Kursi</td></th>
                    </tr>
                </thead>
                <tbody>
                      <?php 
                      $no =1;
                      foreach ($data as $key): ?>
                    <tr class="table-active">
                      <th scope="row"></th>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $key->kd_kereta ?></td>
                      <td><?php echo $key->nama ?></td>
                      <td><?php echo $key->kd_kursi ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            <hr>
            <table>
                <br>
                <h2>Right Join</h2>
                <thead>
                     <tr>
                          <th scope="col">
                            <td>No</td>
                          <td>Kode Gerbong</td></th>
                          <td>Kode Kereta</td>
                          <td>Nama</td>
                    </tr>
                </thead>
                <tbody>
                      <?php 
                      $no = 1;
                      foreach ($data2 as $key): ?>
                    <tr class="table-active">
                      <th scope="row"></th>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $key->kd_gerbong ?></td>
                      <td><?php echo $key->kd_kereta ?></td>
                      <td><?php echo $key->nama ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>

            <table>
                <br>
                <h2>Inner Join</h2>
                <thead>
                     <tr>
                          <th scope="col">
                            <td>No</td>
                          <td>Kode Kereta</td>
                          <td>Nama</td>
                          <td>Kode Gerbong</td></th>
                          <td>Nama</td>
                          <td>Kode Kursi</td></th>
                    </tr>
                </thead>
                <tbody>
                      <?php 
                      $no = 1;
                      foreach ($data3 as $key): ?>
                    <tr class="table-active">
                      <th scope="row"></th>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $key->kd_kereta ?></td>
                      <td><?php echo $key->nama ?></td>
                      <td><?php echo $key->kd_gerbong ?></td>
                      <td><?php echo $key->nama ?></td>
                      <td><?php echo $key->kd_kursi ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </fieldset>

    </fieldset>
</form>
