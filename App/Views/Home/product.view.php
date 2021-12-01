<header class="masthead py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-white">Skate Komplety</h1>
            <hr class="divider">
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach($data["data"] as $skate): ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="public/assets/img/<?= $skate->img_path ?>" alt="<?= $skate->name ?>"/>
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder"><?= $skate->name ?></h5>
                            <?= $skate->description ?>
                            <p><?= $skate->price ?> &euro;</p>
                        </div>
                    </div>
                    <div class="card-footer row p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center col"><a class="btn btn-outline-dark mt-auto">Upraviť</a></div>
                        <div class="text-center col"><a class="btn btn-outline-dark mt-auto" href="/?c=home&a=deleteProduct&id=<?= $skate->id; ?>">Zmazať</a></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div align="right">
            <a class="btn btn-new-product" href="/?c=product&a=add">Pridať produkt</a>
            <button class="btn btn-new-product">Vymazať celu kategoriu</button>
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
<!--<script>-->
<!--    (() => {-->
<!--        const validateProduct = (fieldsArr) => {-->
<!--            let isValid = true;-->
<!---->
<!--            fieldsArr.forEach((field) => {-->
<!--                if (!field.value) isValid = false;-->
<!--            });-->
<!---->
<!--            return {-->
<!--                isValid,-->
<!--                message: "Data not valid!",-->
<!--            }-->
<!--        };-->
<!---->
<!--        document.getElementById("add-product").addEventListener("click", (e) => {-->
<!--            e.preventDefault();-->
<!--            const form = document.getElementById("add-product-form");-->
<!--            const name = document.getElementById("input-new-product-name")-->
<!--            const price = document.getElementById("input-new-product-price")-->
<!--            const description = document.getElementById("input-new-product-description")-->
<!--            const imagePath = document.getElementById("input-new-product-img")-->
<!---->
<!--            const { isValid, message } = validateProduct([-->
<!--               name, price, description, imagePath-->
<!--            ]);-->
<!---->
<!--            if (!isValid) {-->
<!--                alert(message);-->
<!--                return;-->
<!--            }-->
<!---->
<!--            form.submit();-->
<!--        });-->
<!--    })()-->
<!--</script>-->