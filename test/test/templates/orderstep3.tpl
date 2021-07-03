<fieldset id="os3">
    <legend class="orderstepname">
        <h2>
            Оформление заказа: дизайн обложки
        </h2>
    </legend>
    <!-- <h2>Дизайн обложки</h2> -->
    <!-- </legend> -->
    <form method="post" action="editus.php?do=orderstep4">
        <div class="entry-content">
            <label>
                <input type="radio" name="cover-option" value="load" checked>
                Загрузить свою обложку
            </label>
            <label>
                <input type="radio" name="cover-option" value="editor">
                Редактор обложки
            </label>

            <section id="loader">
                <div class="alert info" id="templatecover">
                    Загружаемое изображение должно быть в
                    <span style="font-weight: bold;">формате PDF с разрешением не менее 300 dpi.</span></br>
                    Размер обложки <span style="font-weight: bold;"><?php echo $cover_width . " х " . $cover_height . " мм"; ?></span></br>
                    Ширина корешка <span style="font-weight: bold;"><?php echo "$spine мм"; ?></span></br>
                </div>

                <div class="load-cover">
                    <div>
                        <div>
                            <div class="flex">
                                <input type="button" class="button red" id="uploadblock" value="Загрузить обложку" />
                                <p id="load-error"></p>
                                <input id="check-layouts" style="display: none" type="submit" class="button red" value="Проверить макеты">
                            </div>
                            <input type="file" id="uploadblock_file" accept=".pdf" style="display: none;" />
                        </div>
                    </div>

                    <!-- LOADING -->
                    <div class="loading-block" style="display: none;">
                        <div class="loadingio-spinner-rolling-ukqrsssj2un">
                            <div class="ldio-8024eleltpf">
                                <div></div>
                            </div>
                        </div>
                        <p class="loading-text">Файл загружен. Идет проверка...</p>
                    </div>

                    <p id="messerror" style="display: none;"></p>
                </div>
            </section>
            
            <!-- <input id="check-layouts" style="display: none" type="submit" class="button red" value="Проверить макеты"> -->
        </div> <!-- entry-content -->
        <input type="hidden" value="<?php echo $orderid; ?>" name="orderid" id="orderid">
    </form>
</fieldset>
<div class="iframe-container">
    <iframe src="<?php echo "/test/cover-editor/cover-editor.html?width=$cover_width&height=$cover_height&spine=$spine&orderid=$orderid&title=$title&author=$author"; ?>" allow="fullscreen" width="100%" height="1000"></iframe>
</div>