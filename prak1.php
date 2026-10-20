<? 
class Mahasiswa{
	public $nama;
	private &nilai;

	public function setNama($nama){
		$this->nama=$nama;
	}
}

$mhs1 = new Mahasiswa();
echo "Nama: " . $mhs1->nama;
?>