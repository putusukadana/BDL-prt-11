<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" ariahidden="true">&times;</button> 
 <center><h4 class="modal-title" id="myModalLabel">Edit
Mahasiswa</h4></center>
 </div>
 <div class="modal-body">
 <div class="container-fluid">
 <form method="POST" action="edit.php">
 <div class="row form-group">
 <div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">NIM:</label>
 </div>
 <div class="col-sm-10">
<input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>"
readonly>
 </div>
 </div>
 <div class="row form-group">
 <div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">NAMA:</label>
 </div>
 <div class="col-sm-10">
<input type="text" class="form-control" name="nama" value="<?php echo $row->nama;
?>">
 </div>
 </div>
 <div class="row form-group">
 <div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">ALAMAT:</label>
 </div>
 <div class="col-sm-10">
<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
 </div>
 </div>
 <div class="row form-group">
 <div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">JURUSAN:</label>
 </div>
 <div class="col-sm-10">
<input type="text" class="form-control" name="jurusan" value="<?php echo $row->jurusan; ?>">
 </div>
 </div>
 </div>
 </div>
 <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span
class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon
glyphicon-check"></span> Update</a>
 </form>
 </div>

 </div>
 </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1"
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" ariahidden="true">&times;</button> 
 <center><h4 class="modal-title" id="myModalLabel">Delete Mahasiswa</h4></center>
 </div>
 <div class="modal-body">
 <p class="text-center">Apakah anda ingin menghapus</p>
 <h2 class="text-center"><?php echo $row->nama; ?></h2>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-default" datadismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
 <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btndanger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
 </div>

 </div>
 </div>
</div>
