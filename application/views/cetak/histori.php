<style>
    table {
        border-collapse: collapse;
    }

    td {
        width: 20%;
        border: 1px;
    }

    th {
        border: 1px solid black;
    }
</style>
</head>

<body>
    <h1 style="text-align:center">Laporan Suhu Basal Tubuh</h1>
    <table style=" width: 99%;border: 1;" align="center" cellspacing="4mm" cellpadding="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <?php if ($this->session->userdata('username') === 'diahrisqiwati') : ?>
                    <th>ID Entry</th>
                <?php endif; ?>
                <th>Suhu</th>
            </tr>
        </thead>
        <?php foreach ($histori as $row) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->created_at; ?></td>
                <td><?php echo $row->jam; ?></td>
                <?php if ($this->session->userdata('username') === 'diahrisqiwati') : ?>
                    <td><?php echo $row->entry_id; ?></td>
                <?php endif; ?>
                <td><?php echo $row->field2; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>