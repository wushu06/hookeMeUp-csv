<?php // MyPlugin - Settings Page



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

use \Inc\Base\BaseController;
//$file = content_url().'/plugins/hook-me-up-csv/newp.csv';
//echo file_get_contents($file);

?>
<h1>
    <?php echo esc_html( get_admin_page_title() ); ?>
</h1>

  
        <div class="wrap">
            <h2>Upload CSV File</h2>
			<span>
			<?php use Inc\Data\Upload;

              /*  if ( isset( $_POST["submit_file"] ) && !empty($_FILES["file"]["name"]) ) {
					$upload = new Upload();
					echo $upload->html;
					$upload->register();
				} else{
                    echo "Error: There was a problem uploading your file. Please try again.";
                }*/
				

		     ?>
			</span>
            <hr>



            <div class="container">

                <ul class="tabs">
                    <li class="tab-link current" data-tab="tab-1">Upload File</li>
                    <li class="tab-link" data-tab="tab-2">User Bases Products</li>
                    <li class="tab-link" data-tab="tab-3">Role Based Products</li>

                </ul>
                <div id="tab-1" class="tab-content current">


                    <form action="" method="post" enctype="multipart/form-data">
                        Select file to upload:
                        <input type="file" name="file" id="fileToUpload">
                        <input class="btn btn-primary" type="submit" value="Upload File" name="submit_file">
                    </form>


                </div>

                <div id="tab-2" class="tab-content">




                        <form action="" method="post">
                            <label for="">Insert New Products(Filter By User):</label><br>
                            <input class="btn btn-primary" type="submit" value="Insert/Update Products" name="submit_products">
                        </form>


                </div>
                <div id="tab-3" class="tab-content">

                    <form action="" method="post">
                        <label for="">Insert New Products(Filter By Role):</label><br>
                        <input class="btn btn-primary" type="submit" value="Insert/Update Products" name="submit_products_role">
                    </form>
                </div>


            </div><!-- container -->


            <?php 
            use Inc\Data\InsertByUser;
            use Inc\Data\InsertByRole;

            $insert_by_user = new InsertByUser();
            $insert_by_role = new InsertByRole();

            if ( isset( $_POST["submit_products"] )  ) {

                echo '<h1>' .$insert_by_user->insert_update_by_user().'</h1>';
                //  echo  read_file_Nour();
                //  echo    $csv_file                        = $this->plugin_url.'user_price.csv';

            }

            if ( isset( $_POST["submit_products_role"] )  ) {


                  echo  '<h1>' .$insert_by_role->insert_update_by_role().'</h1>';
                //  echo    $csv_file                        = $this->plugin_url.'user_price.csv';

            }

            ?>
        </div>
    

        <hr>

        <div class="hook-show-data">
            <?php
            use Inc\Data\Read;

            $read = new Read ();

            if ( isset( $_POST["submit_file"] )  ) {
                echo  '<h1>Products Uploaded:</h1>';
                echo $read->register();



            }



               ?>

        </div>

<?php

function read_file_Nour(){




}
