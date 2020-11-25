<style>
.form-control {
    padding-top: 0rem;
    padding-bottom: 0rem;
}
</style>
<div class="main-wrapper">
    <section class="cta-section theme-bg-light  py-5">
        <div class="container text-center">
            <h2 class="heading"><?=$title?></h2>
           
        </div>
        <!--//container-->
    </section>
    <section class=" theme-bg-light ">
        <div class="container-fluid ">
            <div class="row">
                <?php 
                foreach ($scoreYear as $key => $v_scoreYear) : ?>
                <div class="col-md-6">
                    <div class="card mb-5">
                        <div class="card-header text-center text-white" style="background-color: #5FCB71;">ภาคเรียนที่
                            <?=$v_scoreYear->RegisterYear?> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">รหัสวิชา</th>
                                            <th scope="col">ชื่อวิชา</th>
                                            <th scope="col">หน่วยกิต</th>
                                            <th scope="col">ระดับคะแนน</th>
                                            <th scope="col">เกรด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  echo $SumUnit = 0; $SumGrade = 0;$scoreLevel=0;
                                        foreach ($scoreStudent as $key => $score):                                         
                                            if($v_scoreYear->RegisterYear == $score->RegisterYear):
                                            $c = $score->Score100;
                                           //print_r($score->Grade);
                                                if(($c>100)||($c<0)||($c== ''))
                                                { $cc= "(W)" ; }
                                                else if (($c>=80)&&($c<=100)) { $cc= "A" ; }
                                                else if (($c>=75)&&($c<=79)) { $cc= "B+" ; }
                                                else if (($c>=70)&&($c<=74)) { $cc= "B" ; }
                                                else if (($c>=65)&&($c<=69)) { $cc= "C+" ; }
                                                else if (($c>=60)&&($c<=64)) { $cc= "C" ; }
                                                else if (($c>=55)&&($c<=59)) { $cc= "D+" ; }
                                                else if (($c>=50)&&($c<=54)) { $cc= "D" ; }
                                                else if ($c<=49) { $cc= "F" ; }
                                ?>
                                        <tr>
                                            <th scope="row"><?=$score->SubjectCode;?></th>
                                            <td><?=$score->SubjectName;?></td>
                                            <td class="text-center"><?=$score->SubjectUnit;?></td>
                                            <?php if($score->Grade == 'ร' || $score->Grade == 'มส'){ ?> 
                                                <td class="text-center">-</td>
                                            <?php }else{ ?>
                                                <td class="text-center"><?=($score->Grade*$score->SubjectUnit);?></td>
                                            <?php } ?>
                                           
                                            <td class="text-center"><?=$cc;?></td>
                                        </tr>
                                        <?php  endif; 
                                        $SumUnit += $score->SubjectUnit;
                                       
                                        if($score->Grade == 'ร' || $score->Grade == 'มส'){
                                            $scoreLevel += ($score->SubjectUnit*0);
                                            $SumGrade += ($score->SubjectUnit*0);
                                        }else{
                                            $scoreLevel += ($score->SubjectUnit*$score->Grade);
                                            $SumGrade += ($score->SubjectUnit*$score->Grade);
                                        }
                                        
                                         endforeach; ?>
                                        <tr class="text-center">
                                            <th colspan=2 >รวม</th>
                                            <th><?=$SumUnit;?></th>
                                            <th><?=$scoreLevel;?></th>
                                            <th><?=number_format($SumGrade/$SumUnit, 2);?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>



    </section>

</div>
<!--//main-wrapper-->