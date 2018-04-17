<br>
<center>
<table id="dg" class="easyui-datagrid" style="width:80%;height:410px"
    url="<?=base_url()?>index.php/pengguna/getPengguna/"
    title="Anggota"
    toolbar="#toolbar"
	  fitColumns="true"
    rownumbers="true"
	  singleSelect="true"
    pagination="true"
    pageList="[10,25,50,100]">
    <thead>
        <tr>
            <th field="kd_pengguna" style="width:20%; background-color:#E0EDFF">Kode Pengguna</th>
            <th field="nama" width="80%">Nama Pengguna</th>
        </tr>
    </thead>
</table>
	<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Data Baru</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Ubah Data</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Hapus Data</a>


    <span>Nama: </span>
    <input id="nama" type="text" style="line-hight:26px;border:1px solid #ccc" name="" value="" onclick="doSearch()">
    <!-- <a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()" iconCls="icon-search">Cari</a> -->

  </div>

	<div id="dlg" class="easyui-dialog" style="width:500px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<form id="fm" method="post" >
			<table>
        <tr>
					<td>Kode Pengguna</td>
					<td>:</td>
					<td><input name="kd_pengguna" id="kd_pengguna" class="easyui-textbox" required="true" style="width:200px;"></td>
				</tr>
        <tr>
					<td>Nama Anggota</td>
					<td>:</td>
					<td><input name="nama" id="nama" class="easyui-textbox" required="true" style="width:200px;"></td>
				</tr>
				</table>
			<input type="hidden" name="tombol" id="update" value="">
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>

	<script type="text/javascript">
		var url;
		function newUser(){
//			document.getElementById("update").value="Insert Data";
			var str = "Insert Data";
			document.getElementById('update').value = str;
			$('#kd_pengguna').textbox('readonly',false)
			$('#dlg').dialog('open').dialog('setTitle','Jenis Anggota');
			$('#fm').form('clear');
			url = '<?=base_url()?>index.php/pengguna/savePengguna';
		}
		function editUser(){
//			document.getElementById("update").value="Update Data";
			var str = "Update Data";
			document.getElementById('update').value = str;
			$('#kd_pengguna').numberbox('readonly',true)
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Informasi Kota');
				$('#fm').form('load',row);
				url = '<?=base_url()?>index.php/pengguna/updatePengguna/'+row.kd_pengguna;
			}
			else if (row==null){
				$.messager.alert('Error','Pilih data yang ingin diubah!','error');
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){

						$.messager.alert('Error',result.errorMsg,'error');

					}

					else if(result.success1){

						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
						$.messager.alert('Info','Data berhasil diubah','info');

					}

					else {

						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
						$.messager.alert('Info','Data berhasil ditambah','info');

					}
				}
			});
		}
		function destroyUser(){
  			var row = $('#dg').datagrid('getSelected');
  			if (row){
  				var str = "Delete Data";
  				$.messager.confirm('Konfirmasi','Apakah anda yakin menghapus data ini?',function(r){
  					if (r){
  						$.post('<?=base_url()?>index.php/pengguna/destroyCustomer',{kd_pengguna:row.kd_pengguna},function(result){
  							if (result.success){
  								$('#dg').datagrid('reload');	// reload the user data
  								$.messager.alert('Info','Data berhasil dihapus','info');
  							} else {
  								$.messager.alert('Error',result.errorMsg,'error');
  							}
  						},'json');
  					}
  				});
  			}
		}
    function doSearch(){
      var rows;
      alert(nama);
      $('#dg').datagrid('reload',{
        nama: nama
      });
      // $(document).ready(function(){
      //   $
      // })
      jeasyui.com/forum/index.php?topic=3420.0
    }
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
</center>
