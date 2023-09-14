<div class="card rounded-3 mb-4">
  <div class="card-body p-4">
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-md-2 col-lg-2 col-xl-2">
          <img src="img/locations/${item.img}" class="img-fluid rounded-3" alt="Cotton T-shirt">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 text-center py-3 py-md-0">
          <p class="lead fw-normal mb-2">${item.nome}</p>
          <p class="text-muted">${item.desc}</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
          <button class="btn btn-link px-2" onclick="rQuant(${item.id})" data-item-id="${item.id}">
              <i class="fas fa-minus"></i>
          </button>
          <input id="form1" min="0" name="quantity" value="${itemQuantity}" type="number" class="form-control form-control-sm text-center" readonly />
          <button class="btn btn-link px-2" onclick="aQuant(${item.id})" data-item-id="${item.id}">
              <i class="fas fa-plus"></i>
          </button>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
          <h5 class="mb-0">R$ ${item.valor},00</h5>
        </div>
        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
          <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
        </div>
    </div>
  </div>
</div>