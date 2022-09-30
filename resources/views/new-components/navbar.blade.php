<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <div class="header row w-100">
            <div class="col d-flex flex-column justify-content-evenly">
                <a class="navbar-brand" href="#">Navbar</a>
                <div>
                    <p>Last Refresh Date</p>
                    <p>03/20/2021</p>
                </div>
            </div>
            <div class="col">
                <h3>The Dashboard</h3>
                <div class="d-flex">
                    <h5>Property 2</h5>
                    <h5>2-BR/1-BA</h5>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="form-group">
                        <div class="form-label">label</div>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <div class="form-label">label</div>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column">
                    <div class="form-group">
                        <div class="form-label">label</div>
                        <div class="d-flex">
                            <input type="date" class="form-control" />
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="slidecontainer">
                        <input type="range" min="1" max="100" value="50" class="slider"
                            id="myRange">
                    </div>
                </div>
            </div>
        </div>
        <hr class="nav-divider" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div> --}}
    </div>
</nav>
