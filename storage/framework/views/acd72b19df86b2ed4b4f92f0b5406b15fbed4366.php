<?php $__env->startSection('content'); ?>

<div class="container-fluid">
        <h1 class="mt-4">Add Cars Details</h1>

        <?php if(Session::has('success')): ?>
              <div class="alert alert-success">
                   <font face="Arial" size="6"><?php echo e(Session::get('success')); ?></font>
              </div>
         <?php endif; ?> 

        <div class="card mb-4">
            <div class="card-header">
                Cars
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <form action="<?php echo e(route('car.store')); ?>"  method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" name="c_nm" placeholder="Enter Car Name" />
                          </div>
                          <?php if($errors->has('c_nm')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_nm')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Model</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="model" name="c_model" placeholder="Enter Car Model" />
                          </div>
                          <?php if($errors->has('c_model')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_model')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Lonch Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="c_lonch_date" placeholder="Select Car Lonch Date" />
                          </div>
                          <?php if($errors->has('c_lonch_date')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_lonch_date')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Short Description</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="Title" name="c_short_desc" placeholder="Enter Car Short Description"></textarea>
                          </div>
                          <?php if($errors->has('c_short_desc')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_short_desc')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Long Description</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="Title" name="c_long_desc" placeholder="Enter Car Long Description"></textarea>
                          </div>
                          <?php if($errors->has('c_long_desc')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_long_desc')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Select Car Type</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="c_type" id="type">
                                <option value="">Select Car Type..</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                            </select>
                          </div>
                          <?php if($errors->has('c_type')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_type')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>

                      <div class="form-group row">
                          <label for="uploadpicture">UUpload Car Images</label><br />
                          <!-- <p style="color:red;">Maximum File Size 2 MB</p> -->
                          <div class="col-sm-10">
                                <input type="file" class="form-control form-control-alternative" name="image[]" multiple>
                          </div>
                          <?php if($errors->has('image')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('image')); ?></strong>
                            <br/>
                        <?php endif; ?>
                      </div>

                      <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Car Price</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="c_price" placeholder="Enter Car Price" />
                          </div>
                          <?php if($errors->has('c_price')): ?>
                            <strong style="color: red;"><?php echo e($errors->first('c_price')); ?></strong>
                            <br/>
                          <?php endif; ?>
                      </div>
                      
                    <p align="center"><button role="button" class="btn btn-success ">+ Add Car</button></p>     
                  </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin_Panel.Template.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NikhilGarala\Desktop\Self_Learning\Laravel\DJ_Sir_Project\CarProject\resources\views/Admin_Panel/Cars/AddCar.blade.php ENDPATH**/ ?>