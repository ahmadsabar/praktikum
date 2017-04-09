public class Sepeda {
	int gigi;
	String merk;
	public Sepeda(){
		this.gigi=0;
		this.merk="Federal";
	}
    public Sepeda(int g, String m){
    	this.gigi = g;
    	this.merk = m;
    }
    public void setGigi (int g){
    	this.gigi=g;
    }
    public void setMerk(int m){
    	this.merk=m;
    }
    public int getGigi(){
    	return this.gigi;
    }
   public String getMerk(){
   	    return this.merk;
   }
   public void berjalan(){
   	 System.out.println("Sepeda berjalan");
   }
   public void belokKiri(){
   	 System.out.println("Sepeda belokKiri");
   }
   public void belokKanan(){
   	System.out.println("Sepeda belokKanan");
   }
}
