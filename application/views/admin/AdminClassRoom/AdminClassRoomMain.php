<div class="main-wrapper">
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

                <table class="table table-bordered" id="example" >
                    <thead>
                        <tr>
                            <th>ปีการศึกษา</th>
                            <th>ห้องเรียน</th>
                            <th>ครูที่ปรึกษา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
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
                        <label for="email">ปีการศึกษา</label>
                        <select name="year" id="year" class="custom-select">
                            <option selected>Custom Select Menu</option>
                            <option value="volvo">Volvo</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="classroom">ห้องเรียน</label>
                        <input type="text" class="form-control" placeholder="ex ม.2/5" name="classroom" id="classroom">
                    </div>
                    <div class="form-group">
                        <label for="teacher">ครูที่ปรึกษา:</label>
                        <input type="text" class="form-control" placeholder="ชื่อครูที่ปรึกษา" name="teacher" id="teacher">
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