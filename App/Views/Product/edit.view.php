<header class="masthead py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-white"><?= $data["data"]["product"]->name ?? '' ?></h1>
            <hr class="divider">
        </div>
    </div>
</header>
<div class="container px-4 py-4 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-8 align-self-baseline">
            <form id="add-product-form" method="post" action="/?c=product&a=edit&id=<?= $data["data"]["product"]->id ?? '' ?>">
                <div class="mb-3 row">
                    <label for="input-new-product-name" class="col-sm-2 col-form-label">Nazov produktu</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="input-new-product-name" class="form-control" value="<?= $data["data"]["product"]->name ?? '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="input-new-product-description" class="col-sm-2 col-form-label">Popis produktu</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" id="input-new-product-description" class="form-control" value="<?= $data["data"]["product"]->description ?? '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="input-new-product-price" class="col-sm-2 col-form-label">Cena produktu</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" name="price" id="input-new-product-price" class="form-control" value="<?= $data["data"]["product"]->price ?? '' ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="input-new-product-img" class="col-sm-2 col-form-label">URL adresa k obrazku</label>
                    <div class="col-sm-10">
                        <input type="text" name="img_path" id="input-new-product-img" class="form-control" value="<?= $data["data"]["product"]->img_path ?? '' ?>">
                    </div>
                </div>
                <div id="success-message"<?= (!$data["data"]["alert"]["isVisible"]) ? 'class="d-none"' : '' ?>>
                    <?= $data["data"]["alert"]["message"] ?>
                </div>
                <button type="submit" id="add-product" class="btn btn-outline-dark">Upravit produkt</button>
            </form>
        </div>
    </div>
</div>

<script>
    (() => {
        setTimeout(() => {
            const message = document.getElementById("success-message");
            if (message.classList.contains("d-none")) return;
            message.remove();
        }, 5000)

        // const validateProduct = (fieldsArr) => {
        //     let isValid = true;
        //
        //     fieldsArr.forEach((field) => {
        //         if (!field.value) isValid = false;
        //     });
        //
        //     return {
        //         isValid,
        //         message: "Data not valid!",
        //     }
        // };

        // document.getElementById("add-product").addEventListener("click", (e) => {
        //     e.preventDefault();
        //     const form = document.getElementById("add-product-form");
        //     const name = document.getElementById("input-new-product-name")
        //     const price = document.getElementById("input-new-product-price")
        //     const description = document.getElementById("input-new-product-description")
        //     const imagePath = document.getElementById("input-new-product-img")
        //
        //     const { isValid, message } = validateProduct([
        //         name, price, description, imagePath
        //     ]);
        //
        //     if (!isValid) {
        //         alert(message);
        //         return;
        //     }
        //
        //     form.submit();
        // });
    })()
</script>