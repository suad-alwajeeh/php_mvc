<?php include 'header.php'; ?>
 

</br>
</br></br>
</br></br>
</br></br>
</br>
  
    <section class="control bg-light" >
        <div class="container-fluid">
            <div class="row">
<div class="col-12">
<table class="table table-bordered text-center" style="direction:rtl;">
<thead class="thead-light">
<tr>
  <th> اسم المقدم</th>
  <th>اسم الوظيفة </th>
  <th> تاريخ التقديم</th>
  <th>  الحالة</th>
</tr>
</thead>
    
<tbody>
    <?php
$id=$_GET['id'];
     $GLOBALS['query']="SELECT DISTINCT jw_users.fullname,jw_jobs.name,jw_regestered_jobs.code_number,jw_regestered_jobs.dateofregister FROM jw_users,jw_regestered_jobs,jw_jobs WHERE jw_regestered_jobs.sure_id=1 AND jw_users.id=$id and jw_regestered_jobs.user_id=$id AND jw_regestered_jobs.code_number NOT LIKE 'null' AND jw_regestered_jobs.job_id=jw_jobs.id ";
$h_display_item=$con->prepare($GLOBALS['query']);
    $h_display_item->execute();
    $h_empty= $h_display_item->rowcount();

               while($row=$h_display_item->fetch()) :
echo'
<tr>
<td>'.$row['fullname'].'</td>
<td> '.$row['name'].'</td>
<td> '.$row['dateofregister'].' </td>
<td class="bg-info">     إذا تم اختيار اسمك من القرعة وربحتي الوظيفة سوف يتم ابلاغك من خلال رسالة واتساب الى رقمك 
 </td>
</tr>';

endwhile;
    ?>
</tbody>
</table>
</div>
</div>
</div>
            
</section>
</br>
</br>
</br>
</br>
<?php include 'footer.php'; ?> 