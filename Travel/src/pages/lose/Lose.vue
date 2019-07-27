<template>
    <div>
        <div class="htmleaf-container">
            <div class="wrapper">
                <div class="container">
                    <span class="iconfont">&#xe641;</span>
                    <div v-show="showHint" class="hint_word">
                        <p>{{errHint}}</p>
                    </div>
                    <form>
                        <input type="text" name="Uname" placeholder="请输入账号" v-model="Uname">
                        <input type="text" name="Uemail" placeholder="请输入邮箱" v-model="Uemail" autocomplete="on">
                        <input type="button" value="找回密码" class="lose" @click="lose"/>
                        <div class="login-bottom">
                            <router-link to="/login">
                                <span class="login-left">登陆</span>
                            </router-link>
                            <router-link to="/register">
                                <span class="login-right">注册</span>
                            </router-link>
                        </div>
                        <div class="footer-word">我们将协助您通过邮箱找回密码</div>
                    </form>
                </div>
                <ul class="bg-bubbles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'lose',
  data () {
    return {
      Uemail: '',
      Uname: '',
      showHint: false,
      errHint: '密码错误'
    }
  },
  methods: {
    lose () {
      axios.post('/home/login/getLost', {
        Uemail: this.Uemail,
        Uname: this.Uname
      })
        .then((response) => {
          let data = response.data
          this.showHint = true
          this.errHint = data.message
          let _this = this
          setTimeout(function () {
            _this.showHint = false
          }, 3000)
          if (data.code < 0) {
          } else {
            this.$router.push({path: '/login'})
          }
          console.log(response)
        })
        .catch(function (error) {
          console.log(error)
        })
    }
  }
}
</script>
<style scoped>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-weight: 300;
    }
    body {
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        font-weight: 300;
    }
    body ::-webkit-input-placeholder {
        /* WebKit browsers */
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        font-weight: 300;
    }
    body :-moz-placeholder {
        /* Mozilla Firefox 4 to 18 */
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
    }
    body ::-moz-placeholder {
        /* Mozilla Firefox 19+ */
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
    }
    body :-ms-input-placeholder {
        /* Internet Explorer 10+ */
        font-family: 'Source Sans Pro', sans-serif;
        color: white;
        font-weight: 300;
    }
    input::-webkit-input-placeholder {
        color: bisque;
        font-size:20px;
        font-family:kaiti;
    }
    .wrapper {
        background: #50a3a2;
        background: -webkit-linear-gradient(top left, #009688 0%, #009688 100%);
        background: linear-gradient(to bottom right, #009688 0%, #009688 100%);
        opacity: 0.8;
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;

    }
    .wrapper.form-success .container h1 {
        -webkit-transform: translateY(85px);
        -ms-transform: translateY(85px);
        transform: translateY(85px);
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px 0;
        height: 400px;
        text-align: center;
    }
    .container h1 {
        font-size: 30px;
        -webkit-transition-duration: 1s;
        transition-duration: 1s;
        /*-webkit-transition-timing-function: ease-in-put;*/
        /*transition-timing-function: ease-in-put;*/
        font-weight: 200;
    }
    .hint_word {
        color: white;
        font-size: 10px;
        background: rgba(7, 17, 27, 0.66);
        z-index:4;
        width:130px;
        height:50px;
        line-height:50px;
        position: absolute;
        left:50%;
        margin-left:-65px;
        top:50%;
        border-radius :6%
    }
    .iconfont{
        font-size:50px;
    }
    form {
        padding: 20px 0;
        position: relative;
        z-index: 2;
        margin-top:10px;
    }
    form input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background-color: rgba(255, 255, 255, 0.2);
        width: 250px;
        border-radius: 3px;
        padding: 10px 15px;
        margin: 0 auto 10px auto;
        display: block;
        text-align: center;
        font-size: 18px;
        color: white;
        -webkit-transition-duration: 0.25s;
        transition-duration: 0.25s;
        font-weight: 400;
    }
    .lose{
        margin-top:50px;
        border-radius :10px;
    }
    .login-bottom{
        margin-top:50px;
        width:250px;
        margin:auto;
    }
    .login-left{
        color:white;
        float:left;
    }
    .login-right{
        color:white;
        float:right;
    }
    .footer-word{
        margin:100px auto;
        width:250px;
        color:navajowhite;

    }
    form input:hover {
        background-color: rgba(255, 255, 255, 0.4);
    }
    form input:focus {
        background-color: white;
        width: 300px;
        color: #53e3a6;
    }
    form button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        background-color: white;
        border: 0;
        padding: 10px 15px;
        color: #53e3a6;
        border-radius: 3px;
        width: 250px;
        cursor: pointer;
        font-size: 18px;
        -webkit-transition-duration: 0.25s;
        transition-duration: 0.25s;
    }
    form button:hover {
        background-color: #f5f7f9;
    }
    .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
    }
    .bg-bubbles li:nth-child(1) {
        left: 10%;
    }
    .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 17s;
        animation-duration: 17s;
    }
    .bg-bubbles li:nth-child(3) {
        left: 25%;
        -webkit-animation-delay: 4s;
        animation-delay: 4s;
    }
    .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        -webkit-animation-duration: 22s;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
    }
    .bg-bubbles li:nth-child(5) {
        left: 70%;
    }
    .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
    }
    .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
    }
    .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        -webkit-animation-delay: 15s;
        animation-delay: 15s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
    }
    .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
    }
    .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 11s;
        animation-delay: 11s;
    }
    @-webkit-keyframes square {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
        }
    }
    @keyframes square {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
        }
    }
</style>
