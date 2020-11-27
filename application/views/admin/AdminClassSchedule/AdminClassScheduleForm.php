<div class="main-wrapper">
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">

            <h2 class="heading">จัดการข้อมูล<?=$title;?></h2>

        </div>
    </section>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="row justify-content-lg">
            <div class="col-12">
                <div class="card shadow mb-4 ">

                    <div class="card-body">
                        <form
                            action="<?=base_url('admin/academic/class_schedule/control_admin_class_schedule/').$action;?>"
                            method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="schestu_id" class="col-sm-2 col-form-label">รหัส<?=$title;?></label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control" id="schestu_id" name="schestu_id"
                                        value="<?=$action == 'insert_class_schedule' ? $class_schedule : $class_schedule[0]->schestu_id;?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="schestu_classname" class="col-sm-2 col-form-label">ชั้น ม.</label>
                                <div class="col-sm-2">
                                    <?php $classroom = array("1","2","3","4","5","6"); ?>
                                    <select name="schestu_classname" id="schestu_classname" class="form-control">
                                        <?php foreach ($classroom as $key => $value): ?>
                                        <option <?=@$class_schedule[0]->schestu_classname == $value ? 'selected' : '';?>
                                            value="<?=$value;?>"><?=$value;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="schestu_filename" class="col-sm-2 col-form-label">รูป<?=$title;?></label>
                                <div class="col-sm-10">
                                    <input type="file" name="schestu_filename" id="schestu_filename" />
                                    <small id="emailHelp" class="form-text text-muted">PDF ขนาดไฟล์ไม่เกิน 2 mb</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="schestu_filename" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-lg btn-<?=$color?>  btn-block"><?=$icon?>
                                        บันทึก</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>




    </div>
    <!-- /.container-fluid -->

</div>