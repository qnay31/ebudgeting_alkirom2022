// chart Bar Global program
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_program");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 700000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub cabang
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_program_depok);
        isi_data2.push(data[i].terpakai_program_depok);
        isi_data3.push(data[i].anggaran_program_bogor);
        isi_data4.push(data[i].terpakai_program_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_program");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [
                {
                    label: "Anggaran Depok",
                    backgroundColor: "#4e73df",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Depok",
                    backgroundColor: "#2eca6a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Bogor",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Bogor",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }

                
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar depok program
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_program_depok);
        isi_data2.push(data[i].terpakai_program_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_program");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar bogor program
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_program_bogor);
        isi_data2.push(data[i].terpakai_program_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_program");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 100000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart bar depok program pendidikan
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_pendidikan);
        isi_data2.push(data[i].terpakai_pendidikan);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_progPendidikan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart bar bogor program pendidikan
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_pendidikan_bogor);
        isi_data2.push(data[i].terpakai_pendidikan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_progPendidikan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart bar depok program kesehatan
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_kesehatan);
        isi_data2.push(data[i].terpakai_kesehatan);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_progKesehatan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart bar bogor program kesehatan
$.getJSON("https://edaily.alkiromamanah.com/data/program_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_kesehatan_bogor);
        isi_data2.push(data[i].terpakai_kesehatan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_progKesehatan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 20000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart bar paudqu
$.getJSON("https://edaily.alkiromamanah.com/data/paudqu_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_paudqu");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Logistik
$.getJSON("https://edaily.alkiromamanah.com/data/logistik_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_logistik");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub cabang logistik
$.getJSON("https://edaily.alkiromamanah.com/data/logistik_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_logistik_depok);
        isi_data2.push(data[i].terpakai_logistik_depok);
        isi_data3.push(data[i].anggaran_logistik_bogor);
        isi_data4.push(data[i].terpakai_logistik_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_logistik");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [
                {
                    label: "Anggaran Depok",
                    backgroundColor: "#4e73df",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Depok",
                    backgroundColor: "#2eca6a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Bogor",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Bogor",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }

                
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar depok Logistik
$.getJSON("https://edaily.alkiromamanah.com/data/logistik_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_logistik_depok);
        isi_data2.push(data[i].terpakai_logistik_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_logistik");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 20000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar bogor Logistik
$.getJSON("https://edaily.alkiromamanah.com/data/logistik_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_logistik_bogor);
        isi_data2.push(data[i].terpakai_logistik_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_logistik");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Aset Yayasan
$.getJSON("https://edaily.alkiromamanah.com/data/aset_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_aset_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub aset yayasan
$.getJSON("https://edaily.alkiromamanah.com/data/aset_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_pembangungan);
        isi_data2.push(data[i].terpakai_pembangunan);
        isi_data3.push(data[i].anggaran_pembelian);
        isi_data4.push(data[i].terpakai_pembelian);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_aset_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran Pembangunan",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Pembangunan",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Pembelian",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Pembelian",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Pembelian Barang
$.getJSON("https://edaily.alkiromamanah.com/data/aset_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_pembelian);
        isi_data2.push(data[i].terpakai_pembelian);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_pembelian_aset_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Pembangunan
$.getJSON("https://edaily.alkiromamanah.com/data/aset_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_pembangunan);
        isi_data2.push(data[i].terpakai_pembangunan);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_pembangunan_aset_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Uang Makan
$.getJSON("https://edaily.alkiromamanah.com/data/uang_makan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_uang_makan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub Uang Makan
$.getJSON("https://edaily.alkiromamanah.com/data/uang_makan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_uang_makan_depok);
        isi_data2.push(data[i].terpakai_uang_makan_depok);
        isi_data3.push(data[i].anggaran_uang_makan_bogor);
        isi_data4.push(data[i].terpakai_uang_makan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_uang_makan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran Depok",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Depok",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Bogor",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Bogor",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Depok Uang Makan
$.getJSON("https://edaily.alkiromamanah.com/data/uang_makan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_uang_makan_depok);
        isi_data2.push(data[i].terpakai_uang_makan_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_uang_makan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Bogor Uang Makan
$.getJSON("https://edaily.alkiromamanah.com/data/uang_makan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_uang_makan_bogor);
        isi_data2.push(data[i].terpakai_uang_makan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_uang_makan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Gaji Karyawan
$.getJSON("https://edaily.alkiromamanah.com/data/gaji_karyawan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_gaji_karyawan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 700000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub Gaji Karyawan
$.getJSON("https://edaily.alkiromamanah.com/data/gaji_karyawan_2022.php", function (data) {

    var isi_labels  = [];
    var isi_data    = [];
    var isi_data2   = [];
    var isi_data3   = [];
    var isi_data4   = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_gaji_karyawan_depok);
        isi_data2.push(data[i].terpakai_gaji_karyawan_depok);
        isi_data3.push(data[i].anggaran_gaji_karyawan_bogor);
        isi_data4.push(data[i].terpakai_gaji_karyawan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_gaji_karyawan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran Depok",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Depok",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Bogor",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Bogor",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Depok Gaji Karyawan
$.getJSON("https://edaily.alkiromamanah.com/data/gaji_karyawan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_gaji_karyawan_depok);
        isi_data2.push(data[i].terpakai_gaji_karyawan_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_gaji_karyawan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Bogor Gaji Karyawan
$.getJSON("https://edaily.alkiromamanah.com/data/gaji_karyawan_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_gaji_karyawan_bogor);
        isi_data2.push(data[i].terpakai_gaji_karyawan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_gaji_karyawan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Biaya Lainnya
$.getJSON("https://edaily.alkiromamanah.com/data/biaya_lainnya_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_anggaran_lain");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub Biaya Lainnya
$.getJSON("https://edaily.alkiromamanah.com/data/biaya_lainnya_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_anggaran_lain_depok);
        isi_data2.push(data[i].terpakai_anggaran_lain_depok);
        isi_data3.push(data[i].anggaran_anggaran_lain_bogor);
        isi_data4.push(data[i].terpakai_anggaran_lain_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_anggaran_lain");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran Depok",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Depok",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Bogor",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Bogor",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Depok Biaya Lainnya
$.getJSON("https://edaily.alkiromamanah.com/data/biaya_lainnya_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_anggaran_lain_depok);
        isi_data2.push(data[i].terpakai_anggaran_lain_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_anggaran_lain");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Bogor Biaya Lainnya
$.getJSON("https://edaily.alkiromamanah.com/data/biaya_lainnya_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_anggaran_lain_bogor);
        isi_data2.push(data[i].terpakai_anggaran_lain_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_anggaran_lain");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 20000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global maintenance
$.getJSON("https://edaily.alkiromamanah.com/data/maintenance_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_maintenance");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 250000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub maintenance
$.getJSON("https://edaily.alkiromamanah.com/data/maintenance_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_maintenance_aset);
        isi_data2.push(data[i].terpakai_maintenance_aset);
        isi_data3.push(data[i].anggaran_maintenance_gedung);
        isi_data4.push(data[i].terpakai_maintenance_gedung);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_maintenance");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran Maintenance Aset",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Maintenace Aset",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Maintenance Gedung",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Maintenance Gedung",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 250000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar gedung maintenance
$.getJSON("https://edaily.alkiromamanah.com/data/maintenance_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_maintenance_gedung);
        isi_data2.push(data[i].terpakai_maintenance_gedung);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_gedung_maintenance");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 250000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar aset maintenance
$.getJSON("https://edaily.alkiromamanah.com/data/maintenance_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_maintenance_aset);
        isi_data2.push(data[i].terpakai_maintenance_aset);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_aset_maintenance");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Operasional
$.getJSON("https://edaily.alkiromamanah.com/data/operasional_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_global);
        isi_data2.push(data[i].terpakai_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_operasional_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Terpakai",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 20000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar sub Operasional
$.getJSON("https://edaily.alkiromamanah.com/data/operasional_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];
    var isi_data4 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_operasional_yayasan_depok);
        isi_data2.push(data[i].terpakai_operasional_yayasan_depok);
        isi_data3.push(data[i].anggaran_operasional_yayasan_bogor);
        isi_data4.push(data[i].terpakai_operasional_yayasan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_operasional_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran Depok",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Pemakaian Depok",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                },

                {
                    label: "Anggaran Bogor",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data3,
                },

                {
                    label: "Terpakai Bogor",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data4,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Depok operasional
$.getJSON("https://edaily.alkiromamanah.com/data/operasional_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_operasional_yayasan_depok);
        isi_data2.push(data[i].terpakai_operasional_yayasan_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_depok_operasional_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Terpakai",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Bogor operasional
$.getJSON("https://edaily.alkiromamanah.com/data/operasional_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].anggaran_operasional_yayasan_bogor);
        isi_data2.push(data[i].terpakai_operasional_yayasan_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_operasional_yayasan");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Anggaran",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                },

                {
                    label: "Terpakai",
                    backgroundColor: "#2eca6a",
                    hoverBackgroundColor: "#2eca1a",
                    borderColor: "#2eca6a",
                    data: isi_data2,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 10000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global income media sosial
$.getJSON("https://edaily.alkiromamanah.com/data/pemasukanMedia_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].income_global);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_global_incMedia");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Income",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#4154f1",
                    borderColor: "#4e73df",
                    data: isi_data,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 1400000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart sub gedung income media sosial
$.getJSON("https://edaily.alkiromamanah.com/data/pemasukanMedia_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];
    var isi_data2 = [];
    var isi_data3 = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].income_depok);
        isi_data2.push(data[i].income_bogor);
        isi_data3.push(data[i].income_instagram);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_sub_income");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Facebook Depok",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data,
                },
                {
                    label: "Facebook Bogor",
                    backgroundColor: "#008000",
                    borderColor: "#008000",
                    data: isi_data2,
                },
                {
                    label: "Instagram",
                    backgroundColor: "#00CED1",
                    borderColor: "#00CED1",
                    data: isi_data3,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar fb depok income media sosial
$.getJSON("https://edaily.alkiromamanah.com/data/pemasukanMedia_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].income_depok);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_a_incMedia");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Income",
                    backgroundColor: "#FF0000",
                    borderColor: "#FF0000",
                    data: isi_data,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar bogor income media sosial
$.getJSON("https://edaily.alkiromamanah.com/data/pemasukanMedia_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].income_bogor);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_bogor_incMedia");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Income",
                    backgroundColor: "#008000",
                    borderColor: "#008000",
                    data: isi_data,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar instagram income media sosial
$.getJSON("https://edaily.alkiromamanah.com/data/pemasukanMedia_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].income_instagram);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_instagram_incMedia");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Income",
                    backgroundColor: "#00CED1",
                    borderColor: "#00CED1",
                    data: isi_data,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Non resi income media sosial
$.getJSON("https://edaily.alkiromamanah.com/data/pemasukanMedia_2022.php", function (data) {

    var isi_labels = [];
    var isi_data = [];

    // console.log(isi_data2);

    $(data).each(function (i) {
        isi_labels.push(data[i].bulan);
        isi_data.push(data[i].income_tanpaResi);
    });

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Bar Chart Example
    var ctx = document.getElementById("chartBar_nonResi_incMedia");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: isi_labels,
            datasets: [{
                    label: "Income",
                    backgroundColor: "#FF00FF",
                    borderColor: "#FF00FF",
                    data: isi_data,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 12
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 500000000,
                        maxTicksLimit: 10,
                        callback: function (value, index, values) {
                            if (parseInt(value) > 999) {
                                return 'Rp. ' + value.toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else if (parseInt(value) < -999) {
                                return '-Rp. ' + Math.abs(value).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ".");
                            } else {
                                return 'Rp. ' + value;
                            }
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#e0e0e0',
                titleFontSize: 14,
                backgroundColor: "rgb(32,32,32)",
                bodyFontColor: "#e0e0e0",
                borderColor: '#202020',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label ||
                            '';
                        return datasetLabel + ': Rp. ' + Number(tooltipItem.yLabel)
                            .toFixed(0)
                            .replace(/./g,
                                function (c,
                                    i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." +
                                        c : c;
                                });
                    }
                }
            },
        }
    });
});

// chart Bar Global Jasa
$.getJSON(
    "https://edaily.alkiromamanah.com/data/jasa_2022.php",
    function (data) {
        var isi_labels = [];
        var isi_data = [];
        var isi_data2 = [];

        // console.log(isi_data2);

        $(data).each(function (i) {
            isi_labels.push(data[i].bulan);
            isi_data.push(data[i].anggaran_global);
            isi_data2.push(data[i].terpakai_global);
        });

        // Set new default font family and font color to mimic Bootstrap's default styling
        (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = "#858796";

        // Bar Chart Example
        var ctx = document.getElementById("chartBar_global_jasa");
        var myBarChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: isi_labels,
                datasets: [{
                        label: "Anggaran",
                        backgroundColor: "#4e73df",
                        hoverBackgroundColor: "#4154f1",
                        borderColor: "#4e73df",
                        data: isi_data,
                    },

                    {
                        label: "Pemakaian",
                        backgroundColor: "#2eca6a",
                        hoverBackgroundColor: "#2eca1a",
                        borderColor: "#2eca6a",
                        data: isi_data2,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0,
                    },
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "month",
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 12,
                        },
                        maxBarThickness: 25,
                    }, ],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 50000000,
                            maxTicksLimit: 10,
                            callback: function (value, index, values) {
                                if (parseInt(value) > 999) {
                                    return (
                                        "Rp. " +
                                        value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                                    );
                                } else if (parseInt(value) < -999) {
                                    return (
                                        "-Rp. " +
                                        Math.abs(value)
                                        .toString()
                                        .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                                    );
                                } else {
                                    return "Rp. " + value;
                                }
                            },
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2],
                        },
                    }, ],
                },
                legend: {
                    display: false,
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: "#e0e0e0",
                    titleFontSize: 14,
                    backgroundColor: "rgb(32,32,32)",
                    bodyFontColor: "#e0e0e0",
                    borderColor: "#202020",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    callbacks: {
                        label: function (tooltipItem, chart) {
                            var datasetLabel =
                                chart.datasets[tooltipItem.datasetIndex].label || "";
                            return (
                                datasetLabel +
                                ": Rp. " +
                                Number(tooltipItem.yLabel)
                                .toFixed(0)
                                .replace(/./g, function (c, i, a) {
                                    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ?
                                        "." + c :
                                        c;
                                })
                            );
                        },
                    },
                },
            },
        });
    }
);