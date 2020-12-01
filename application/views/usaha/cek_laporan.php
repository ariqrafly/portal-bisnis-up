<div class="table-responsive" style="padding: 65px;">
    <table class="table">
        <thead>
            <tr>
                <th>Usaha</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $row) :?>
            <tr>
                <td style="max-width: 253px;">&lt;<?= $row->nama_usaha;?> &gt;</td>
                <td class="text-break" style="max-width: 816px;"><?= $row->comment;?></td>
            </tr>
            <?php endforeach;?> 
        </tbody>
    </table>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>