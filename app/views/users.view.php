<?php
    require 'partials/header.view.php';
?>
<div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">DataTables.net</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                   
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                     
                        <tr>
                          <th>KDNR</th>
                          <th>Firma</th>
                          <th>Vorname</th>
                          <th>Nachname</th>
                          <th>CareOf</th>
                          <th>Strasse</th>
                          <th>Hausnummer</th>
                          <th>Postfach</th>
                          <th>PLZ</th>
                          <th>Ort</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php foreach($users as $user) : ?>

                        <?php

                            // die(var_dump($user));
                        ?>
                        <tr>
                            <td><?php echo $user->KDNR ?></td>
                            <td><?php echo $user->Firma ?></td>
                            <td><?php echo $user->Vorname ?></td>
                            <td><?php echo $user->Nachname ?></td>
                            <td><?php echo $user->CareOf ?></td>
                            <td><?php echo $user->Strasse ?></td>
                            <td><?php echo $user->Hausnummer ?></td>
                            <td><?php echo $user->Postfach ?></td>
                            <td><?php echo $user->PLZ ?></td>
                            <td><?php echo $user->Ort ?></td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>

                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>



    
<?php
    require 'partials/footer.view.php';
?>