<?= $this->include('template/header'); ?>


<div class="container bg-light-subtle">
    <form action="/login/authenticate" method="post">
        <div class="container mt-5 min-vh-100">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Login</h4>
                            <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form id="loginForm">
                                <div class="mb-3">
                                    <input type="text" id="username" name="username" placeholder="Username"
                                        class="form-control border-0 border-bottom" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" id="password" name="password" placeholder="Password"
                                        class="form-control border-0 border-bottom" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <small>Don't have an account? <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#registerModal">Register here</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registerForm">
                        <div class="mb-3">
                            <label for="registerName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="registerName"
                                placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="registerEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="registerPassword"
                                placeholder="Create a password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success"
                                onclick="validateForm('registerForm')">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="warningModalLabel">Warning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Please fill in all required fields!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function validateForm(formId) {
        const form = document.getElementById(formId);
        const inputs = form.querySelectorAll('input');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
            }
        });

        if (!isValid) {
            const warningModal = new bootstrap.Modal(document.getElementById('warningModal'));
            warningModal.show();
        } else {
            alert('Form submitted successfully!');
        }
    }
</script>
<br><br>
<footer class="text-center mt-4 py-3 bg-dark text-white">
    <p>&copy; 2025 IsraSaqiba || RavincennaMahardhika</p>
</footer>

</html>