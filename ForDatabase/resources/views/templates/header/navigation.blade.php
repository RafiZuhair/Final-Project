<div class="container" style="display: flexbox;">
    <div class="position-relative ms-5 me-5 mt-5">

        <!-- Admin Login -->
        <a href="#" class="position-absolute top-0 start-0 translate-middle text-white" style="text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal">Admin</a>
        <!-- Admin Form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login Admin</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="username" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/admin"><button type="button" class="btn btn-primary">Login</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dropdown for Menu -->
        <div class="dropdown">
            <a href="#" class="position-absolute top-0 start-100 translate-middle text-white" data-bs-toggle="dropdown" style="text-decoration:none">Menu</a>
            <ul class="dropdown-menu dropdown-menu-dark ">
                <li><a class="dropdown-item" href="/menu">Menu Tetap</a></li>
                <li><a class="dropdown-item" href="#">Menu Tidak Tetap</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="container" style="display: flexbox;">
    <!-- About -->
    <div class="position-relative ms-5 me-5 mt-5" style="transform: translate(0px, 600px);">
        <a href="/about" class="position-absolute top-100 start-0 translate-middle text-white" style="text-decoration:none">About</a>
        <!-- Contact -->
        <a href="/contact" class="position-absolute top-100 start-100 translate-middle text-white" style="text-decoration:none">Contact</a>
    </div>
</div>