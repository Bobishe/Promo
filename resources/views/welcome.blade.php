<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.css">--}}
    <title>PROMO</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            background-color: #152349;
            font-family: 'Muli', sans-serif;
            margin: 0;
            position:fixed;
        }


        h2 {
            font-family: 'Damion', cursive;
            font-weight: 400;
            color: #d94272;
            font-size: 35px;
            text-align: center;
            position: relative;
        }

        h2:before {
            position: absolute;
            content: '';
            width: 100%;
            left: 0;
            top: 22px;
            background: #d94272;
            height: 1px;
        }

        h2 i {
            font-style: normal;
            background: #fff;
            position: relative;
            padding: 10px;
        }

        :focus {
            outline: none;
        }

        /* necessary to give position: relative to parent. */
        input[type="text"] {
            font: 15px/24px 'Muli', sans-serif;
            color: #fff;
            width: 100%;
            box-sizing: border-box;
            letter-spacing: 1px;
        }

        :focus {
            outline: none;x
        }

        .col-3 {
            float: left;
            width: 100%;
            position: relative;
            padding-top: 30px;
        }

        /* necessary to give position: relative to parent. */
        input[type="text"] {
            font: 15px/24px "Lato", Arial, sans-serif;
            color: #fff;
            background-color: #d94272;
            width: 100%;
            box-sizing: border-box;
            letter-spacing: 1px;
        }


        .effect-20 ~ .focus-border:before,
        .effect-20 ~ .focus-border:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #d94272;
            transition: 0.3s;
        }

        .effect-20 ~ .focus-border:after {
            top: auto;
            bottom: 0;
            left: auto;
            right: 0;
        }

        .effect-20 ~ .focus-border i:before,
        .effect-20 ~ .focus-border i:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 0;
            background-color: #d94272;
            transition: 0.4s;
        }

        .effect-20 ~ .focus-border i:after {
            left: auto;
            right: 0;
            top: auto;
            bottom: 0;
        }

        .effect-20:focus ~ .focus-border:before,
        .effect-20:focus ~ .focus-border:after,
        .has-content.effect-20 ~ .focus-border:before,
        .has-content.effect-20 ~ .focus-border:after {
            width: 100%;
            transition: 0.3s;
        }

        .effect-20:focus ~ .focus-border i:before,
        .effect-20:focus ~ .focus-border i:after,
        .has-content.effect-20 ~ .focus-border i:before,
        .has-content.effect-20 ~ .focus-border i:after {
            height: 100%;
            transition: 0.4s;
        }

        .effect-20 ~ label {
            position: absolute;
            left: 14px;
            width: 100%;
            top: 10px;
            color: #aaa;
            transition: 0.3s;
            z-index: -1;
            letter-spacing: 0.5px;
        }

        .effect-20:focus ~ label, .has-content.effect-20 ~ label {
            top: -18px;
            left: 0;
            font-size: 12px;
            color: #d94272;
            transition: 0.3s;
        }


    </style>
</head>
<body>

<form class="container-sm"
      style="margin-top: 55px; margin-left: 40px; padding: 20px; background-color:#162751; color:#fff; height: 90%">
    <div style="position: relative; top: 20%; ">
        <div class="col-3 input-effect">
            <input class="effect-20 style_text" type="text" placeholder="Ваше имя">
            <label>First Name</label>
            <span class="focus-border">
            	<i></i>
            </span>
        </div>
        <div class="col-3 input-effect">
            <input class="effect-20 style_text" type="text" placeholder="Фамилия">
            <label>First Name</label>
            <span class="focus-border">
            	<i></i>
            </span>
        </div>
        <div class="col-3 input-effect">
            <input class="effect-20 style_text" type="text" placeholder="№ Группы или Преподователь">
            <label>First Name</label>
            <span class="focus-border">
            	<i></i>
            </span>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>
