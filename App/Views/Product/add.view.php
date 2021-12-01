<header class="masthead py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-white">Extreme Skateshop</h1>
            <hr class="divider">
        </div>
    </div>
</header>
<div class="container px-4 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-8 align-self-baseline">
            <form id="add-product-form" method="post" action="/?c=product&a=add">
                <div class="mb-3 row">
                    <label for="input-new-product-name" class="col-sm-2 col-form-label">Nazov produktu</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="input-new-product-name" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="input-new-product-description" class="col-sm-2 col-form-label">Popis produktu</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" id="input-new-product-description" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="input-new-product-price" class="col-sm-2 col-form-label">Cena produktu</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" id="input-new-product-price" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="input-new-product-img" class="col-sm-2 col-form-label">Nazov obrazku v zlozke</label>
                    <div class="col-sm-10">
                        <input type="text" name="img_path" id="input-new-product-img" class="form-control">
                    </div>
                </div>
                <button type="submit" id="add-product" class="btn btn-outline-dark">Pridať produkt</button>

            </form>
        </div>
    </div>
</div>