// Based on example from:
// https://datatables.net/forums/discussion/49457
$(document).ready(function () {



    var table = $('#example2').DataTable({

        buttons: [{
            extend: 'excelHtml5',
            "text": 'Excelold',
            'footer': true,
            'header': true,
            exportOptions: {
                customizeData: function (d) {

                    var columns = table.columns().count();
                    var body = d.body;
                    var rowData = table.rows().data().toArray();
                    var grouped_array_index = rowData[0][2];


                    if (!(grouped_array_index == undefined)) { //don't run grouping logic if rows aren't grouped

                        var row_data_array = table.rows().data();
                        var iColspan = columns;
                        var sLastGroup = "";
                        var no_of_splices = 0;
                        var ageArray = [];

                        for (var i = 0, row_length = row_data_array.length; i < row_length; i++)

                        {

                            var sGroup = row_data_array[i][2];

                            var age = row_data_array[i][3];

                            if (sGroup !== sLastGroup) {
                                console.log(sGroup);

                                ageArray = [];
                                //
                                var table_data = [];

                                for (var $column_index = 0; $column_index < iColspan; $column_index++) {

                                    if ($column_index === 0) {

                                        table_data[$column_index] = sGroup;

                                    } else {
                                        table_data[$column_index] = '';
                                    }
                                }

                                body.splice(i + no_of_splices, 0, table_data);
                                no_of_splices++;
                                sLastGroup = sGroup;


                            }

                            if (sGroup == '') {

                                ageArray.push(parseInt(age));
                                var sum_ages = ageArray.reduce(function (a, b) {
                                    return a + b;
                                }, 0);
                                console.log(ageArray);

                                for (var $column_index = 0; $column_index < iColspan; $column_index++) {
                                    if ($column_index === 1) {
                                        table_data[$column_index] = sum_ages;
                                    }
                                }

                            } else {
                                ageArray.push(parseInt(age));
                                var sum_ages = ageArray.reduce(function (a, b) {
                                    return a + b;
                                }, 0);
                                // console.log(sum_ages);
                                for (var $column_index = 0; $column_index < iColspan; $column_index++) {
                                    if ($column_index === 1) {
                                        table_data[$column_index] = sum_ages;
                                    }
                                }
                            }
                        }
                    }
                }
            }

        }]
    });
});