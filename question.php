<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Your existing table -->
<div class="tab-pane fade" id="applynow" role="tabpanel">
    <button onclick="exportToExcel11()" class="submitbtn">Export to Excel</button>
    <div class="container" style="margin-top:10px;">
        <table id="dataTable11" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SNO.</th>
                    <th>BeginDate</th>
                    <th>Registration No</th>
                    <th>Name</th>
                    <th>MidName</th>
                    <th>LastName</th>
                    <th>Marital Status</th>
                    <th>DOB</th>
                    <th>Mobile</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Campus</th>
                    <th>SLET Examination</th>
                    <th>SLET Qualified</th>
                    <th>SLET Validity Period</th>
                    <th>JRF Examination</th>
                    <th>JRF Qualified</th>
                    <th>JRF Validity Period</th>
                    <th>CAT Examination</th>
                    <th>CAT Qualified</th>
                    <th>CAT Validity Period</th>
                    <th>Discipline 1</th>
                    <th>Discipline 2</th>
                    <th>Discipline 3</th>
                    <th>Father's/Mother's/Guardian Name</th>
                    <th>Father's/Mother's/Guardian Occupation</th>
                    <th>Father's/Mother's/Guardian Phone</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Disability</th>
                    <th>ACADEMICS year exp</th>
                    <th>ACADEMICS month exp</th>
                    <th>CORPORATE year exp</th>
                    <th>CORPORATE month exp</th>
                    <th>Why Jaipuria?</th>
                    <th>Agree to pay</th>
                    <th>Source</th>
                    <th>Flat/House number</th>
                    <th>Street/Sector</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>10th Year of Passing</th>
                    <th>10th Board</th>
                    <th>10th Mark</th>
                    <th>12th Year of Passing</th>
                    <th>12th Board</th>
                    <th>12th Mark</th>
                    <th>Graduation Year of Passing</th>
                    <th>Graduation College/University</th>
                    <th>Graduation Percentage/CGPA</th>
                    <th>POST GRADUATION Year</th>
                    <th>POST GRADUATION Course</th>
                    <th>POST GRADUATION University</th>
                    <th>POST GRADUATION Percentage</th>
                    <th>M.Phil GRADUATION Year</th>
                    <th>M.Phil GRADUATION Course</th>
                    <th>M.Phil GRADUATION University</th>
                    <th>M.Phil GRADUATION Percentage</th>
                    <th>OTHER Year</th>
                    <th>OTHER Course</th>
                    <th>OTHER College/Institute</th>
                    <th>OTHER University</th>
                    <th>OTHER Percentage/CGPA</th>
                    <th>DECLARATION Place</th>
                    <th>DECLARATION Date</th>
                    <th>Completion Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sqlGetData = "SELECT * FROM `jaipur_fellow_management_program` ORDER BY id DESC";
                $resultGetData = mysqli_query($conn, $sqlGetData);

                while ($rowGetData = mysqli_fetch_assoc($resultGetData)) {
                    $sqlGetDataa = "SELECT `name` FROM `jn_cities` WHERE id = '".$rowGetData['Perm_City']."'";
                    $resultGetDataa = mysqli_query($conn, $sqlGetDataa);
                    $rowGetDataa = mysqli_fetch_assoc($resultGetDataa);
                    $cityyy = $rowGetDataa['name'];

                    $sqlGetstate = "SELECT `name`,`code` FROM `jn_states` WHERE id = '".$rowGetData['Perm_State']."'";
                    $resultGetstate = mysqli_query($conn, $sqlGetstate);
                    $rowGetstate = mysqli_fetch_assoc($resultGetstate);
                    $state = $rowGetstate['name'];
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $rowGetData['BeginDate']; ?></td>
                    <td><?php echo $rowGetData['Registration_No']; ?></td>
                    <td><?php echo $rowGetData['Name']; ?></td>
                    <td><?php echo $rowGetData['MidName']; ?></td>
                    <td><?php echo $rowGetData['LastName']; ?></td>
                    <td><?php echo $rowGetData['Maritalstatus']; ?></td>
                    <td><?php echo $rowGetData['Dob']; ?></td>
                    <td><?php echo $rowGetData['Mobile']; ?></td>
                    <td><a href="https://jaipuria.ac.in/fpm/applynow/studentimages/<?php echo $rowGetData['phto_id_details']; ?>">
                        View Photo</a></td>
                    <td><?php echo $rowGetData['Email']; ?></td>
                    <td><?php echo $rowGetData['Password']; ?></td>
                    <td><?php echo $rowGetData['Select_Programme']; ?></td>
                    <td><?php echo $rowGetData['slet_examination']; ?></td>
                    <td><?php echo $rowGetData['slet_qualified']; ?></td>
                    <td><?php echo $rowGetData['slet_validity_period']; ?></td>
                    <td><?php echo $rowGetData['jrf_examination']; ?></td>
                    <td><?php echo $rowGetData['jrf_qualified']; ?></td>
                    <td><?php echo $rowGetData['jrf_validity_period']; ?></td>
                    <td><?php echo $rowGetData['cat_examination']; ?></td>
                    <td><?php echo $rowGetData['cat_qualified']; ?></td>
                    <td><?php echo $rowGetData['cat_validity_period']; ?></td>
                    <td><?php echo $rowGetData['discipline1']; ?></td>
                    <td><?php echo $rowGetData['discipline2']; ?></td>
                    <td><?php echo $rowGetData['discipline3']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Initialize DataTables -->
<script>
$(document).ready(function () {
    $('#dataTable11').DataTable({
        "paging": true, // Enable pagination
        "searching": true, // Enable search box
        "ordering": true, // Enable column sorting
        "info": true // Show info text
    });
});
</script>
