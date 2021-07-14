<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tűzoltó készülék üzemeltetési napló</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        h3 {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="app">
            <h3 class="text-danger mt-5">Tűzoltó készülék üzemeltetési napló</h3>

            <modal></modal>

            <div class="table-responsive text-center">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="4">Tűzoltó készülék</th>
                            <th>Gyártás</th>
                            <th colspan="4">Ellenőrzések időpontja</th>
                            <th>Karbantartás időpontja</th>
                            <th>Eszköz megj.</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Gyári szám</th>
                            <th>Készenléti helye</th>
                            <th>Típusa</th>
                            <th></th>
                            <th>I.<br>n.év</th>
                            <th>II.<br>n.év</th>
                            <th>III.<br>n.év</th>
                            <th>IV.<br>n.év</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: rgb(253, 245, 246)">
                            <td style="border-left: 10px solid red">1</td>
                            <td>
                                <button type="button" class="btn btn-danger"><img
                                        src="{{ asset('storage/fire-extinguisher-icon.png') }}"
                                        alt="fire-extinguisher-icon"></button>
                                <br>
                                <button type="button" class="btn btn-danger m-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                    </svg>
                                </button>
                            </td>
                            <td>6549646</td>
                            <td>FWS iroda</td>
                            <td>
                                <img src="{{ asset('storage/fire-extinguisher-red.png') }}" alt="fire-extinguisher">
                                Fire Stop - P 12 TBT
                            </td>
                            <td>2021. 01. 01.</td>
                            <td>
                                <span class="p-2 border border-secondary">
                                    07. 01. Ü
                                </span>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span class="p-2 border border-secondary">
                                    07. 01. A
                                </span>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="row">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>
                        Dokumentum készítése
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>

</body>
</html>
