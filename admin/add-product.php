<?php include('include/header.php'); ?>
        <!-- row -->
        
<?php
   

   if(isset($_POST['submit'])) {
   
            $product_name         = escape($_POST['name']);
            $description          = escape($_POST['description']);
            $category_id          = escape($_POST['category']);
            $product_price        = escape($_POST['price']);
            $product_image        = escape($_FILES['image']['name']);
            $product_image_temp   = escape($_FILES['image']['tmp_name']);

       
        move_uploaded_file($product_image_temp, "../assets/images/$product_image" );
       
       
      $query = "INSERT INTO products(cat_id, product_name, product_price,product_image,description) ";
             
      $query .= "VALUES({$category_id},'{$product_name}','{$product_price}','{$product_image}','{$description}') "; 
             
      $create_post_query = mysqli_query($connection, $query);  
          
      confirmQuery($create_post_query);

      $the_post_id = mysqli_insert_id($connection);


   }
    

    
    
?>
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Product</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                        Name
                                    </label>
                                    <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea name="description" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category" name="category">
                                        <option selected>Select one</option>
                                        <?php

                                            $query = "SELECT * FROM category";
                                            $select_categories = mysqli_query($connection,$query);

                                            confirmQuery($select_categories);


                                            while($row = mysqli_fetch_assoc($select_categories )) {
                                            $cat_id = $row['id'];
                                            $cat_name = $row['cat_name'];
                                                
                                                
                                                echo "<option value='$cat_id'>{$cat_name}</option>";
                                            
                                                
                                            }

                                            ?>
                                  
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        Price
                                    </label>
                                    <input id="stock" name="price" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary" name="submit">Add
                                        </button>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                            <img width="250px" src="" id="output"/>
                                <!-- <i id="dummy" class="fas fa-5x fa-cloud-upload-alt" onclick="document.getElementById('fileInput').click();"></i> -->
                                
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" name="image" style="display:none;" accept="image/*" onchange="loadFile(event)"/>
                                <input name="image" type="button" class="btn btn-primary d-block mx-auto" value="Upload ..." onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>
                        

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018 Admin Dashboard . Created by
                    <a rel="nofollow" href="http://www.octadottech.com" class="text-white tm-footer-link">Octadot</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
       
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        
                                        
    </script>
</body>

</html>