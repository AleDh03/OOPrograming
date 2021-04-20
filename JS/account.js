class Account{
    constructor(name, documents) {
    this.id;
    this.name = name;
    this.document = documents;
    this.email;
    this.password;
    }

    printDataAccount = () => {
        console.log("The name: " + this.name);
        console.log("The documents: " + this.documents);
        console.log("The email: " + this.email);
        console.log("The password: " + this.password);
    }
}