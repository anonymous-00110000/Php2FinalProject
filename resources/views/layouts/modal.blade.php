<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
        <div class="modal-body text-style-13">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp">
                  <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <hr>
                <p class="text-center text-style-14"> For Demonstration Purposes Only</p>
                <p>
                <span class="text-style-13">Username:</span>&nbsp;<span class="text-style-14">username</span>
                </p>

                <span class="text-style-13">Password:</span>&nbsp;<span class="text-style-14">password</span>
        </div>
        <div class="modal-footer border-0">
          <button type="submit" class="btn btn-success rounded-pill text-style-14 btn-block">Enter</button>
        </div>
    </form>
      </div>
    </div>
  </div>
