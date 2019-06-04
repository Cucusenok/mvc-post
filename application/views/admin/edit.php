<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="text"><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></textarea>
                            </div>

                            <div class="form-group">
                            <label>Имя клиента</label>
                            <textarea class="form-control" rows="3" name="client"><?php echo htmlspecialchars($data['client'], ENT_QUOTES); ?></textarea>
                            </div>

                            <div class="form-group">
                            <label>Видео-отзыв</label>
                            <textarea class="form-control" rows="3" name="youtube"><?php echo htmlspecialchars($data['youtube'], ENT_QUOTES); ?></textarea>
                            </div>

                            <div class="form-group">
                            <label>Итоговая цена</label>
                            <textarea class="form-control" rows="3" name="price"><?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?></textarea>
                            </div>

                            <div class="form-group">
                            <label>Название страницы - title</label>
                            <textarea class="form-control" rows="3" name="titlepage"><?php echo htmlspecialchars($data['title'], ENT_QUOTES); ?></textarea>
                            </div>

                            <div class="form-group">
                           <label>Описание страницы - description</label>
                           <textarea class="form-control" rows="3" name="mdescription"><?php echo htmlspecialchars($data['mdescription'], ENT_QUOTES); ?></textarea>
                           </div>

                           <div class="form-group">
                           <label>Ключевые слова - keywords</label>
                           <textarea class="form-control" rows="3" name="keywds"><?php echo htmlspecialchars($data['keywords'], ENT_QUOTES); ?></textarea>
                           </div>

                            <div class="form-group">
                                <label>Изображение</label>
                                <input type="file" name="files[]" multiple="multiple" />
                            </div>



                            <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
