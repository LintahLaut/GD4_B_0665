<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h1>Add Movie</h1>
    </div>
    <body>
        <div class="bg bg-light text-dark">
            <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                <div class="card text-white bg-dark ma-5 shadow " style="min-width: 25rem;">
                    <div class="card-header fw-bold">Add Movie</div>
                    <div class="card-body">
                        <form action="../process/addMoviesProcess.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputJudul" class="form-label">Judul</label>
                                <input class="form-control" id="name" name="name" aria-describedby="NameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputGenre" class="form-label">Genre</label>
                                <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                                    <option selected disabled hidden value="">Pilih Genre</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Action">Action</option>
                                    <option value="Thriler">Thriler</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Scifi">Sci-fi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputRealese" class="form-label">Realese</label>
                                <input type="Number" class="form-control" id="realese" name="realese">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputSeason" class="form-label">Season</label>
                                <input type="Number" class="form-control" id="season" name="season">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputSynopsis" class="form-label">Synopsis</label>
                                <input class="form-control" id="synopsis" name="synopsis" aria-describedby="synopsisHelp">
                            </div>
                            <div class="d-grid gap-2">
                                <button style="background-color:Grey" type="submit" class="btn btn-primary" name="addMovie">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>