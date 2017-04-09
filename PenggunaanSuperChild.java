public class PenggunaanSuperChild extends PenggunaanSuper {
	int num = 10;
	public void tampilkan(){
		System.out.println(" ini tampilan dari sub kelas");
	}
	public void penggunaanSuper(){
		tampilkan();
		super.tampilkan();
		System.out.println("nilai variable num pada sub kelas:" + num);
		System.out.println("nilai variable num pada super kelas:" + Super.num);
	}
	public static void main( String args[]) {
		PenggunaanSuperChild obj = new PenggunaanSuperChild();
		obj.penggunaanSuper();
	}
}