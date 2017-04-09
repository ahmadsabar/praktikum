public class Kendaraan{
   public static void main(String[] args) {
		Sepeda sepeda1 = new Sepeda();

		System.out.println("Gigi Sepeda 1 =" + sepeda1.getGigi());
		System.out.println("Merk Sepeda 1 =" + sepeda1.getMerk()); 

		System.out.println("Rubah Sepeda 1");
		sepeda1.setGigi(4);
		sepeda1.setMerk("Polygon");
		System.out.println("Gigi Sepeda 1 = "+sepeda1.getGigi());
		System.out.println("Merk Sepeda 1 = "+sepeda1.getMerk());

		sepeda sepeda2 = new Sepeda2(6,"Monster");
		System.out.println("Gigi Sepeda 2 = "+sepeda2.getGigi());
		System.out.println("Merk Sepeda 2 = "+sepeda2.getMerk());

		System.out.println("Rubah Sepeda 2");
		sepeda1.setGigi(12);
		sepeda1.setMerk("Balap");
		System.out.println("Gigi Sepeda 2 = "+sepeda2.getGigi());
		System.out.println("Merk Sepeda 2 = "+sepeda2.getMerk());

	}
}