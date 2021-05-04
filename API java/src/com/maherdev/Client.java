package com.maherdev;

// the client class will handle all communication with the server

public class Client {
    private final  String application_private_key = "IkIsb6QHAgh0frHl"; // for security reasons encripted communication
    private int Id;

    // just for testing purpses
    private final String correctEmail = "user@live.com";
    private final String correctPassword = "password";

    public Client(){
        // constructeur de la classe
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
                        String password,
                        int tel,
                        String Adresse,
                        int educationalLevel, // 1- ecole 2- college 3- licée 4- universitaire
                        int activityArea,  // 1- Ingenieur 2- Senté 3- Artisin 4- commersent 5- ... 6- autres
                        Bitmap avatar
                        ){

        if (email.equals(this.correctEmail)){
            return 1; // email deja existant
        }else {
            return 2; // reqister valide
        }
    }

    public int[] publicationsIds(){
        return new int[]{1,2,3,4,5,6,7,8,9,10};
    }
}
