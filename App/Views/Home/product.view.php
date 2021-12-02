<header class="masthead py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-white"><?= $data["data"]["category"]->name ?></h1>
            <hr class="divider">
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach($data["data"]["products"] as $product): ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= $product->img_path ?>" alt="<?= $product->name ?>"/>
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder"><?= $product->name ?></h5>
                            <?= $product->description ?>
                            <p><?= $product->price ?> &euro;</p>
                        </div>
                    </div>
                    <div class="card-footer row p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center col"><a class="btn btn-outline-dark mt-auto" href="/?c=product&a=edit&id=<?= $product->id; ?>">Upraviť</a></div>
                        <div class="text-center col"><a class="btn btn-outline-dark mt-auto" href="/?c=product&a=delete&id=<?= $product->id; ?>">Zmazať</a></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div align="right">
            <a class="btn btn-new-product" href="/?c=product&a=add&category_id=<?= $data["data"]["category"]->id ?>">Pridať produkt</a>
        </div>
    </div>
</section>


<!--NEW PRODUCT MODAL-->
<!--<div id="to-new-product" class="modal fade" role="dialog" style="display: none;">-->
<!--    <div class="modal-dialog">-->
<!---->
<!--        Modal content-->
<!--        <div class="modal-content">-->
<!--            <form id="add-product-form" method="post" action="/?c=product&a=addProduct">-->
<!--                <div class="modal-header">-->
<!--                    <h4 id="modal-name" class="modal-title" align="center">Pridaj novy produkt</h4>-->
<!--                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    <div class="row">-->
<!--                            <label for="input-new-product-name">Nazov produktu</label>-->
<!--                            <input type="text" name="name" id="input-new-product-name">-->
<!--                            <label for="input-new-product-description">Popis produktu</label>-->
<!--                            <input type="text" name="description" id="input-new-product-description">-->
<!--                            <label for="input-new-product-price">Cena produktu</label>-->
<!--                            <input type="number" name="price" id="input-new-product-price">-->
<!--                            <label for="input-new-product-img">Nazov obrazku v zlozke</label>-->
<!--                            <input type="text" name="img_path" id="input-new-product-img">-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="modal-footer form-group">-->
<!--                    <div class="text-center">-->
<!--                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Zatvoriť</button>-->
<!--                        <button type="submit" id="add-product" class="btn btn-outline-dark">Pridať produkt</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->

