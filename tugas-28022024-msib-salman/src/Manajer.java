public class Manajer extends Pegawai {
    private int tunjangan;

    public Manajer(String nama, int gaji, int tunjangan){
        super(nama, gaji);
        this.tunjangan = tunjangan;
    }
    public int infoGaji(){
        return super.gaji;
    }
    public int infoTunjangan(){
        return this.tunjangan;
    }
    public void settunjangan(int tunjangan){
        this.tunjangan = tunjangan;
    }

}