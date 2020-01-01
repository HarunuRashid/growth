<?php
    require 'partials/header.view.php';
?>
<div class="main-panel">
<div class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <h4 class="title">Import CSV File</h4>

                      <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">
                      
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Browse</span>
                            <input type="file" name="file" id="file" accept=".csv">
        
                          </span>
                          <button type="submit" id="submit" name="import" class="btn btn-danger">Upload Data</button>
                          
                        </div>
                      </div>

                      <div id="labelError"></div>
                    </form>


                    </div>
                   
                </div>
                <div class="col-md-4 col-sm-4">
                      <h4 class="title">Delete Existing Customer</h4>

                      <form class="form-horizontal" action="deleteData" method="post" name="deleteAll">
                      
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div>
                          <button type="submit" id="submit" name="delete" class="btn btn-danger">Delete All Data</button>
                          
                        </div>
                      </div>

                      <div id="labelError"></div>
                    </form>


                    </div>
                   
                </div>
        </div>
</div>
</div>
<?php
    require 'partials/footer.view.php';
?>