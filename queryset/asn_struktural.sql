SELECT
    id_pegawai,
    nama,
    nip,
    tb_pangkat.pangkat AS pangkat,
    tb_jabatan.jabatan AS jabatan
FROM
    tb_peg
LEFT JOIN tb_pangkat ON tb_peg.id_pangkat = tb_pangkat.id_pangkat
LEFT JOIN tb_jabatan ON tb_peg.id_jabatan = tb_jabatan.id_jabatan
WHERE
    tb_peg.id_penempatan = '1' AND status_pegawai = 'ASN'
ORDER BY
    tb_peg.id_penempatan ASC
