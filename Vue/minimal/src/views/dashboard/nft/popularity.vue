<script>
import getChartColorsArray from "@/common/getChartColorsArray";

export default {
    components: {
    },
    setup() {
        return {
            series: [{
                name: 'Like',
                data: [12.45, 16.2, 8.9, 11.42, 12.6, 18.1, 18.2, 14.16]
            }, {
                name: 'Share',
                data: [-11.45, -15.42, -7.9, -12.42, -12.6, -18.1, -18.2, -14.16]
            }],
            chartOptions: {
                chart: {
                    type: 'bar',
                    height: 260,
                    stacked: true,
                    toolbar: {
                        show: false
                    },
                },
                stroke: {
                    colors: "#000"
                },
                plotOptions: {
                    bar: {
                        columnWidth: '20%',
                        borderRadius: [4, 4]
                    },
                },
                colors: getChartColorsArray('["--vz-gray-200", "--vz-primary"]'),
                fill: {
                    opacity: 1
                },
                dataLabels: {
                    enabled: false,
                    textAnchor: 'top',
                },
                yaxis: {
                    labels: {
                        show: false,
                        formatter: function (y) {
                            return y.toFixed(0) + "%";
                        }
                    }
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                    labels: {
                        rotate: -90
                    }
                }
            },
        };
    },

};
</script>
<template>
    <BCard no-body>
        <BCardHeader class="border-0 pb-0">
            <h6 class="card-title mb-0">Popularity</h6>
            <apexchart class="apex-charts" height="240" dir="ltr" :series="series" :options="chartOptions"></apexchart>
        </BCardHeader>
    </BCard>
</template>