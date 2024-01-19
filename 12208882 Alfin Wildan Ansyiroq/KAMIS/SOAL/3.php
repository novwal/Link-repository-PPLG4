<?php 
$barang = [[
    'nama' => 'Ban',
    'diskon' => 10,
],
[
    'nama' => 'Oli Mesin',
],
[
    'nama' => 'Kampas Rem',
],
[
    'nama' => 'Busi',
    'diskon' => 9,
],
[
    'nama' => 'Akumulator',
    'diskon' => 7,
]
];

$barang_dengan_diskon = array_filter($barang, function($item) {
    return isset($item['diskon']);
});

foreach ($barang_dengan_diskon as $bds) {
    echo "Nama Barang: " . $bds['nama'] . " | Diskon: " . $bds['diskon'] . "<br>";
}
?>