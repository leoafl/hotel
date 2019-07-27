<template>
    <div>
        <div id="box">
            <!--<div class="b_head">-->
            <!--<span class="h_span">文津酒店智能客服</span>-->
            <!--</div>-->
            <div class="b_body">
                <div class="rotWord">
                    <span></span>
                    <p>您好，欢迎使用文津酒店智能客服很高兴为您服务！</p>
                </div>
            </div>

            <div class="b_footer">
                <input id="input" type="text" autocoplete="off"/>
                <div id="btn" @click="action">发送</div>
            </div>
        </div>
    </div>
</template>

<script>
    import $ from 'jquery'

    export default {
        name: 'OnlineContainer',
        methods: {
            action() {
                let text = $("#input")
                if (text.val() == "" || text.val == "") {
                    text.focus();
                    return;
                }
                $(".b_body").append(
                    "<div class='myWord'><span></span><p id='me'>" + text.val()
                    + "</p></div>")

                $.ajax({
                    type: "post",
                    url: "/home/Personal/onlineService",
                    data: {
                        "text": text.val()
                    },
                    success: function (data) {
                        // alert(data);
                        let item = data;
                        let userObj = eval("(" + item + ")");
                        // alert(userObj.text);
                        $(".b_body").append(
                            "<div id='s'><span></span><p id='rootChat'>"
                            + userObj.text + "</p></div>")

                    }
                });
            }
        }
    }
</script>

<style>
    #box {
        width: 100%;
        height: 651px;
        background-color: #f0ead8;
        margin-top: 41px;
        position: fixed;
        /*margin: 0 auto;*/
    }

    .b_body {
        width: 100%;
        /*height: 400px;*/
        padding: 20px;
        overflow: auto;
    }

    .rotWord {
        overflow: hidden;
    }

    .rotWord span {
        width: 40px;
        height: 40px;
        /*background: url(img/rot.png);*/
        float: left;
    }

    .rotWord p {
        float: left;
        padding: 5px;
        background: #d8d8ff;
        margin-left: -39px;
        border-radius: 8px;
        font-size: 16px;
        word-break: break-all;
        max-width: 220px;
    }

    #rootChat {
        float: left;
        padding: 10px;
        background: #d8d8ff;
        /*margin-left: 10px;*/
        border-radius: 8px;
        word-break: break-all;
        max-width: 220px;
    }

    .myWord {
        overflow: hidden;
    }

    .myWord span {
        width: 40px;
        height: 40px;
        float: right;
    }

    .myWord p {
        float: right;
        padding: 10px;
        background: #fff;
        margin-right: 10px;
        border-radius: 8px;
        word-break: break-all;
        max-width: 220px;
    }

    #me {
        float: right;
        /*padding: 10px;*/
        background: #d8d8ff;
        margin-left: 10px;
        border-radius: 8px;
        word-break: break-all;
        max-width: 220px;
    }

    .b_footer {
        width: 380px;
        height: 60px;
        padding: 20px;
        position: absolute;
        bottom: 0;
    }

    #input {
        width: 280px;
        height: 40px;
        background: rgba(0, 0, 0, .1);
        border-radius: 8px;
        text-indent: 10px;
        color: #5f3f3f;
        float: left;
        font-size: 18px;
        outline: none;
        overflow: hidden;
        border: none;
    }

    #btn {
        width: 70px;
        height: 40px;
        background: #009688;
        border-radius: 8px;
        user-select: none;
        text-align: center;
        line-height: 40px;
        float: right;
        font-size: 18px;
        cursor: pointer;
    }

    .b_body::-webkit-scrollbar {
        width: 4px;
    }


    .b_body::-webkit-scrollbar-track {
        background-color: #808080;
        border-radius: 2em;
    }

    .b_body::-webkit-scrollbar-thumb {
        background-color: #03a9f4;
        borde-radius: 2em;
    }

    .b_body::-webkit-scrollbar-track {
        background-color: #808080;
        borde-radius: 2em;
    }

    .b_body::-webkit-scrollbar-thumb {
        background-color: #03a9f4;
        border-radius: 2em;
    }
</style>