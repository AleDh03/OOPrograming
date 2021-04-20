class Driver extends Account{
    constructor(license, document, email, password){
        super(license, document,email,password)
    }

    printDataDriver = () => {
        console.log(`Nombre: ${this.name}`);
        console.log(`Document: ${this.document}`);
        console.log(`E-mail: ${this.email}`);
        console.log(`Password ${this.password}`);
    }
}