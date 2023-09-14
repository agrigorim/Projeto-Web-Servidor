<div class="d-flex col-3 col-md-auto justify-content-center">
                        <div class="dropdown justify-content-center me-md-3 mb-md-0 mb-2 ">
                            <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="fa fa-user"></i></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" id="register" href="registro.html">Registro</a></li>
                                <li><a class="dropdown-item d-none" id="logout" href="#" onclick="logout();">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex col-md-auto justify-content-center d-none" id="cart">
                        <div class="me-md-3 mb-md-0 mb-2">
                            <a href="carrinho.html">
                                <button type="button" class="btn btn-danger position-relative">
                                    <i class="fa-solid fa-cart-shopping text-light"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark" id="cartCount">0</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input placeholder="Buscar" type="search" class="form-control" />
                    </form>
                    
                </div>
            </div>
        </header>