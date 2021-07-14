<template>
    <div class="container">

        <button type="button" class="btn btn-warning mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
            </svg>
            Új tűzoltó készülék
        </button>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="staticBackdropLabel">Tűzoltó készülék hozzáadása</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="establishment" class="form-label fw-bold">Telephely</label>
                            </div>
                            <div class="col-8">
                                <select class="form-select" aria-label="establishment" name="establishment" id="establishment">
                                    <option value="1">Próbahely</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="insideID" class="form-label fw-bold">Belső azonosító</label>
                            </div>
                            <div class="col-8">
                                <input type="number" class="form-control" id="insideID" name="insideID" placeholder="belső azonosító">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="place" class="form-label fw-bold">Készenléti helye</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="place" id="place" placeholder="készenléti helye">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="typeID" class="form-label fw-bold">Készüléktípus</label>
                            </div>
                            <div class="col-8">
                                <select class="form-select" aria-label="typeID" name="typeID" id="typeID">
                                    <option selected>készüléktípus</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="serialNumber" class="form-label fw-bold">Gyári száma</label>
                            </div>
                            <div class="col-8">
                                <input type="number" class="form-control" name="serialNumber" id="serialNumber" placeholder="gyári száma">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="productionDate" class="form-label fw-bold">Gyártás</label>
                            </div>
                            <div class="col-8">
                                <input type="date" class="form-control" name="productionDate" id="productionDate">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="comment" class="form-label fw-bold">Megjegyzés</label>
                            </div>
                            <div class="col-8">
                                <textarea name="comment" class="form-control" id="comment" rows="3" placeholder="megjegyzés"></textarea>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <label for="comment" class="form-label fw-bold">Többszörösítés</label>
                            </div>
                            <div class="col-8">
                                <select class="form-select" aria-label="multiplication" name="multiplication" id="multiplication">
                                    <option selected>-</option>
                                    <option v-for='index in 10' :key="index" value="index">{{ index }} db</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                            </svg>
                            Mentés
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
