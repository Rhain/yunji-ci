<header class="content__title">
    <h1>Add New Catalogue Products</h1>
    <small>In this page you can add new catalogue products.</small>
</header>

<div class="card">
<?php echo validation_errors(); ?>

    <div class="card-block">
        <form id="form-edit-mandate">
            <?php
                if ( $eyeglasses['id'] >0 ) {
                    echo '<input type="hidden" name="id" value="' . $eyeglasses['id'] . '">';
                }
            ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="input" name="title" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['title']:''); ?>" class="form-control" placeholder="Title"/>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Brand Name" name="brand_name" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['brand_name']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Price" name="price" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['price']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Stock" name="stock" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['stock']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Model Number" name="model_number" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['model_number']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select class="form-control" name="category">
                            <option>Category</option>
                            <option value="sunglasses" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['category'] == "sunglasses" ) ? "selected":''); ?>>Sunglasses</option>
                            <option value="optical" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['category'] == "optical" ) ? "selected":''); ?>>Optical Frame</option>
                        </select>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select name="material" class="form-control">
                            <option value="Material">Material</option>
                            <option value="acetate" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['material'] == "acetate" ) ? "selected":''); ?>>Acetate</option>
                            <option value="alloy" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['material'] == "alloy" ) ? "selected":''); ?>>Alloy</option>
                            <option value="tr" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['material'] == "tr" ) ? "selected":''); ?>>TR</option>
                            <option value="plastic" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['material'] == "plastic" ) ? "selected":''); ?>>Plastic</option>
                            <option value="titanium" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['material'] == "titanium" ) ? "selected":''); ?>>Titanium</option>
                            <option value="wood" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['material'] == "wood" ) ? "selected":''); ?>>Wood</option>
                        </select>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1">
                    <h6>Gender:</h6>
                </div>
                <div class="col-sm-10">
                    <label class="custom-control custom-radio">
                        <input type="radio" value="male" name="gender" class="custom-control-input" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['gender'] == "male") ? "checked":''); ?>/>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Male</span>
                    </label>

                    <label class="custom-control custom-radio">
                        <input type="radio" value="female" name="gender" class="custom-control-input" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['gender'] == "female") ? "checked":''); ?>/>
                        <input type="radio" name="radio-inline" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Female</span>
                    </label>

                    <label class="custom-control custom-radio">
                        <input type="radio" value="unisex" name="gender" class="custom-control-input" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['gender'] == "unisex") ? "checked":''); ?>/>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Unisex</span>
                    </label>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="frame_color" class="form-control" placeholder="Frame Colour" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['frame_color']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="lens_color" class="form-control" placeholder="Lens Colour" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['lens_color']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="lens_width" class="form-control" placeholder="Lens Width" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['lens_width']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="nose_bridge" class="form-control" placeholder="Nose Bridge" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['nose_bridge']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="temple" class="form-control" placeholder="Temple" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['temple']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="total_width" class="form-control" placeholder="Total Width" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['total_width']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="vertical" class="form-control" placeholder="Vertical" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['vertical']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="input" name="lens_index" class="form-control" placeholder="Lens Index" value="<?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['lens_index']:''); ?>" />
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="recommend" value="1"  <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['recommend'] == 1) ? "checked":''); ?>/>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Recommended</span>
                    </label>

                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="is_private" value="1" <?php  echo (($eyeglasses['id'] >0 && $eyeglasses['is_private'] == 1) ? "checked":''); ?>/>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Is Private</span>
                    </label>
                </div>
            </div>
            <br>
            <br>

            <div class="col-sm-12">
                <textarea name="description" class="form-control" rows="10" placeholder="Description"><?php  echo (($eyeglasses['id'] >0 ) ? $eyeglasses['description']:''); ?></textarea>
                <i class="form-group__bar"></i>
            </div>
            <br>
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <label>Upload your media</label>
                    <div id="attachments">
                        <div id="sortable" class="d-flex flex-row align-content-wrap flex-wrap">
                            <button id='btn-add-picture' class='form-upload' type="button">
                                <img src="<?php echo base_url().'assets/' ?>images/img-upload.png">
                            </button>
                            <?php
                            if ( isset( $images ) && $images != null ) {
                                foreach ( $images as $image ) {
                                    echo '<div class="img-preview img-preview-gallery d-flex flex-column" data-image="' . $image['image_id'] . '">';
                                    echo '<img src="' . $image['image_url'] . '">';
                                    echo '<div class="del-attachment btn btn-sm" data-id="' . $image['image_id'] . '">Delete</div>';
                                    echo '<input type="hidden" name="sorts[]" value="' . $image['image_id'] . '" />';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <input type='hidden' id='delete-existing-file' name='delete-existing-file' value=''>
                </div>
            </div>
            <br>
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" name="submit" class="btn btn-danger waves-effect btn-block" value="Create eyeglasses" />
                    <input type="button"  class="btn  btn-block" onclick="show_page_for_backend('<?php echo base_url()?>admin/products')" value="Cancel" />
                </div>
            </div>
        </form>
        <div id='new-input-file' hidden></div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/items.js"></script>

