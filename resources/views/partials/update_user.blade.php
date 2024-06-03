<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update User Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update', ['id' => $user->id ?? '']) }}" method="POST" id="updateUserForm">
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter user name">
                    </div>
                
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role">
                            <option selected disabled>Select role</option>
                            <option value="admin">Admin</option>
                            <option value="cms_admin">CMS Admin</option>
                            <option value="nolitc_staff">NOLITC Staff</option>
                        </select>
                    </div>
                
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" aria-describedby="password-toggle">
                            <button class="btn btn-outline-secondary" type="button" id="password-toggle">Show</button>
                        </div>
                    </div>
                
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
