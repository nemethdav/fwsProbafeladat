<template>
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

            <tr style="background-color: rgb(253, 245, 246)" v-for="row in rows" :key="row.id">
                <td style="border-left: 10px solid red">{{ row.id }}</td>
                <td>
                    <button type="button" class="btn btn-danger"><img
                        src="{{ asset('storage/fire-extinguisher-icon.png') }}"
                        alt="fire-extinguisher-icon"></button>
                    <br>
                    <button type="button" class="btn btn-danger m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                    </button>
                </td>
                <td>{{ row.serialNumber }}</td>
                <td>{{ row.place }}</td>
                <td>
                    <img src="{{ asset('storage/fire-extinguisher-red.png') }}" alt="fire-extinguisher">
                    {{ row.typeID }}
                </td>
                <td>{{ row.productionDate }}</td>
                <td>

                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>

                </td>
                <td></td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        data(){
            return{
                rows: []
            }
        },
        mounted() {
            var vm = this
            vm.rows = []
            fetch('http://127.0.0.1:8000/fireExtinguisherList')
                .then(function (response) { return response.json() })
            .then(function (rows) { vm.rows = rows })
        }
    }
</script>
