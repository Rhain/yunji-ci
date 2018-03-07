<div id="customer-info" class="customer-info">
    <form id="form-customer">
        <div class="form-heading">
            <h3 class="title-content">Customer Info</h3>
        </div>
        <div class="form-main">
            <div class="row">
                <div class="col col-sm-12">
                    <div class="form-group">
                        <input type="text" name="name" maxlength="100" class="form-control" placeholder="Name" required>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" name="phone" maxlength="20" class="form-control" placeholder="Phone Number" required>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-heading">
            <h3 class="title-content">Prescription Info</h3>
        </div>
        <div class="form-main">
            <div class="row">
                <div class="col-sm-6">
                    <label>OD</label>
                    <div class="form-group">
                        <input type="number" min="-10.00" step="0.01" name="od_sph" placeholder="SPH" maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" min="-10.00" step="0.01" name="od_cyl" placeholder="CYL"  maxlength="5" class="form-control" />
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" min="0" max="180" step="1" name="od_axis" placeholder="AXIS"  maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="float" step="0.01" name="od_add" placeholder="ADD"  maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" min="0" max="100" step="1" name="od_pd"  placeholder="PD" maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label>OS</label>
                    <div class="form-group">
                        <input type="number" min="-10.00" step="0.01" name="os_sph" placeholder="SPH"  maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" min="-10.00" step="0.01" name="os_cyl" placeholder="CYL"  maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" min="0" max="180" step="1" name="os_axis" placeholder="AXIS"  maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="float"  step="0.01" name="os_add" placeholder="ADD"  maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" min="0" max="100" step="1" name="os_pd"  placeholder="PD" maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="number" min="0" max="100" step="1" name="pd" placeholder="TOTAL PD" maxlength="5" class="form-control" />
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="number" step="0.01" name="lens_index" placeholder="index" maxlength="5" class="form-control"/>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <textarea name="lens_detail" class="form-control" placeholder="Lens details" rows="5"></textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-heading">
            <h3 class="title-content">Frame Information</h3>
        </div>
        <div class="form-main">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <select name="frame_style" class="form-control">
                            <option>Frame Style</option>
                            <option value="rimless">Rimless</option>
                            <option value="half_rim">Half Rim</option>
                            <option value="full_rim">Full Rim</option>
                        </select>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <select name="frame_material" class="form-control">
                            <option>Material</option>
                            <option value="acetate" >Acetate</option>
                            <option value="alloy" >Alloy</option>
                            <option value="tr" >TR</option>
                            <option value="plastic" >Plastic</option>
                            <option value="titanium" >Titanium</option>
                            <option value="wood" >Wood</option>
                        </select>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <textarea name="frame_detail" class="form-control" placeholder="Frame details" rows="5"></textarea>
                        <i class="form-group__bar"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <input type="submit" class="btn btn-danger btn-block" value="submit information" name="customer_submit" />
        </div>
    </form>
</div>
<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/customer.js"></script>
