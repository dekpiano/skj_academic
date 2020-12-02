<div class="main-wrapper theme-bg-light ">
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">

            <h2 class="heading">จัดการข้อมูล<?=$title;?></h2>
        </div>
        <!--//container-->
    </section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary btn-sm float-right mb-3" id="ModalAddClassRoom"> <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?></button>

                <table class="table table-bordered" id="tb-classroom" >
                    <thead>
                        <tr>
                            <th>ปีการศึกษา</th>
                            <th>ห้องเรียน</th>
                            <th>ครูที่ปรึกษา</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $tea = []; foreach ($classRoom as $key => $v_classRoom) : 
                    $tea[] = $v_classRoom->class_teacher;
                        ?>
                        <tr>
                            <td><?=$v_classRoom->Reg_Year?></td>
                            <td><?=$v_classRoom->Reg_Class?></td>
                            <td><?=$v_classRoom->pers_prefix.$v_classRoom->pers_firstname.' '.$v_classRoom->pers_lastname?></td>
                        </tr>
                    <?php endforeach; ?>  
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">เพิ่ม<?=$title;?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="AddClassRoom" action="#">
                    <div class="form-group">
                        <label for="email">ปีการศึกษา <?php $d= (date('Y')+543)-1;?></label>
                        <select name="year" id="year" class="custom-select">
                                <?php for($i=$d; $i<=$d+2; $i++) : ?>
                                <option <?=$i==date('Y')+543 ? 'selected' : ''?> ><?=$i;?></option>
                                <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="classroom">ห้องเรียน</label>
                        <input type="text" class="form-control" placeholder="ตัวอย่าง เช่น 2/5, 4/1" name="classroom" id="classroom" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher">ครูที่ปรึกษา:</label>
                        <select name="teacher" id="teacher" class="custom-select" required>
                       
                                <option value=''>เลือกครูที่ปรึกษา</option>
                                <?php foreach ($NameTeacher as $key => $v_NameTeacher) : ?>
                                    <?php if(in_array($v_NameTeacher->pers_id,$tea)): ?>
                                      
                                    <?php else: ?>
                                <option value="<?=$v_NameTeacher->pers_id;?>">                             
                                    <?=$v_NameTeacher->pers_prefix.$v_NameTeacher->pers_firstname.' '.$v_NameTeacher->pers_lastname?>
                                </option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                        </select>
                    </div>
               
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>