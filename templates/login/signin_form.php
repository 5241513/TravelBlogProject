<div class="modal fade" id="modal-signin" aria-hidden="true" aria-labelledby="modal-signin-label" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="modal-signin-label">Sign up for free</h1>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="./login/member_handle.php" method="POST">
                    <input type="hidden" name="method" value="signup">

                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control rounded-3 shadow-none"
                            id="signin-floating-name" placeholder="user123" required>
                        <label for="signin-floating-name">User name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control rounded-3 shadow-none"
                            id="signin-floating-email" placeholder="name@example.com" required>
                        <label for="signin-floating-email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="check-password form-control rounded-3 shadow-none"
                            id="signin-floating-password" placeholder="Password" minlength="8" autocomplete="off"
                            required>
                        <label for="signin-floating-password">Password</label>
                        <div class="invalid-feedback">
                            <ul>
                                <li class="requirements my-1 leng">
                                    <i class="bi bi-x-circle red-text"></i>
                                    Your password must have at least 8 characters.
                                </li>
                                <li class="requirements my-1 big-letter">
                                    <i class="bi bi-x-circle red-text"></i>
                                    Your password must have at least 1 upper letter.
                                </li>
                                <li class="requirements my-1 num">
                                    <i class="bi bi-x-circle red-text"></i>
                                    Your password must have at least 1 number.
                                </li>
                                <li class="requirements my-1 special-char">
                                    <i class="bi bi-x-circle red-text"></i>
                                    Your password must have at least 1 special character.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password"
                            class="check-password-confirm form-control rounded-3 shadow-none"
                            id="signin-floating-password-confirm" placeholder="Password" minlength="8"
                            autocomplete="off" required>
                        <label for="signin-floating-password-confirm">Confirm Password</label>
                        <div class="invalid-feedback">
                            You have to enter the same password or valid password
                        </div>
                    </div>

                    <div class="form-check my-2 d-flex align-items-center">
                        <input class="form-check-input mt-0" type="checkbox" value="" id="flexCheckDefault"
                            data-bs-toggle="modal" data-bs-target="#modal-policy" required>
                        <label class="form-check-label ps-2" for="flexCheckDefault">
                            <p>I agree Privacy Policy</p>
                        </label>
                    </div>

                    <button class="check-password-submit w-100 my-2 btn btn-lg rounded-3 btn-secondary disabled"
                        type="submit">Sign
                        up</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the
                        <a class="border-bottom border-secondary" data-bs-toggle="modal" data-bs-target="#modal-policy">
                            Privacy Policy</a> .</small>
                </form>
            </div>
        </div>
    </div>
</div>