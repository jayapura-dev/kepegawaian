SELECT
    id_pegawai,
    nama,
    tb_penempatan.badan AS badan
FROM
    tb_peg
LEFT JOIN tb_penempatan ON tb_peg.id_penempatan = tb_penempatan.id_penempatan
WHERE
   status_pegawai = 'KONTRAK'
ORDER BY
    tb_peg.id_penempatan ASC
