package com.maherdev;

import javax.swing.*;

// the client class will handle all communication with the server
//
public class Client {
    private final  String application_private_key = "IkIsb6QHAgh0frHl"; // for security reasons encripted communication
    private int Id;

    // just for testing purpses
    private final String correctEmail = "user1@live.com";
    private final String correctPassword = "password";

    public Client(){
        // constructeur de la classe from scratch
    }
    public Client(String email, String password){
        // constructeur de la classe if you already have session data

    }

    public int logIN(String email, String password){
         if (!email.equals(this.correctEmail)) { return 1; } // 1 for wrong email
         else if (!password.equals(this.correctPassword)){ return 2; } // 2 for wrong password
         else { return 3; } // for correct
    }

    public int register(String firstName,
                        String lastName,
                        int age,
                        boolean sex,
                        String email,
                        int tel,
                        String Adresse,
                        int educationalLevel, // 1- ecole 2- college 3- licée 4- universitaire
                        int activityArea,  // 1- Ingenieur 2- Senté 3- Artisin 4- commersent 5- ... 6- autres
                        Bitmap avatar
                        ){
        boolean serverError = false;
        if (firstName.equals("")){return 1;} // name required
        else if (lastName.equals("")){return 2;} // name required
        else if (email.equals("")){return 3;} // Email required
        if (email.equals(this.correctEmail)){return 4;} // Email alredy exists try logging in
        else{return 5;}
    }
}
