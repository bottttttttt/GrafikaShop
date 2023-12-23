<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-fira_mono">

                    <div class="col">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">В корзине</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">В корзину</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-fira_mono font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small><?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 оценок | 1000+ отзывов</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Старая цена:</td>
                        <td><strike>1400Р</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Новая цена:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?? 0; ?></span>Р<small class="text-dark font-size-12"></small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Экономия:</td>
                        <td><span class="font-size-16 text-danger">300Р</span></td>
                    </tr>
                </table>
                <!---    !product price       -->


                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Доставка : Мар 29  - Апр 1</small>
                    <small>Издательство <a href="#">Эксмо </a>(4.5/5 | 18,198 оценок)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Доставка к покупателю - 107023</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-fira_mono">Кол-во</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

               
            </div>

            <div class="col-12">
            <br> <br>
                <h6 class="font-rubik">Описание</h6>
                <hr>
                <p class="font-rale font-size-14">Небесный остров, о котором ходят мифы и легенды, – вот следующая остановка в погоне за сокровищем . Но прежде команда Соломенной Шляпы высаживается на острове Джая, где им и предстоит выяснить, существует ли «земля в облаках» на самом деле и можно ли до нее добраться?..</p>
                <p class="font-rale font-size-14">Вы можете приобрести товар в наших офлайн магазинах или заказать онлайн с доставкой.</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>