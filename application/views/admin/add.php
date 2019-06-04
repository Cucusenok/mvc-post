<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/add" method="post">
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                            <!--<div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>-->

							<div class="form-group">
                                <label>Видео-отзыв</label>
                                <textarea class="form-control" rows="3" name="youtube"></textarea>
                            </div>

								<div class="form-group">
                                <label>Имя клиента</label>
                                <textarea class="form-control" rows="3" name="client"></textarea>
                            </div>

                            <div class="form-group">
                            <label>Итоговая цена</label>
                            <textarea class="form-control" rows="3" name="price"></textarea>
                            </div>


              <div class="form-group">
              <label>Название страницы - title</label>
              <textarea class="form-control" rows="3" name="titlepage"></textarea>
              </div>

              <div class="form-group">
              <label>Описание страницы - description</label>
              <textarea class="form-control" rows="3" name="mdescription"></textarea>
              </div>


              <div class="form-group">
              <label>Ключевые слова - keywords</label>
              <textarea class="form-control" rows="3" name="keywds"></textarea>
              </div>




                            <div class="form-group">
                            <label>Изображение</label>
                            <input type="file" name="files[]" multiple="multiple" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
