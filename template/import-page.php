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

                if ( isset( $_POST["submit_file"] ) && !empty($_FILES["file"]["name"]) ) {
					$upload = new Upload();
					echo $upload->html;
					$upload->register();
				} else{
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
				

		     ?>
			</span>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
                Select file to upload:
                <input type="file" name="file" id="fileToUpload">
                <input class="btn btn-primary" type="submit" value="Upload File" name="submit_file">
            </form>

            <hr>
            <form action="" method="post">
                <label for="">Insert New Products:</label>                
                <input class="btn btn-primary" type="submit" value="Insert Products" name="submit_products">
            </form>

            <?php 
            use Inc\Data\Insert; 

            $insert = new Insert();

            if ( isset( $_POST["submit_products"] )  ) {

                echo $insert->register();
            }

            ?>
        </div>
    

<hr>

  