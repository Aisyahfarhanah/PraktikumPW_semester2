<div class="col-md-12">
    <h3>
    Daftar Mata Kuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($list_mtkl as $mtkl){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$mtkl->kode?></td>
                    <td><?=$mtkl->nama?></td>
                    <td><?=$mtkl->sks?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>