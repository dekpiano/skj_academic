<div class="main-wrapper">
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">รายชื่อนักเรียน </h2>
            <div class="intro">Welcome to Student System</div>
        </div>
        <!--//container-->
        
        <div class="row justify-content-center mt-3">
            <div class="col-4">
            <form>
                <select name="cars" class="custom-select">
                    <option selected>ค้นหานักเรียน</option>
                    <option value="volvo">Volvo</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
            </div>
        </div>
    </section>
    <section class="we-offer-area text-center ">
        <div class="container-fluid">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>เลขที่</th>
                        <th>เลขประจำตัว</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ชั้นห้อง</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($selStudent as $key => $v_stu) :?>
                    <tr>
                        <td><?= $v_stu->StudentNumber?></td>
                        <td><?= $v_stu->StudentCode?></td>
                        <td><?= $v_stu->StudentPrefix.$v_stu->StudentFirstName.' '.$v_stu->StudentLastName?></td>
                        <td><?= $v_stu->StudentNumber?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

</div>
<!--//main-wrapper-->