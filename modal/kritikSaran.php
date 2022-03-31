<!-- Modal -->
<div class="modal fade" id="modalLaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Kritik & Saran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $_SESSION["id"]; ?>">
                    <input type="hidden" name="nama" value="<?= $_SESSION["nama"]; ?>">
                    <div class="form-floating mb-2" id="saran">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="saran" required
                            oninvalid="this.setCustomValidity('Saran tidak boleh kosong')"
                            oninput="this.setCustomValidity('')"></textarea>
                        <label for="floatingTextarea2">Tulis disini..</label>
                    </div>
                    <div class="button">
                        <input type="submit" name="inputSaran" class="btn btn-primary w-100" value="Kirim Saran">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>