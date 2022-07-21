function validasi() {
		var biaya 	= document.getElementById("biaya").value;
		var nama 	= document.getElementById("nama").value;

		if ( biaya!="" && nama !="") {
			alert('Data sudah di submit !');
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
			return false;
		}
	}