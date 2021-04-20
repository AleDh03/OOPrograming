import java.util.ArrayList;
import java.util.Map;

class UberVan extends Car {
    Integer passenger;

    Map<String, Map<String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    // MÉTODO CONSTRUCTOR CON HERENCIA y ATRIBUTOS PROPIOS
    public UberVan(String license, Account driver) {
        super(license, driver);
    }

    // POLIMORFISMO
    @Override
    public void setPassenger(Integer passenger) {
        if (passenger == 6) {
            this.passenger = passenger;
        } else {
            System.out.println("Necesitas asignar 4 pasajeros");
        }
    }

}