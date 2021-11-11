import AbstractView from './AbstractView.js';
export default class extends AbstractView {
  constructor() {
    super();
    // this.setTitle('Event');
  }
  async getHtml() {
    // var ajax = new XMLHttpRequest();
    // ajax.open('GET', 'event.html', false);
    // ajax.send();
    // document.body.innerHTML += ajax.responseText;
    return `
  <head>
    
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <div id="login-box">
      <div class="left">
        <h1>Đăng ký</h1>

        <input type="text" name="username" placeholder="Username" />
        <input type="text" name="email" placeholder="E-mail" />
        <input type="password" name="password" placeholder="Password" />
        <input
          type="password"
          name="password2"
          placeholder="Nhập lại password"
        />

        <input type="submit" name="signup_submit" value="Đăng ký"/>
      </div>

      <div class="right">
        <h1 class="loginwith">Đăng nhập</h1>

        <button class="social-signin facebook">Đăng nhập với facebook</button>
        <button class="social-signin twitter">Đăng nhập với Twitter</button>
        <button class="social-signin google">Đăng nhập với Google+</button>
      </div>
      <div class="or">OR</div>
    </div>
  </body>
    `;
  }
}
