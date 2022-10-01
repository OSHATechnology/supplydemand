<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <div class="header d-flex w-100 justify-content-between mx-3 pb-2 gap-3">
            <div class="d-flex flex-column justify-content-between align-items-center text-center" style="width: 10%">
                <a class="navbar-brand" href="#">
                    <img src="/assets/images/logopidi.jpeg" alt="" class="img-fluid">
                </a>
                <div class="last-refresh">
                    <p>Last Refresh Date</p>
                    <p>03/20/2021</p>
                </div>
            </div>
            <div class="text-center align-self-center" style="width: 25%">
                <div class="d-flex flex-column justify-content-between">
                    <h3 class="dashboard-name">The Dashboard</h3>
                    <div class="d-flex justify-content-between gap-5 px-3 dashboard-name-detail">
                        <h5>Property 2</h5>
                        <h5>2-BR/1-BA</h5>
                    </div>
                </div>
            </div>
            <div class="justify-content-center" style="width: 30%">
                <div class="row gap-3">
                    <div class="col">
                        <div class="form-label">label</div>
                        <select name="" id="" class="form-select dark">
                            <option value="">Some Option</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="form-label">label</div>
                        <select name="" id="" class="form-select dark">
                            <option value="">Some Option</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="justify-content-center" style="width: 25%">
                <div class="d-flex flex-column gap-1">
                    <div class="form-group w-100">
                        <div class="form-label">label</div>
                        <div class="d-flex gap-3">
                            <input type="date" class="form-component w-100 black" />
                            <input type="date" class="form-component w-100 black" />
                        </div>
                    </div>
                    <div class="slidecontainer">
                        <input type="range" min="1" max="100" value="50" class="slider"
                            id="myRange">
                    </div>
                </div>
            </div>
        </div>
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
