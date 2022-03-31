<?php if ($nToday > 0) { ?>
<div class="card-body">
    <h5 class="card-title">LAPORAN GLOBAL <?= strtoupper($bToday); ?></h5>

    <div class="table-responsive">
        <table id="tabel-globalBulanan" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Program Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AngProgB) ?> <br> Depok : <?= number_format($AngProgD) ?>">
                        <?php if ($AngProg > 0) { ?>
                        <?= number_format($AngProg) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($TerProgB) ?> <br> Depok : <?= number_format($TerProgD) ?>">
                        <?php if ($TerProg > 0) { ?>
                        <?= number_format($TerProg) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($CashProgB) ?> <br> Depok : <?= number_format($CashProgD) ?>">
                        <?php if ($CashProg > 0) { ?>
                        <?= number_format($CashProg) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">2</td>
                    <td>PaudQu Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;">
                        <?php if ($AngPaud > 0) { ?>
                        <?= number_format($AngPaud) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($TerPaud > 0) { ?>
                        <?= number_format($TerPaud) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?php if ($CashPaud > 0) { ?>
                        <?= number_format($CashPaud) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">3</td>
                    <td>Logistik Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AngLogB) ?> <br> Depok : <?= number_format($AngLogD) ?>">
                        <?php if ($AngLog > 0) { ?>
                        <?= number_format($AngLog) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($TerLogB) ?> <br> Depok : <?= number_format($TerLogD) ?>">
                        <?php if ($TerLog > 0) { ?>
                        <?= number_format($TerLog) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($CashLogB) ?> <br> Depok : <?= number_format($CashLogD) ?>">
                        <?php if ($CashLog > 0) { ?>
                        <?= number_format($CashLog) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">4</td>
                    <td>Aset Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AnAsetgB) ?> <br> Depok : <?= number_format($AngAsetD) ?>">
                        <?php if ($AngAset > 0) { ?>
                        <?= number_format($AngAset) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Pembangunan : <?= number_format($TerAsetB) ?> <br> Pembelian : <?= number_format($TerAsetD) ?>">
                        <?php if ($TerAset > 0) { ?>
                        <?= number_format($TerAset) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Pembangunan : <?= number_format($CashAsetB) ?> <br> Pembelian : <?= number_format($CashAsetD) ?>">
                        <?php if ($CashAset > 0) { ?>
                        <?= number_format($CashAset) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">5</td>
                    <td>Uang Makan Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AngUmakanB) ?> <br> Depok : <?= number_format($AngUmakanD) ?>">
                        <?php if ($AngUmakan > 0) { ?>
                        <?= number_format($AngUmakan) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($TerUmakanB) ?> <br> Depok : <?= number_format($TerUmakanD) ?>">
                        <?php if ($TerUmakan > 0) { ?>
                        <?= number_format($TerUmakan) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($CashUmakanB) ?> <br> Depok : <?= number_format($CashUmakanD) ?>">
                        <?php if ($CashUmakan > 0) { ?>
                        <?= number_format($CashUmakan) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">6</td>
                    <td>Gaji Karyawan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AngGajiB) ?> <br> Depok : <?= number_format($AngGajiD) ?>">
                        <?php if ($AngGaji > 0) { ?>
                        <?= number_format($AngGaji) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($TerGajiB) ?> <br> Depok : <?= number_format($TerGajiD) ?>">
                        <?php if ($TerGaji > 0) { ?>
                        <?= number_format($TerGaji) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($CashGajiB) ?> <br> Depok : <?= number_format($CashGajiD) ?>">
                        <?php if ($CashGaji > 0) { ?>
                        <?= number_format($CashGaji) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">7</td>
                    <td>Anggaran Lainnya</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AngLainnyaB) ?> <br> Depok : <?= number_format($AngLainnyaD) ?>">
                        <?php if ($AngLainnya > 0) { ?>
                        <?= number_format($AngLainnya) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($TerLainnyaB) ?> <br> Depok : <?= number_format($TerLainnyaD) ?>">
                        <?php if ($TerLainnya > 0) { ?>
                        <?= number_format($TerLainnya) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($CashLainnyaB) ?> <br> Depok : <?= number_format($CashLainnyaD) ?>">
                        <?php if ($CashLainnya > 0) { ?>
                        <?= number_format($CashLainnya) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">8</td>
                    <td>Maintenance Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Aset : <?= number_format($AngMaintenB) ?> <br> Gedung : <?= number_format($AngMaintenD) ?>">
                        <?php if ($AngMainten > 0) { ?>
                        <?= number_format($AngMainten) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Aset : <?= number_format($TerMaintenB) ?> <br> Gedung : <?= number_format($TerMaintenD) ?>">
                        <?php if ($TerMainten > 0) { ?>
                        <?= number_format($TerMainten) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Aset : <?= number_format($CashMaintenB) ?> <br> Gedung : <?= number_format($CashMaintenD) ?>">
                        <?php if ($CashMainten > 0) { ?>
                        <?= number_format($CashMainten) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">9</td>
                    <td>Operasional Yayasan</td>
                    <td style="text-align: center;"><?= $bToday; ?> 2022</td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($AngOpYayasB) ?> <br> Depok : <?= number_format($AngOpYayasD) ?>">
                        <?php if ($AngOpYayas > 0) { ?>
                        <?= number_format($AngOpYayas) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($TerOpYayasB) ?> <br> Depok : <?= number_format($TerOpYayasD) ?>">
                        <?php if ($TerOpYayas > 0) { ?>
                        <?= number_format($TerOpYayas) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                    <td style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-html="true"
                        title="Bogor : <?= number_format($CashOpYayasB) ?> <br> Depok : <?= number_format($CashOpYayasD) ?>">
                        <?php if ($CashOpYayas > 0) { ?>
                        <?= number_format($CashOpYayas) ?>

                        <?php } else { ?>
                        0
                        <?php } ?>
                    </td>
                </tr>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php } else { ?>
<div class="card-body">
    <h5 class="card-title">BELUM ADA DATA LAPORAN</h5>
</div>
<?php } ?>