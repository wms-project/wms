<ul id="tt1" class="easyui-tree" data-options="animate:true,dnd:true">
    <li data-options="iconCls:'icon-home'">
        <span><a href="?module=home">Home</a></span>
    </li>
    <li data-options="iconCls:'icon-master'">
        <span>Master</span>
        <ul>
            <li data-options="iconCls:'icon-users'"><a href="?module=pengguna">Pengguna</a></li>
            <li data-options="iconCls:'icon-barang'"><a href="?module=barang">Barang</a></li>
            <li data-options="iconCls:'icon-supplier'"><a href="?module=supplier">Supplier</a></li>
        </ul>
    </li>
    <li data-options="iconCls:'icon-transaksi'">
        <span>Transaksi</span>
        <ul>
            <li data-options="iconCls:'icon-beli'"><a href="?module=beli">Pembelian</a></li>
            <li data-options="iconCls:'icon-jual'"><a href="?module=jual">Penjualan</a></li>
        </ul>
    </li>
    <li data-options="iconCls:'icon-lap'">
        <span>Laporan</span>
        <ul>
            <li data-options="iconCls:'icon-cetak'"><a href="?module=lap_barang">Barang</a></li>
            <li data-options="iconCls:'icon-cetak'"><a href="?module=lap_beli">Pembelian</a></li>
            <li data-options="iconCls:'icon-cetak'"><a href="?module=lap_jual">Penjualan</a></li>
            <li data-options="iconCls:'icon-cetak'"><a href="?module=lap_stok">Stok Barang</a></li>
        </ul>
    </li>
     <li data-options="iconCls:'icon-grafik'">
        <span>Grafik</span>
        <ul>
            <li data-options="iconCls:'icon-grafik'"><a href="?module=grafik_beli">Pembelian</a></li>
            <li data-options="iconCls:'icon-grafik'"><a href="?module=grafik_jual">Penjualan</a></li>
        </ul>
    </li>
	<li data-options="iconCls:'icon-out'">
        <span><a href="logout.php">Keluar</a></span>
    </li>
</ul>
