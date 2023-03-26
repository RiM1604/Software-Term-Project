<!-- Modal -->
<div class="modal fade" id="userloginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login As User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="assets/partials/_handleUserLogin.php" method="POST">
          <div class="mb-3">
              <label for="user_name" class="form-label">Username</label>
              <input type="text" class="form-control"  id="user_name" name="user_name">
          </div>
          <div class="mb-3">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" class="form-control" id="user_password" name="user_password">
              <div class="form-text">This page is for user login</div>
          </div>
          <button type="submit" class="btn btn-success" name="submit_user">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>