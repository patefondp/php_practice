
      <form class="auth" action="">
        <fieldset>
          <legend>Авторизация</legend>
          <div class="auth__row">
            <label for="username">User name</label>
            <input class="auth__text" type="text" id="username" />
            <i class="auth__error">Don't contain (_,-, {}, $, 0-9)</i>
          </div>
          <div class="auth__row">
            <label for="usermail">User email</label>
            <input class="auth__text" type="text" id="useremail" />
          </div>
          <div class="auth__row">
            <label for="userpass">User password</label>
            <input class="auth__text" type="text" id="userpass" />
          </div>
          <label class="auth__check">
              Subscribe
              <input type="checkbox" id="usersubscribe"/>
          </label>
          <div class="auth__row">
            <button type="button" id='send_btn' class="auth__btn">Login</button>
        </div>
        </fieldset>
      </form>
      <script defer src="public/login.js"></script>
