<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<head>
    <title>
        :: News Detail
    </title>
    <style>
        div.container{
            max-width: 800px;
            height: auto;
            padding: 10px;
            background: #e6e5f4;
            visibility: visible;
        }
        div.title{
            margin: 10px;
            font-size: 30px;
            color: #49639a;
            font-family: Ubuntu, Arial Black;
            font-weight: bold;
            letter-spacing: 0.1em;
        }
        div.meta{
            margin: 10px;
            font-family: Ubuntu, Arial;
            font-size: 18px;
            color: #728fcc;
        }
        div.image{
            max-width: 800px;
            margin: 10px;
            border-color: #728fcc;
        }
        div.posts{
            max-width: 800px;
            margin: 10px;
            font-family: Ubuntu, Arial;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="<?=HOME_PATH?>news_PDO">Kembali</a>  
        <div class="title">
            <?=$data[0]['title']?>
        </div>
        <div class="meta">
            Post by : <?=$data[0]['author']?> at <?=$data[0]['created']?>
        </div>
        <div class="image">
            <img src="<?=HOME_PATH?>contents/img/<?=$data[0]['image']?>" width=100%>
        </div>
        <div class="posts">
            <?=$data[0]['posts']?>
        </div>  
    </div>
</body>
</html>