class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        UberX uberX = new UberX("FDH9503", new Account("Alejandro Dh", "AL234"), "chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("LF1805", new Account("Lía", "LF0418"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        /*
         * Car car2 = new Car("FHG7604", new Account("lía Fer", "LA457"));
         * car2.passenger = 4; car2.printDataCar();
         */
    }
}