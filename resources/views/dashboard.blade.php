@extends('main')

@section('content')
<h1 class="mt-4">Widget Dragable Demo</h1>

<div class="container-fluid">
    <div id="swabableList" class="row">
        <div data-id="1" class="card border m-2 p-3 rounded-top col-sm-8">
            <div class="card-body">
                <canvas id="bar-chart" height="100"></canvas>
            </div>
        </div>
        <div data-id="2" class="card border m-2 p-3 rounded-top col-sm-8">
            <div class="card-body">
                <canvas id="line-chart" height="100"></canvas>
            </div>
        </div>
        <div data-id="3" class="card border m-2 p-3 rounded-top col-sm-3">
            <div class="card-body">
                <canvas id="pie-chart" height="100"></canvas>
            </div>
        </div>
        <div data-id="4" class="card border m-2 p-3 rounded-top col-sm-3">
            <div class="card-body">
                <canvas id="doughnut-chart" height="100"></canvas>
            </div>
        </div>
    </div>
</div>


<script>
    Sortable.create(swabableList, {
        group: "widget",
        swap: true,
        swapClass: "highlighted",
        animation: 150,
        store: {
            /**
             * Get the order of elements. Called once during initialization.
             * @param   {Sortable}  sortable
             * @returns {Array}
             */
            get: function (sortable) {
                var order = localStorage.getItem(sortable.options.group.name);
                return order ? order.split('|') : [];
            },

            /**
             * Save the order of elements. Called onEnd (when the item is dropped).
             * @param {Sortable}  sortable
             */
            set: function (sortable) {
                var order = sortable.toArray();
                localStorage.setItem(sortable.options.group.name, order.join('|'));
            }
        }
    });

    // Bar Chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
        labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
        datasets: [
            {
            label: "Population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
            data: [2478,5267,734,784,433]
            }
        ]
        },
        options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
        }
        }
    });

    // Line Chart
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
            datasets: [{
                data: [86,114,106,106,107,111,133,221,783,2478],
                label: "Africa",
                borderColor: "#3e95cd",
                fill: false
            }, {
                data: [282,350,411,502,635,809,947,1402,3700,5267],
                label: "Asia",
                borderColor: "#8e5ea2",
                fill: false
            }, {
                data: [168,170,178,190,203,276,408,547,675,734],
                label: "Europe",
                borderColor: "#3cba9f",
                fill: false
            }, {
                data: [40,20,10,16,24,38,74,167,508,784],
                label: "Latin America",
                borderColor: "#e8c3b9",
                fill: false
            }, {
                data: [6,3,2,2,7,26,82,172,312,433],
                label: "North America",
                borderColor: "#c45850",
                fill: false
            }
            ]
        },
        options: {
            title: {
            display: true,
            text: 'World population per region (in millions)'
            }
        }
    });

    // Pie Chart
    new Chart(document.getElementById("pie-chart"), {
        type: 'pie',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                data: [2478,5267,734,784,433]
            }]
        },
        options: {
        title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
        }
        }
    });

    // Doughnut Chart
    new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
        labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
        datasets: [
                {
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [2478,5267,734,784,433]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

</script>
@endsection
