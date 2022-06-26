<!-- CSS only -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="js/jquery.min.js" ></script>
</head>
<body>
<style>
    .show_before_createtable{
        display:none;
    }
    .show_before_getid{
        display:none;
    }
</style>
<div class="container">
    <div class="row">
        <h1 style="width:100%;text-align:center;">Создать таблицу</h1>
        <div class="col-6">

            <button type="button" class="btn btn-primary createtable">Создать таблицу</button>
        </div>

        <div class="col-6">
            <input type="text" name="nametable" class="form-control" placeholder="Введите название таблицы" value="">
        </div>

    </div>
    <div class="row show_before_createtable">
        <h1 style="width:100%;text-align:center;">Добавить нового пользователя</h1>
        <div class="col-4">

            <button type="button" class="btn btn-primary adduser">Добавить</button>
        </div>

        <div class="col-4">
            <input type="text" name="name" class="form-control" placeholder="Введите Имя" value="">
            <input type="text" name="surname" class="form-control" placeholder="Введите Фамилию" value="">
            <input type="number" name="age" class="form-control" placeholder="Введите возраст" value="">
            <input type="email" name="email" class="form-control" placeholder="Введите почту" value="">
        </div>
        <div class="col-4">
            <span class="adduser_log"></span>
        </div>

    </div>
    <div class="row show_before_createtable">
        <h1 style="width:100%;text-align:center;">Пользователи</h1>
        <div class="col-4">

            <button type="button" class="btn btn-primary getid_user">Получить</button>
        </div>

        <div class="col-4 idlist">

        </div>
        <div class="col-4">
            <span class="idlist_log"></span>
        </div>



    </div>
    <div class="row show_before_createtable">
        <h1 style="width:100%;text-align:center;">Удалить выбранных пользователей</h1>
        <div class="col-4">

            <button type="button" class="btn btn-primary delete_user">Удалить </button>
        </div>

        <div class="col-8 alluser">

        </div>
    </div>
</div>
<script src="send.js"></script>
</body>

