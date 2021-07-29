<div class="container">

    <button type="button" class="btn btn-warning mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
             viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
        </svg>
        Új tűzoltó készülék
    </button>


    <!-- Modal -->
    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="modalLabel" aria-hidden="true">
        <div ref="vuemodal" class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="modalLabel">Tűzoltó készülék hozzáadása</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div id="app">
                    <form novalidate action="{{ route('fireExtinguisherList.store') }}" method="POST"
                          @submit.prevent="onSubmit">
                        @csrf

                        <div class="modal-body">
                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="establishment" class="form-label fw-bold">Telephely</label>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" aria-label="establishment" name="establishment"
                                            id="establishment" v-model="establishment">
                                        <option selected>telephely</option>
                                        @foreach($establishments as $establishment)
                                            <option
                                                value="{{ $establishment->id }}">{{ $establishment->establishment }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="insideID" class="form-label fw-bold">Belső azonosító</label>
                                </div>
                                <div class="col-8">
                                    <input type="number" class="form-control" id="insideID" name="insideID"
                                           placeholder="belső azonosító" required v-model="insideID">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="place" class="form-label fw-bold">Készenléti helye</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="place" id="place"
                                           placeholder="készenléti helye" required v-model="place">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="typeID" class="form-label fw-bold">Készüléktípus</label>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" aria-label="typeID" name="typeID" id="typeID"
                                            v-model="typeID">
                                        <option selected>készüléktípus</option>
                                        @foreach($fire_extinguisher_types as $fire_extinguisher_type)
                                            <option
                                                value={{ $fire_extinguisher_type->id }}>{{ $fire_extinguisher_type->fire_extinguisher_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="serialNumber" class="form-label fw-bold">Gyári száma</label>
                                </div>
                                <div class="col-8">
                                    <input type="number" class="form-control" name="serialNumber" id="serialNumber"
                                           placeholder="gyári száma" required v-model="serialNumber">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="productionDate" class="form-label fw-bold">Gyártás</label>
                                </div>
                                <div class="col-8">
                                    <input type="date" class="form-control" name="productionDate"
                                           id="productionDate" required v-model="productionDate">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="comment" class="form-label fw-bold">Megjegyzés</label>
                                </div>
                                <div class="col-8">
                                    <textarea name="comment" class="form-control" id="comment" rows="3"
                                              placeholder="megjegyzés" v-model="comment"></textarea>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-4">
                                    <label for="comment" class="form-label fw-bold">Többszörösítés</label>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" aria-label="multiplication" name="multiplication"
                                            id="multiplication" v-model="multiplication">
                                        <option selected value="1">1</option>
                                        @for($i=2; $i<=10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                </svg>
                                Mentés
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
