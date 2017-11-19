<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>ZOO</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>
<header>
    <div class="loader" style="display: none;">
        <div class="loader_inner" style="display: none;"></div>
    </div>
</header>

<section>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Добавить запись</div>
            <div class="panel-body">
                <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Добавить</button>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Добавить запись</h4>
                    </div>
                    <div class="modal-body">

                        <form action="/add.php" class="form-horizontal" method="post">
                            <h4>Выберите студента</h4>
                            <div class="form-group" >
                                <label class="control-label col-sm-2" >Студент:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="student_id">
                                        <option value="1">Иван</option>
                                        <option value="2">Петр</option>
                                    </select>
                                </div>
                            </div>
                            <h4>Выберите животного</h4>
                            <div class="form-group" >
                                <label class="control-label col-sm-2" >Животное:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="animal_id">
                                        <option value="1">Лев</option>
                                        <option value="2">Жираф</option>
                                        <option value="3">Обезьяна</option>
                                    </select>
                                </div>
                            </div>
                            <h4>Выберите пищу</h4>
                            <div class="form-group" >
                                <label class="control-label col-sm-2" >Еда:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="food_id">
                                        <option value="1">Трава</option>
                                        <option value="2">Банан</option>
                                        <option value="3">Мясо</option>
                                    </select>
                                </div>
                            </div>
                            <h4>Введите количество пищи</h4>
                            <div class="form-group" >
                                <label class="control-label col-sm-2" >Количество:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required="required" name="quantity_food">
                                </div>
                            </div>
                            <h3>Введите дату</h3>
                            <div class="form-group" >
                                <label class="control-label col-sm-2" >Дата:</label>
                                <div class="col-sm-10">
                                    <input type="date" name="data_add" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-7">
                                    <button type="submit" class="btn btn-default" id="quantityFood">Добавить</button>
                                </div>
                            </div>
                            <div class="result"></div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>

            </div>
        </div>


        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">Сколько раз кормили</a></li>
            <li><a data-toggle="tab" href="#menu2">Сколько было съедено</a></li>
        </ul>

        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <form action="/student.php" class="form-horizontal" method="post">
                    <h3>Выберите студента</h3>
                    <div class="form-group" >
                        <label class="control-label col-sm-2" >Студент:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="student_id">
                                <option value="1">Иван</option>
                                <option value="2">Петр</option>
                            </select>
                        </div>
                    </div>
                    <h3>Выберите интервал</h3>
                    <div class="form-group" >
                        <label class="control-label col-sm-2" >Интервал:</label>
                        <label class="control-label col-sm-1" >C:</label>
                        <div class="col-sm-4">
                            <input type="date" name="data_before" required="required" class="form-control">
                        </div>
                        <label class="control-label col-sm-1" >До:</label>
                        <div class="col-sm-4">
                            <input type="date" name="data_after" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                            <button type="submit" class="btn btn-default" id="submitStudent">Показать</button>
                        </div>
                    </div>

                    <div class="result"></div>
                </form>
            </div>
            <div id="menu2" class="tab-pane fade">
                <form action="/food.php" class="form-horizontal" method="post">
                    <h3>Выберите еду</h3>
                    <div class="form-group" >
                        <label class="control-label col-sm-2" >Еда:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="food_id">
                                <option value="1">Трава</option>
                                <option value="2">Банан</option>
                                <option value="3">Мясо</option>
                            </select>
                        </div>
                    </div>
                    <h3>Выберите интервал</h3>
                    <div class="form-group" >
                        <label class="control-label col-sm-2" >Интервал:</label>
                        <label class="control-label col-sm-1" >C:</label>
                        <div class="col-sm-4">
                            <input type="date" name="data_before" required="required" class="form-control">
                        </div>
                        <label class="control-label col-sm-1" >До:</label>
                        <div class="col-sm-4">
                            <input type="date" name="data_after" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                            <button type="submit" class="btn btn-default" id="submitFood">Показать</button>
                        </div>
                    </div>

                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>

</section>

<footer></footer>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="js/common.js"></script>
<script src="libs/bootstrap/bootstrap.min.js"></script>
</body>
</html>

