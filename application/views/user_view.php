<?php if(!$this->session->userdata('logged_in')) {
    redirect('user_controller/login_user');
}
?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

  <!-- Left Sidebar -->
  <div class="left-sidebar">
      <ul>
          <li><a href="../posts/index.html">Add Patient</a></li>
          <li><a href="index.html">Manage Patients</a></li>
          <!-- <li><a href="../topics/index.html"></a></li> -->
      </ul>
  </div>
  <!-- // Left Sidebar -->

<!-- Admin Content -->
<div class="admin-content">
  <div class="button-group">
      <a href="create.html" class="btn btn-big1">New Patient</a>
      <!-- <a href="index.html" class="btn btn-big">Manage Patients</a> -->
  </div>


  <div class="content">

      <h2 class="page-title">RECEPTIONIST</h2>
      <h4 class="page-title">Patient Records</h4>

      <table>
          <thead>
            <th>SN</th>
            <th>Patient Name</th>
            <th>Patient Gender</th>
            <th>Patient Mobile</th>
            <th>Patient Email</th>
            <th>Patient DOB</th>
            <th>Patient Age</th>
            <th>Patient ID/RegNo</th>
            <th>Blood Grp</th>
            <th>Occupation</th>
            <th>Opd number</th>
            <!-- <th>Next of Kin</th>
            <th>Triage</th>
            <th>Payment</th> -->
            <th style="text-align: center; background-color: #000;" colspan="5">Actions</th>
          </thead>
          <tbody>
              <tr>
  <?php  $number = 0; foreach($patients as $pat): $number++;?>
    <?php //if($this->session->userdata('username') == $user['username'] && $user['user_type'] === 'user'): ?>
      <tr>
  
          <td><?php echo $number; ?></td>
          <td><?php echo $pat['fullname']; ?></td>
          <td><?php echo $pat['gender']; ?></td>
          <td><?php echo $pat['mobile']; ?></td>
          <td><?php echo $pat['email']; ?></td>
          <td><?php echo $pat['dob']; ?></td>
          <td><?php echo $pat['dob']; ?></td>
          <td><?php echo $pat['reg_no']; ?></td>
          <td><?php echo $pat['bld_grp']; ?></td>
          <td><?php echo $pat['occupation']; ?></td>
          <td><?php echo $pat['opd_number']; ?></td>
          <td><input type="button" class="edit" value="Next of kin"></td>
          <td><input type="button" class="edit" value="Triage"></td>
          <td><input type="button" class="edit" value="Transaction"></td>
          <td><a href="<?php echo base_url(); ?>user_controller/edit_user/<?php echo $pat['id']; ?>" class="edit">Edit</a></td>
          <td><a href="<?php echo base_url(); ?>user_controller/delete_account/<?php echo $pat['id']; ?>" onclick="return confirm('Are you sure you want to delete this data')" class="delete">Delete</a></td>
      </tr>
      <?php //endif; ?>
    <?php endforeach;?>
              </tr>
          </tbody>
      </table>

  </div>

</div>
<!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->