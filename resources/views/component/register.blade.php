<style>



</style>
<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="container">
            <div class="row">
              <div class="col-sm-6" id="imageForSignIn">
                <img src="{{ asset('assets/images/sign.png') }}" alt="" width="100%" />
              </div>
              <div class="col-sm-6">
                <form id="signInForm" class="mt-4" method="post">
                  @csrf
                  <div class="form-group">
                    <h3>Sign in to your account</h3>
                  </div>

                  <div class="form-group">
                    <p>Don't have an account? <a href="#" id="toggleSignUpForm">Sign Up</a></p>
                  </div>
                  
                  <div id="signIn_error" style="color: red; margin-top: 30px;"></div>

                  <div class="form-group" style="margin-top: 10px;">
                    <label for="email">Email</label>
                    <input type="email" id="signInemail" name="signInemail" class="form-control" required/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="signInpassword" name="signInpassword" class="form-control" required/>
                  </div>
                  <div class="form-group d-flex justify-content-end" style="margin-top: 30px;">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </div>
                  
                </form>

                <form id="signUpForm" class="mt-4" style="display: none;">
                  @csrf
                  <div class="form-group">
                    <h3>Create a new account</h3>
                  </div>

                  <div class="form-group">
                    <p>Already have an account? <a href="#" id="toggleSignInForm">Sign In</a></p>
                  </div>

                  <div id="signUp_error" style="color: red; margin-top: 30px;"></div>

                  <div class="form-group" style="margin-top: 10px;">
                    <label for="email">Email</label>
                    <input type="email" id="signUpemail" name="signUpemail" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="signUppassword" name="signUppassword" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="signUppasswordC">Confirm Password</label>
                    <input type="password" id="signUppasswordC" name="signUppasswordC" class="form-control" />
                  </div>
                  <div class="form-group d-flex justify-content-end" style="margin-top: 20px;">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                  </div>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>