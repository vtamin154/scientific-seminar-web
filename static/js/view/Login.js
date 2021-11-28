import AbstractView from './AbstractView.js';
export default class extends AbstractView {
  constructor() {
    super();
    // this.setTitle('Event');
  }
  async getHtml() {
    // var ajax = new XMLHttpRequest();
    // ajax.open('GET', 'login.php', false);
    // ajax.send();
    // document.body.innerHTML = ajax.responseText;

    return `
  <head>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <form action="" method="post">
      <div id="login-box">
        <div class="left">
          <h1>Đăng nhập</h1>

          <input type="text" id="username" name="username" placeholder="Username" />

          <input type="password" id="password" name="password" placeholder="Password" />

          <input type="submit" name="signup_submit" value="Đăng nhập" />
        </div>
      </div>
    </form>
  </body>
    `;
  }
}
